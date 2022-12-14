<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class Courses extends Controller
{
    function index()
    {
        $getCourses = $this->getCourses();
        $getMock = 1; # $this->getMock();
        $getJobs = 1; # $this->getJobs();
        return view('main.courses.course')->with(compact('getCourses', 'getMock', 'getJobs'));
    }
    function byCatg($catg)
    {
        $getCourses = DB::table('courses')->where('catg', $catg)->where('status', 1)->orderByDesc('id')->paginate(10);
        $getMock = $this->getMock();
        $getJobs = $this->getJobs();
        return view('main.courses.course')->with(compact('getCourses', 'getMock', 'getJobs'));
    }

    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->orderByDesc('id')->paginate(10);
    }
    function getMock()
    {
        return DB::table('mock_test_topic')->limit(7)->orderByDesc('id')->get();
    }
    function getJobs()
    {
        return DB::table('jobs')->where('status', 1)->limit(7)->orderByDesc('id')->get();
    }

    function view($pramaLink)
    {
        $course = DB::table('courses')
            ->where('prama_link', $pramaLink)
            ->Where('status', 1)
            ->limit(1)
            ->first();
        if (!Cookie::has($pramaLink)) {
            Cookie::queue($pramaLink, $pramaLink, 120);
            DB::table('courses')->where('prama_link', $pramaLink)->increment('view', 1);
        }

        $getCourses = $this->getCourses();
        return view('main.courses.view')->with(compact('course', 'getCourses'));
    }
    function card($pramaLink)
    {
        $course = DB::table('courses')
            ->where('prama_link', $pramaLink)
            ->Where('status', 1)
            ->limit(1)
            ->first();
        $courses = DB::table('courses')
            ->whereDate('created_at', Carbon::today())
            ->Where('status', 1)
            ->limit(12)
            ->orderByDesc('view')
            ->get();
        $created = new Carbon($course->created_at);
        $now = Carbon::now();
        // $difference = $created->diff($now)->days; 
        $difference = $created->diffForHumans($now);
        if (!Cookie::has($pramaLink)) {
            Cookie::queue($pramaLink, $pramaLink, 120);
            DB::table('courses')->where('prama_link', $pramaLink)->increment('view', 1);
        }
        return view('main.courses.card')->with(compact('courses', 'course', 'difference'));
    }
    function enroll(Request $request)
    {
        $pramaLink = $request->post('pramaLink');
        $link = $request->post('link');
        DB::table('courses')->where('prama_link', $pramaLink)->increment('enroll', 1);
    }

    function sendData(Request $requests)
    {
        $authCode = $requests->post('AuthCode');
        if ($authCode == 'API-2022-OBS2356X8ZXSJHYT') {
            $data['mainUrl'] = "https://www.real.discount/filter/?category=All&subcategory=All&store=All&duration=All&price=0&rating=All&language=All&search=&submit=Filter&page=";

            $data['point1'] = ".card-title";
            $data['point2'] = ".card-cat";
            $data['point3'] = ".card-text";
            $data['point4'] = ".text-center";
            $data['subUrl'] = "https://www.real.discount/";
            $data['url'] = "https://learnejo.com/Post-Coursesx";
            return json_encode($data);
        } else {
            return 0;
        }
    }

    function shareCoursesnow()
    {
        $massage = "";
        $courses = DB::table('courses')->limit(10)->orderByDesc('id')->get();
        foreach ($courses as $course) {
            echo $course->title;
        }
    }
}