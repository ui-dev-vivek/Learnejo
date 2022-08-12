<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminmocktest extends Controller
{
    function addAboutMocktest($pramaLink)
    {
        $isIn = DB::table('mock_test_about')->where('prama_link', $pramaLink)->exists();
        if ($isIn) {
            $getAbout = DB::table('mock_test_about')->where('prama_link', $pramaLink)->first();
            return view('admin.mocktest.addabout')->with('getAbout', $getAbout);
        } else {
            $data['title'] = "";
            $data['content'] = "";
            $data['status'] = 1;
            $data['prama_link'] = $pramaLink;
            DB::table('mock_test_about')->insert($data);
            $getAbout = DB::table('mock_test_about')->where('prama_link', $pramaLink)->first();
            return view('admin.mocktest.addabout')->with('getAbout', $getAbout);
        }
    }
    function postAddAboutMocktest(Request $request)
    {
        $data['title'] = $request->post('title');
        $data['content'] = $request->input('content');
        $data['status'] = 1;
        return $update = DB::table('mock_test_about')->where('prama_link', $request->post('pramaLink'))->update($data);
    }
}