<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Whatsapplogin extends Controller
{
    function setToken(Request $req)
    {

        $data['token'] = $req->post('token');
        $data['status'] = 0;
        $insert = DB::table('whatsapplogintoken')->insert($data);
        if ($insert) {
            return 1;
        } else {
            return 0;
        }
    }
    function authToken(Request $req)
    {

        $token = $req->post('token');

        $isIn = DB::table('whatsapplogintoken')->where('token', $token)->where('status', 1)->exists();
        if ($isIn) {
            $name = DB::table('whatsapplogintoken')->where('token', $token)->where('status', 1)->first();
            if ($name->name == '-') {
                return '2';
            } else {
                return "1@" . $name->name;
            }
        }
    }

    function updateAuth(Request $req)
    {
        if ($req->post('name') == "-") {
            $phone = $data['phone'] = $req->post('phone');
            $data['status'] = 0;
            $data['name'] = $req->post('name');
            $isPhoneIn = DB::table('whatsapplogintoken')->where('phone', $phone)->exists();
            if ($isPhoneIn) {
                $datax['token'] = $req->post('token');
                DB::table('whatsapplogintoken')->where('token', $req->post('token'))->delete();
                DB::table('whatsapplogintoken')->where('phone', $req->post('phone'))->update($datax);

                $name = DB::table('whatsapplogintoken')->where('phone', $phone)->first();
                if ($name->name == '-') {
                    return 0;
                } else {
                    $stu = DB::table('student_profile')->where('phone', $phone)->where('status', 1)->first();
                    $req->session()->put('StudentId', $stu->students_id);
                    return 1;
                }
            } else {
                DB::table('whatsapplogintoken')->where('token', $req->post('token'))->update($data);
                return 0;
            }
        } else {

            $data['name'] = $req->post('name');
            $data['status'] = 1;
            $upd = DB::table('whatsapplogintoken')->where('phone', $req->post('phone'))->update($data);
            if ($upd) {
                $datas['Name'] = $req->post('name');
                $id = $datas['students_id'] = uniqid('ASG-');
                $datas['phone'] = $req->post('phone');
                $datas['status'] = 1;
                $ins = DB::table('student_profile')->insert($datas);
                $req->session()->put('StudentId', $id);
                if ($ins) {
                    return 1;
                } else {
                    return 0;
                }
            }
        }
    }

    function shareCourse()
    {
        $massage = "*Free Courses* \n";
        $data['share_whatsapp'] = 1;
        // DB::table('courses')->where('share_whatsapp', 0)->limit(4)->orderByDesc('id')->update($data);
        $get = DB::table('courses')->limit(10)->orderByDesc('id')->get();
        $sr = 1;
        foreach ($get as $course) {
            if ($course->share_whatsapp == 0) {
                $massage = $massage . $sr . ": " . $course->title . "\nhttps://learnejo.com/Courses/Card/" . $course->prama_link . "\n";
                $get = DB::table('courses')->where('prama_link', $course->prama_link)->update($data);
                $sr++;
            }
        }
        if ($sr > 1) {
            return $massage;
        } else {
            return 0;
        }
    }
}