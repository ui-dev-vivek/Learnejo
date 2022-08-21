<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\MockTest\MockTestHeading;
use App\Models\MockTest\MockTestSubTopic;
use App\Models\MockTest\MockTestTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mocktest extends Controller
{
    function index()
    {
        $getTechMockTest = MockTestTopic::all()->where('type', '=', 'T')->sortByDesc('created_at');
        $getNonTechMockTest = MockTestTopic::all()->where('type', '=', 'NT')->sortByDesc('created_at');
        return view('main.mocktest.mocktest')->with(compact('getTechMockTest', 'getNonTechMockTest'));
    }
    function subView($pramaLink)
    {
        $getMockTest = MockTestTopic::where('prama_link', '=', $pramaLink)->get();
        return view('main.mocktest.subview')->with(compact('getMockTest'));
    }
    function view($pramaLink, $subPramaLink)
    {
        $getMockTest = MockTestSubTopic::where('prama_link', '=', $subPramaLink)->get();
        return view('main.mocktest.view')->with(compact('getMockTest', 'pramaLink'));
    }
    function start($pramaLink, $subPramaLink, $testId)
    {
        $getQuestion = MockTestHeading::where('prama_link', '=', $testId)->get();
        return view('main.mocktest.mocktestpage')->with(compact('getQuestion'));
    }
    function mockTestAbout($pramalink)
    {
        $getAbout = DB::table('mock_test_about')->where('prama_link', $pramalink)->first();
        return view('main.mocktest.mocktestabout')->with('getAbout', $getAbout);
    }
}