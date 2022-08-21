<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MockTest\MockTestTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminmocktest extends Controller
{
    function index()
    {
        $getTechMockTest = MockTestTopic::all()->where('type', '=', 'T')->sortByDesc('created_at');
        $getNonTechMockTest = MockTestTopic::all()->where('type', '=', 'NT')->sortByDesc('created_at');
        return view('admin.mocktest.mocktest')->with(compact('getTechMockTest', 'getNonTechMockTest'));
    }

    function addAboutMocktest($pramaLink)
    {
        $isIn = DB::table('mock_test_about')->where('prama_link', $pramaLink)->exists();
        if ($isIn) {
            $getAbout = DB::table('mock_test_about')->where('prama_link', $pramaLink)->first();
        } else {
            $data['title'] = "";
            $data['content'] = "";
            $data['status'] = 1;
            $data['prama_link'] = $pramaLink;
            DB::table('mock_test_about')->insert($data);
            $getAbout = DB::table('mock_test_about')->where('prama_link', $pramaLink)->first();
        }
        $mockTest = DB::table('mock_test_topic')->where('prama_link', $pramaLink)->first();
        return view('admin.mocktest.addabout')->with(compact('mockTest', 'getAbout'));
    }

    function postAddAboutMocktest(Request $request)
    {
        $data['title'] = $request->post('title');
        $data['content'] = $request->input('content');
        $data['status'] = 1;
        return $update = DB::table('mock_test_about')->where('prama_link', $request->post('pramaLink'))->update($data);
    }

    function addMockTest()
    {
        $getMockTest = DB::table('mock_test_topic')->get();
        return view('admin.mocktest.addmocktest')->with(compact('getMockTest'));
    }
    function postAddMockTest(Request $request)
    {
        $data['prama_link'] = $request->input('pramaLink');
        $data['name'] = $request->input('name');
        $data['image'] = $request->input('image');
        $data['type'] = $request->input('type');
        return DB::table('mock_test_topic')->insert($data);
    }

    function updateMockTest(Request $request)
    {
        $data['prama_link'] = $request->input('pramaLink');
        $data['name'] = $request->input('name');
        $data['image'] = $request->input('image');
        $data['type'] = $request->input('type');
        return DB::table('mock_test_topic')->where('id', $request->input('id'))->update($data);
    }

    function addMockTestSubTopic(Request $request)
    {
        $data['mock_test_topic_id'] = $request->post('mockTestId');
        $data['name'] = $request->post('name');
        $data['prama_link'] = $request->post('pramaLink');
        return DB::table('mock_test_sub_topic')->insert($data);
    }
    function getSubTopic(Request $request)
    {
        $getMockTest = DB::table('mock_test_sub_topic')->where('mock_test_topic_id', $request->post('id'))->get();
        return view('admin.mocktest.gettopic')->with('getTopic', $getMockTest);
    }

    function addMockTestHeading(Request $request)
    {
        $isIn = DB::table('mock_test_heading')->where('prama_link', $request->post('pramaLink'))->exists();
        if ($isIn) {
            return 0;
        } else {
            $data['prama_link'] = $request->post('pramaLink');
            $data['mock_test_sub_topic_id'] = $request->post('subTopicId');
            $data['name'] = $request->post('name');
            $data['timing'] = $request->post('timing');
            $data['number_of_question'] = $request->post('number');
            return DB::table('mock_test_heading')->insert($data);
        }
    }
}