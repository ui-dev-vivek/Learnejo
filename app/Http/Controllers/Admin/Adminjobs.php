<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminjobs extends Controller
{
    function jobsView()
    {
        $getCorpJobs = DB::table('jobs')->where('type', 'Corp')->where('created_at', '>=', Carbon::now()->subDays(2)->toDateTimeString())->orderByDesc('id')->get();
        $getGovtJobs = DB::table('jobs')->where('type', 'Govt')->where('created_at', '>=', Carbon::now()->subDays(2)->toDateTimeString())->orderByDesc('id')->get();
        return view('admin.jobs.jobs')->with(compact('getCorpJobs', 'getGovtJobs'));
    }
    function  loadJobs(Request $request)
    {
        $isIn = DB::table('jobs')->where('prama_link', $request->post('pramaLink'))->exists();
        if ($isIn) {
            return 2;
        }
        $data['title'] =  $request->post('title');
        $data['prama_link'] = $request->post('pramaLink');
        $data['type'] = $request->post('type');
        $data['sub_type'] = $request->post('sub_type');
        $data['content'] = $request->post('content');
        $data['image'] = $request->post('image');
        $data['link'] = $request->post('link');
        $data['role'] = $request->post('role');
        $data['experience'] = $request->post('experience');
        $data['salary'] = $request->post('salary');
        $data['company'] = $request->post('company');
        $data['status'] = 1;
        $data['website'] = $request->post('website');
        $ins = DB::table("jobs")->insert($data);
        if ($ins) {
            return 1;
        } else {
            return 0;
        }
    }

    function updateJobs(Request $request)
    {
        $subType = $request->post('subType');
        $pramaLink = $request->post('pramaLink');
        $type = $request->post('type');
        if ($type == "Govt") {
            $link = "https://www.sarkariresult.com/" . $subType . "/" . $pramaLink . "/";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $link);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
            $table = explode('<table', $result);
            $table2 = explode('</table>', $table[2]);
            $contant1 = "<table border='1' class='table text-start' >" . str_replace('align="center" style="margin-left:10px" />', " ", $table2[0]) . "</table>";
            $table3 = explode('</table>', $table[3]);
            $t3main = "<table class='table text-start' border='1'>" . str_replace('border="1" cellspacing="0" cellpadding="0">', " ", $table3[0]) . "></table>";
            $t3main = str_replace('https://www.sarkariresult.com/', "https://learnejo.com ",  $t3main);
            $t3main = str_replace('WWW.SARKARIRESULT.COM', "Job Update <strong> Learnejo</strong>",  $t3main);
            $removescript = explode('script', $t3main);
            $main = $removescript[0] . "strong>Learnejo : Job Updates</strong" . $removescript[6];
            $t3mainbr = explode('Download Mobile Apps for the Latest Updates', $main);
            $content2 = $t3mainbr[0] . "Team Learnejo</b> </h2></td></tr></tbody> </table>";
            $t3mainbr[1];
            $link1 = explode('href="', $t3mainbr[1]);
            $link2 = explode('" target="', $link1[3]); #0th main url
            $notification = explode('" target="', $link1[4]); #0th  Notification Url
            $notificationx = '<a class="text-centre" href="' . $notification[0] . '" target="_blank"><h2> Click Me for Job Notification</h2></a>';
            $data['image'] = "https://hindi.cdn.zeenews.com/hindi/sites/default/files/styles/zm_700x400/public/2022/04/18/1111056-sarkari-naukari.jpg";
            $data['link'] = $link2[0];
            $data['content'] = $contant1 . "<br>" . $content2 . "<br>" . $notificationx;
            $data['status'] = 1;
            $update = DB::table('jobs')->where('prama_link', $pramaLink)->update($data);
            return $result = ($update) ? $pramaLink : 'del';
        } else {

            $link = "https://www.freshercooker.in/" . $pramaLink;
            // $link = "https://www.freshercooker.in/servicenow-is-hiring-software-qa-engineer-jb0022662";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $link);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);

            $titlex = explode('<title>', $result);
            $titlexx = explode('</title>', $titlex[1]);

            $action = explode('noscript id=', $result);

            $subAction = explode('Join Telegram Group', $action[2]);

            $subAction1 = explode('<script', $subAction[1]);
            $a = $subAction1[0] . $subAction1[2] . $subAction1[4];
            $subActionx = explode('<div data-ad-id="3641"', $a);
            $x1 = str_replace(' (67K+ Members)	</a>', "<div>", $subActionx[0]);

            $tr = explode('</tr>', $x1);
            $content1 = $tr[0] . '</tr>' . $tr[1] . '</tr>' . $tr[2] . '</tr>' . $tr[3] . '</tr>' . $tr[4] . '</tr></tbody></table>';
            $x2 = explode('</script>', $subActionx[1]);
            $content2 = '<div>' . $x2[1];
            $joburlx = explode('<a href="', $subActionx[2]);
            $jobUrlx2 = explode('" target', $joburlx[1]);

            $data['title'] = $titlexx[0];

            $data['content'] = str_replace("<!-- PRyC WP: Add custom content to bottom of post/page: Standard Content START -->", "", $content1 . $content2);
            $data['link'] = $jobUrlx2[0];
            $data['status'] = 1;
            $update = DB::table('jobs')->where('prama_link', $pramaLink)->update($data);
            return $result = ($update) ? $pramaLink : 'del';
        }
    }
}