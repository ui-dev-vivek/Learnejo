<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pdf extends Controller
{
    function index()
    {
        return view('main.pdfs.pdf');
    }
    function checkOut()
    {
        return "hi";
    }
}