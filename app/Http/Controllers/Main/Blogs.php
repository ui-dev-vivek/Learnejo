<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blogs extends Controller
{
    function index()
    {
        $getBlogs = DB::table('blog')->where('status', 1)->orderByDesc('id')->paginate(12);
        return view('main.blogs.blog')->with(compact('getBlogs'));
    }
    function view($pramaLink)
    {
        $blog = DB::table('blog')->where('prama_link', $pramaLink)->first();
        return view('main.blogs.view')->with(compact('blog'));
    }
}