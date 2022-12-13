<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class Quiz extends Controller
{
    function index($pramaLink)
    {
        $getQuestion = Question::all()->where('quiz_link', '=', $pramaLink)->random(3);
        return view('main.quiz.view')->with(compact('getQuestion'));
    }
}