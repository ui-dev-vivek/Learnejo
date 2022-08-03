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
}