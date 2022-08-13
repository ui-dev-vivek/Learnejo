<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pages extends Controller
{
    function pages($pramaLink)
    {
        $getPages = DB::table('pages')->where('prama_link', $pramaLink)->where('status', 1)->first();
        return view('main.pages')->with(compact('getPages'));
    }
}