<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminimage extends Controller
{
    function index()
    {
        $getImages = DB::table('images')->orderByDesc('id')->get();
        return view('admin.image')->with(compact('getImages'));
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,webp,png,jpeg,gif,svg|max:2048',

        ]);

        $name = $request->file('image')->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        // $path = $request->file('image')->store('public/images');
        $path = $request->image->move('images', $name);
        echo $data['name'] = $request->input('name');
        $path = str_replace('public', 'storage', $path);
        echo $data['url'] = $path;
        $isInsert = DB::table('images')->insert($data);
        if ($isInsert) {
            return redirect('/Admin/Image')->with('massage', 'Image Has been uploaded!');
        } else {
            return redirect('Admin/Image')->with('massage', 'Error on Uploading');
        }





        // $save->name = $name;
        // $save->path = $path;

        // $save->save();

        // return redirect('image-upload')->with('status', 'Image Has been uploaded')->with('image', $name);
    }
}