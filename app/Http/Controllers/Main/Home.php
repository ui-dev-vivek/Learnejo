<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    function Index()
    {
        $getTopRankers = $this->getTopRanker();
        $getTMockTest = $this->getTMockTest();
        $getNTMockTest = $this->getNTMockTest();
        $getCourses = $this->getCourses();
        $getCJobs = $this->getCorpJobs();
        $getGJobs = $this->getGovtJobs();
        $ranker = $this->ranker();
        $getUsers = $this->getUsers();
        return view('main.home')->with(compact('getTopRankers', 'getTMockTest', 'getNTMockTest', 'getCourses', 'getCJobs', 'getGJobs', 'ranker', 'getUsers'));
    }
    function getUsers()
    {
        return DB::table("users")->orderByDesc('id')->limit(5)->get();
    }
    function getTopRanker()
    {
        return DB::table('rank_list')->limit(2)->orderByDesc('points')->get();
    }
    function getTMockTest()
    {
        return DB::table('mock_test_topic')->where('type', "T")->get();
    }
    function getNTMockTest()
    {
        return DB::table('mock_test_topic')->where('type', "NT")->get();
    }
    function getCourses()
    {
        return DB::table('courses')->where('status', 1)->limit(4)->orderByDesc('id')->get();
    }
    function getCorpJobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', 'corp')->limit(3)->orderByDesc('id')->get();
    }
    function getGovtJobs()
    {
        return DB::table('jobs')->where('status', 1)->where('type', 'govt')->limit(3)->orderByDesc('id')->get();
    }
    function ranker()
    {
        return DB::table('rank_list')->limit(6)->orderByDesc('points')->get();
    }



    function contactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        return 1;
    }

    function whatsappJoin()
    {
        $getWhatsapp = DB::table('whatsapps')->where('status', 1)->first();
        return view('main.whatsapp')->with('whatsapp', $getWhatsapp);
    }

    function joinWhatsapp(Request $req)
    {

        $get = DB::table('whatsapps')->where('status', 1)->get();
        $datax['members'] = $get[0]->members + 1;
        if ($get[0]->members >= 500) {
            $data['status'] = 0;
            $datax['members'] = $get[1]->members + 1;
            $x = DB::table('whatsapps')->where('id', $get[0]->id)->update($data);
            $y = DB::table('whatsapps')->where('id', $get[1]->id)->update($datax);
            echo $get[1]->link;
        } else {
            $y = DB::table('whatsapps')->where('id', $get[0]->id)->update($datax);
            echo $get[0]->link;
        }
    }

    function siteMap(Response $r)
    {
        $jobs = DB::table('jobs')->where('status', 1)->orderByDesc('id')->get();
        $blogs = DB::table('blog')->where('status', 1)->orderByDesc('created_at')->get();
        return response()->view('main.sitemap', compact('blogs', 'jobs'))
            ->header('Content-Type', 'text/xml');;
    }
}