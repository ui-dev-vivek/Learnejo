<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminauth extends Controller
{
    function adminLogin()
    {
        return view('admin.adminlogin');
    }
    function postAdminLogin(Request $req)
    {
        $adid = $req->input('email');
        $adid = explode('@', $adid);
        $password = md5($req->input('password'));
        $result = DB::table('myladmin')->where('adid', $adid[0])->where('password', $password)->exists();
        if ($result) {
            $myladmin = DB::table('myladmin')->where('adid', $adid[0])->get();
            if ($myladmin[0]->status == 1) {
                if (0) {
                    return redirect('/Admin-Login')->with('error', 'Admin panel Is Under Maintenance!');
                } else {
                    $req->session()->put('MyLAdminId', $adid[0]);
                    return redirect(session('fromLoginRequestAdmin'));
                }
            } else {
                return redirect('/Admin-Login')->with('error', 'Your Account Is disabled! ');
            }
        } else {
            return redirect('/Admin-Login')->with('error', 'ID or Password Is Incorrect!');
        }
    }
}