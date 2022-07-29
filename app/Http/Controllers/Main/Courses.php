<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class Courses extends Controller
{
    function index()
    {
        $getCourses = $this->getCourses();
        $getMock = $this->getMock();
        $getJobs = $this->getJobs();
        return view('main.courses.course')->with(compact('getCourses', 'getMock', 'getJobs'));
    }

    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->orderByDesc('id')->paginate(12);
    }
    function getMock()
    {
        return DB::table('mock_test_topic')->limit(7)->orderByDesc('id')->get();
    }
    function getJobs()
    {
        return DB::table('jobs')->where('status', 1)->limit(7)->orderByDesc('id')->get();
    }

    function view($pramaLink)
    {
        $course = DB::table('courses')
            ->where('prama_link', $pramaLink)
            ->Where('status', 1)
            ->limit(1)
            ->get();
        if (!Cookie::has($pramaLink)) {
            Cookie::queue($pramaLink, $pramaLink, 120);
            DB::table('courses')->where('prama_link', $pramaLink)->increment('view', 1);
        }

        foreach ($course as $onecourse) {
            return view('main.courses.view')->with('course', $onecourse);
        }
    }
    function enroll(Request $request)
    {
        $pramaLink = $request->post('pramaLink');
        $link = $request->post('link');
        DB::table('courses')->where('prama_link', $pramaLink)->increment('enroll', 1);
    }
}