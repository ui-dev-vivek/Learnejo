<?php

namespace App\Http\Controllers;

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
            return 1;
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
            return $upd;
        }
    }
}