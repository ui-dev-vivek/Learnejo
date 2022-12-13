<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pdf extends Controller
{
    function index()
    {
        $getPDF = DB::table('pdf_s')->orderByDesc('id')->get();
        return view('main.pdfs.pdf')->with(compact('getPDF'));
    }
    function view($id, $status)
    {
        $PDF = DB::table('pdf_s')->where('id', $id)->first();
        return view('main.pdfs.view')->with(compact('PDF', 'status'));
    }
}