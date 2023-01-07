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
        $getComments = DB::table('blog_comments')->where('blog_id', $pramaLink)->where('status', 1)->orderByDesc('created_at')->get();
        return view('main.blogs.view')->with(compact('blog', 'getComments'));
    }
    function addBlogComment(Request $req)
    {
        // return $req->post('comment') . " && " . $req->post('pramaLink');
        if (session('StudentId')) {
            $getStudent = DB::table('users')->where('student_id', session('StudentId'))->first();
            $data['name'] = $getStudent->name;
            $data['image'] = $getStudent->profile_pic;
        } else {
            $data['name'] = "Gust Visitor";
            $data['image'] = "https://cdn-icons-png.flaticon.com/512/20/20698.png";
        }
        $data['blog_id'] = $req->post('pramaLink');
        $data['comment'] = $req->post('comment');

        $isInsert = DB::table('blog_comments')->insert($data);
        if ($isInsert) {
            echo "<img class='rounded-circled  border border-success' width='30'src='" . $data['image'] . "'> <strong> " .  $data['name'] . "<p class='ps-4 m-2'><small>" . $req->post("comment") . "</small></p><br>";
        } else {
            echo "<p class='text-danger h6'> Falid To Submited Comment!</p>";
        }
    }
}