<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Whatsapp extends Controller
{
    function whatsapp()
    {
        $getGroups = DB::table('whatsapps')->get();
        return view('admin.whatsapp')->with('groups', $getGroups);
    }

    function changeGroupStatus(Request $req)
    {
        $id = $req->post('id');
        $isIn = DB::table('whatsapps')->where('id', $id)->where('status', 1)->exists();
        if ($isIn) {
            $data['status'] = 0;
            return $update = DB::table('whatsapps')->where('id', $id)->update($data);
        } else {
            $data['status'] = 1;
            return $update = DB::table('whatsapps')->where('id', $id)->update($data);
        }
    }
    function updateMembers(Request $req)
    {
        $id = $req->post('id');
        $data['members'] = $req->post('members');
        return $update = DB::table('whatsapps')->where('id', $id)->update($data);
    }

    function addWhatsappGroup(Request $request)
    {
        $data['group_name'] = $request->input('groupName');
        $data['link'] = $request->post('link');
        $data['members'] = 0;
        $data['status'] = 1;
        DB::table('Whatsapps')->insert($data);
        return redirect('/Admin/Whatsapp')->with('success', 'Group Added Successfully!.');
    }
    function shareCourses()
    {
        $sr = 1;
        $str = "*";
        $massage = "*Free Courses* \n ```Post at:" . date("d-m-y h:i a") . "```\n -------------------------------------------------- \n";
        $courses = DB::table('courses')->where('status', 1)->limit(5)->get();
        foreach ($courses as $course) {
            $massage = $massage . "*" . $sr++ . "-> " . $course->title . ":*  ```https://learnejo.com/Courses/" . $course->prama_link . "```\n \n";
        }
        $massage = $massage . "```Enroll fast Expired in 30 Min. \n Team Learnejo```";
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_PORT => "3000",
            CURLOPT_URL => "http://127.0.0.1:3000/Send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "courses=" . $massage,

        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
}