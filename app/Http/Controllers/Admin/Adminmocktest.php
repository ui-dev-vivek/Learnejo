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
        return view('admin.mocktest.addmocktest');
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
}