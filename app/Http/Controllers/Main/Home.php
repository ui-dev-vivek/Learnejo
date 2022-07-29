<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    function Index()
    {
        $getTopRankers = $this->getTopRanker();
        return view('main.home')->with(compact('getTopRankers'));
    }

    function getTopRanker()
    {
        return DB::table('rank_list')->limit(2)->orderByDesc('points')->get();
    }
}