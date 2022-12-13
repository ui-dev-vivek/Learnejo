<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function index()
    {
        $getUsers = DB::table('users')->orderByDesc('login_count')->get();
        return view('admin.user.users')->with(compact('getUsers'));
    }
}