<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admindashboard extends Controller
{
    function dashboard()
    {

        $totalCourseCount = DB::table('courses')->where('status', 1)->count();
        $todayCourseCount = DB::table('courses')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)->toDateTimeString())->count();
        $totalCourseViewCount = DB::table('courses')->where('status', 1)->sum('view');
        $todayCourseViewCount = DB::table('courses')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)->toDateTimeString())->sum('view');
        $totalCourseEnrollCount = DB::table('courses')->where('status', 1)->sum('enroll');
        $todayCourseEnrollCount = DB::table('courses')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)
            ->toDateTimeString())->sum('enroll');

        $totalJobsCount = DB::table('jobs')->where('status', 1)->count();
        $todayJobsCount = DB::table('jobs')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)->toDateTimeString())->count();
        $totalJobsViewCount = DB::table('jobs')->where('status', 1)->sum('view');
        $todayJobsViewCount = DB::table('jobs')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)->toDateTimeString())->sum('view');
        $totalJobsApplyCount = DB::table('jobs')->where('status', 1)->sum('apply');
        $todayJobsApplyCount = DB::table('jobs')->where('status', 1)->where('created_at', '>=', Carbon::now()->subDays(1)
            ->toDateTimeString())->sum('apply');
        $users = DB::table('users')->orderByDesc('id')->get();
        return view('admin.dashboard')->with(compact('totalCourseCount', 'todayCourseCount', 'totalCourseViewCount', 'todayCourseViewCount', 'totalCourseEnrollCount', 'todayCourseEnrollCount'))->with(compact('totalJobsCount', 'todayJobsCount', 'totalJobsViewCount', 'todayJobsViewCount', 'totalJobsApplyCount', 'todayJobsApplyCount', 'users'));
    }
    public function deleteItem(Request $req)
    {
        return DB::table($req['tbname'])->where('id', $req['id'])->delete();
    }
    function apply(Request $request)
    {
        $pramaLink = $request->post('pramaLink');
        $link = $request->post('link');
        DB::table('jobs')->where('prama_link', $pramaLink)->increment('apply', 1);
    }
    function enroll(Request $request)
    {
        $pramaLink = $request->post('pramaLink');
        $link = $request->post('link');
        DB::table('courses')->where('prama_link', $pramaLink)->increment('enroll', 1);
    }
}