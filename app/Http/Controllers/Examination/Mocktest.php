<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mocktest extends Controller
{
    function mockTestAbout($pramalink)
    {
        $getAbout = DB::table('mock_test_about')->where('prama_link', $pramalink)->first();
        return view('main.mocktest.mocktestabout')->with('getAbout', $getAbout);
    }
}