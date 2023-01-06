<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminblogs extends Controller
{
    function index()
    {
        $getBlogs = DB::table('blog')->get();
        return view('admin.blogs.blog')->with(compact('getBlogs'));
    }

    function addBlog()
    {
        return view('admin.blogs.addblog');
    }

    function postAddBlog(Request $request)
    {
        $data['prama_link'] = $request->post('pramaLink');
        $data['title'] = $request->input('title');
        $data['sort_desc'] = $request->input('sortDesc');
        $data['long_image'] = $request->post('longImage');
        $data['mobile_image'] = $request->post('mobileImage');
        $data['content'] = $request->input('content');
        $data['catg'] = $request->input('catg');
        $data['tags'] = $request->input('tags');
        $isIn = DB::table('blog')->where('prama_link', $data['prama_link'])->exists();
        if ($isIn) {
            return DB::table('blog')->where('prama_link', $data['prama_link'])->update($data);
        } else {
            return DB::table('blog')->insert($data);
        }
    }

    function editBlog($pramaLink)
    {
        $blog = DB::table('blog')->where('prama_link', $pramaLink)->first();
        return view('admin.blogs.addblog')->with(compact('blog'));
    }
}