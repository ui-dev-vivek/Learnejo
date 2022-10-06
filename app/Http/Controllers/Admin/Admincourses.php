<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admincourses extends Controller
{
    function courses()
    {
        $getCourses = DB::table('courses')->where('created_at', '>=', Carbon::now()->subDays(1)->toDateTimeString())->orderByDesc('id')->get();
        return view('admin.courses.courses')->with(compact('getCourses'));
    }




    function shareOnTelegram($pramaLink, $title)
    {
        $massage = "https://learnejo.com/Courses/" . $pramaLink;
        $link = "https://api.telegram.org/bot5256121624:AAHjNKwypRSdp6NPxrXC0okO_TZvBHG8uTE/sendMessage?chat_id=-1001687470466&text=" . $massage;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
    function postCourses(Request $req)
    {
        $isIn = DB::table('courses')->where('prama_link', $req->post('pramaLink'))->exists();
        if ($isIn) {
            $get = DB::table('courses')->where('prama_link', $req->post('pramaLink'))->first();
            $created = new Carbon($get->created_at);
            $now = Carbon::now();
            $difference = $created->diff($now)->days;
            if ($difference > 2) {
                DB::table('courses')->where('prama_link', $req->post('pramaLink'))->delete();
            } else {
                return 0;
            }
        }
        $catarray = ['Business', 'Teaching & Academics', 'Design', 'Music', 'Health & Fitness', 'Lifestyle', 'Personal Development', 'Photography & Video'];
        $isTrue = array_search($req->post('cat'), $catarray);
        if ($isTrue) {
            return 0;
        }
        $data['title'] = $req->post('title');
        $data['prama_link'] = $req->post('pramaLink');
        $data['type'] = "Udemy";
        $data['content'] = $req->post('desc');
        $data['image'] = $req->post('img');
        $data['link'] = $req->post('link');
        $data['enroll'] = $req->post('enroll');
        $data['view'] = $req->post('view');
        $data['status'] = 1;
        $data['catg'] = $req->post('cat');
        $data['sort_desc'] = $req->post('sortDesc');
        return DB::table('courses')->insert($data);
    }
}