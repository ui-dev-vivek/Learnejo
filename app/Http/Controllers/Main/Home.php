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
        return view('main.home')->with(compact('getTopRankers', 'getTMockTest', 'getNTMockTest'));
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
}