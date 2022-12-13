<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Examination extends Controller
{
    function index($pramaLink, $subPramaLink)
    {
        return view('examination.exam');
    }
}