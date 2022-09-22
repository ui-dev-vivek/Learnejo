<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class Courses extends Controller
{
    function index()
    {
        $getCourses = $this->getCourses();
        $getMock = $this->getMock();
        $getJobs = $this->getJobs();
        return view('main.courses.course')->with(compact('getCourses', 'getMock', 'getJobs'));
    }
    function byCatg($catg)
    {
        $getCourses = DB::table('courses')->where('catg', $catg)->where('status', 1)->orderByDesc('id')->paginate(12);
        $getMock = $this->getMock();
        $getJobs = $this->getJobs();
        return view('main.courses.course')->with(compact('getCourses', 'getMock', 'getJobs'));
    }

    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->orderByDesc('id')->paginate(12);
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
        return view('main.courses.view')->with('course', $course);
    }
    function card($pramaLink)
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
        return view('main.courses.card')->with('course', $course);
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
}