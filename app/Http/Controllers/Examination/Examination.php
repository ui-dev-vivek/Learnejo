<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Examination extends Controller
{
    function index($pramaLink, $subPramaLink, $isCamara)
    {
        $getQuestions = DB::table('mock_test_questions')->get();
        return view('examination.exam')->with(compact('isCamara', 'getQuestions'));
    }
}