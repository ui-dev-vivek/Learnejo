<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Examinationaction extends Controller
{
    function rules($pramaLink, $subPramaLink)
    {
        $topic = $this->getTopic($pramaLink);
        $heading = $this->getHeading($subPramaLink);
        return view('examination.rules')->with(compact('topic', 'heading'));
    }
    function start($pramaLink, $subPramaLink)
    {
        $student = $this->getStudent();
        $topic = $this->getTopic($pramaLink);
        $heading = $this->getHeading($subPramaLink);
        return view('examination.start')->with(compact('topic', 'heading', 'student'));
    }
    function getStudent()
    {
        return DB::table('users')->where('student_id', session('StudentId'))->first();
    }

    function getTopic($pramaLink)
    {
        return DB::table('mock_test_topic')->where('prama_link', $pramaLink)->first();
    }
    function getHeading($pramaLink)
    {
        return DB::table('mock_test_heading')->where('prama_link', $pramaLink)->first();
    }
}