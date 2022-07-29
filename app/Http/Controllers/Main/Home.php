<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    function Index()
    {
        $getTopRankers = $this->getTopRanker();
        $getTMockTest = $this->getTMockTest();
        $getNTMockTest = $this->getNTMockTest();
        $getCourses = $this->getCourses();
        $getCJobs = $this->getCorpJobs();
        $getGJobs = $this->getGovtJobs();
        $ranker = $this->ranker();
        return view('main.home')->with(compact('getTopRankers', 'getTMockTest', 'getNTMockTest', 'getCourses', 'getCJobs', 'getGJobs', 'ranker'));
    }

    function getTopRanker()
    {
        return DB::table('rank_list')->limit(2)->orderByDesc('points')->get();
    }
    function getTMockTest()
    {
        return DB::table('mock_test_topic')->where('type', "T")->get();
    }
    function getNTMockTest()
    {
        return DB::table('mock_test_topic')->where('type', "NT")->get();
    }
    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->limit(4)->orderByDesc('id')->get();
    }
    function getCorpJobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', 'corp')->limit(3)->orderByDesc('id')->get();
    }
    function getGovtJobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', 'govt')->limit(3)->orderByDesc('id')->get();
    }
    function ranker()
    {
        return DB::table('rank_list')->limit(6)->orderByDesc('points')->get();
    }



    function contactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        return 1;
    }
}