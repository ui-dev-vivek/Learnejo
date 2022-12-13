<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Mcqs\McqHeading;
use App\Models\Mcqs\McqSubTopic;
use App\Models\Mcqs\McqTopic;
use Illuminate\Http\Request;

class Mcqs extends Controller
{
    function index()
    {
        $getTechMcqs = $this->getTechMcqs();
        $getNonTechMcqs = $this->getNonTechMcqs();
        return view('main.mcqs.mcq')->with(compact('getTechMcqs', 'getNonTechMcqs'));
    }
    function getTechMcqs()
    {
        return  McqTopic::where('type', '=', 'T')->get();
    }
    function getNonTechMcqs()
    {
        return  McqTopic::where('type', '=', 'NT')->get();
    }
    function subView($pramaLink)
    {
        $getMcq = McqSubTopic::where('prama_link', '=', $pramaLink)->get();
        return view('main.mcqs.subview')->With('getHeading', $getMcq);
    }
    function view($subPramaLink, $pramaLink)
    {
        $heading = McqHeading::where('prama_link', '=', $pramaLink)->get();
        $headings = McqSubTopic::where('prama_link', '=', $subPramaLink)->get();
        return view('main.mcqs.view')->with(compact('heading', 'headings'));
    }
}