<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studentauth extends Controller
{
    function postStudentLogin(Request $req)
    {
        $stuid = $req->input('email');

        $password = md5($req->input('password'));
        $result = DB::table('students')->where('email', $stuid)->where('password', $password)->exists();
        if ($result) {
            $student = DB::table('students')->where('email', $stuid)->first();
            if ($student->status == 1) {
                if (0) {
                    return "Student Dashboard Under Maintenance";
                } else {
                    $stu = DB::table('students')->where('email', $stuid)->where('status', 1)->first();
                    $req->session()->put('StudentId', $stu->stuid);
                    return "Welcome " . $stu->stuid;
                }
            } else {
                return "Your Account Is disabled!";
            }
        } else {
            return "ID or Password Is Incorrect!";
        }
    }
}