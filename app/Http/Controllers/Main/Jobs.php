<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class Jobs extends Controller
{
    function index()
    {
        $getCorpJobs = $this->getCorpjobs();
        $getGovtJobs = $this->getGovtjobs();
        $getMock = $this->getMOck();
        $getCourses = $this->getCourses();
        return view('main.jobs.job')->with(compact('getCorpJobs', 'getGovtJobs', 'getMock', 'getCourses'));
    }
    function getCorpjobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', "Corp")->orderByDesc('id')->paginate(20);
    }
    function getGovtjobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', "Govt")->orderByDesc('id')->paginate(20);
    }
    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->limit(7)->orderByDesc('id')->get();
    }
    function getMock()
    {
        return DB::table('mock_test_topic')->limit(7)->orderByDesc('id')->get();
    }

    function view($pramaLink)
    {
        $job = DB::table('jobs')
            ->where('prama_link', $pramaLink)
            ->Where('status', 1)
            ->first();
        if (!Cookie::has($pramaLink)) {
            Cookie::queue($pramaLink, $pramaLink, 120);
            DB::table('jobs')->where('prama_link', $pramaLink)->increment('view', 1);
        }

        return view('main.jobs.view')->with('job', $job);
    }


    function apply(Request $request)
    {
        $pramaLink = $request->post('pramaLink');
        $link = $request->post('link');
        DB::table('jobs')->where('prama_link', $pramaLink)->increment('apply', 1);
    }
}