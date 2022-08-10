<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Stusidedashboard extends Controller
{
    function index(Request $request)
    {
        if (!$request->session()->has('StudentId')) {
            return "Students Session Expired.";
        } else {
            return "Welcome Mr Vivek Yadav.";
        }
    }
}