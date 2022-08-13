<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminpages extends Controller
{
    function index()
    {
        $getPages = DB::table('pages')->get();
        return view('admin.pages.page')->with(compact('getPages'));
    }

    function addPages()
    {
        return view('admin.pages.addpage');
    }

    function postAddPages(Request $request)
    {
        $data['prama_link'] = $request->post('pramaLink');
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['image'] = $request->post('image');
        $data['contant'] = $request->input('contant');
        $data['side_contant'] = $request->input('sideContant');
        $data['status'] = 1;
        $isIn = DB::table('pages')->where('prama_link', $data['prama_link'])->exists();
        if ($isIn) {
            return DB::table('pages')->where('prama_link', $data['prama_link'])->update($data);
        } else {
            return DB::table('pages')->insert($data);
        }
    }

    function editPages($pramaLink)
    {
        $pages = DB::table('pages')->where('prama_link', $pramaLink)->first();
        return view('admin.pages.addpage')->with(compact('pages'));
    }
}