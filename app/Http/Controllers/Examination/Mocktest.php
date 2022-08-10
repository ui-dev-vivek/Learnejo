<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mocktest extends Controller
{
    function mockTestAbout($pramalink)
    {
        return view('main.mocktest.mocktestabout');
    }
}