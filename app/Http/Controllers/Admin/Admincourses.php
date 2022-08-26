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

    public function loadCourses()
    {
        dispatch(function () {
            $pramaLinks = [];
            for ($z = 2; $z > 0; $z--) {
                $link = "https://www.real.discount/filter/?category=All&subcategory=All&store=All&duration=All&price=All&rating=All&language=All&search=&submit=Filter&page=" . $z;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $link);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);
                $ex = explode('<a href="/offer/', $result);
                for ($x = 12; $x >= 2; $x--) {
                    $c_link = explode('/"', $ex[$x]);


                    // $exp = explode("Expires:", $ex[$x]);
                    // $expx = explode('"', $exp[1]);
                    // $e_date = $expx[3];
                    // if (empty($e_date)) {
                    //     continue;
                    // }

                    # $e_date = date('Y-m-d', strtotime($currentTime . ' + 2 days')) . "T" . $time_r[rand($i_l, $f_l)];

                    $courseCount = DB::table('courses')->where('prama_link', $c_link[0])->count();
                    if ($courseCount == 0) {
                        if (strpos($c_link[0], '%') !== false) {
                        } else {

                            $pramalink = $data['prama_link'] = $c_link[0];
                            #$data['postDate']= $currentTime;
                            #$data['expiryDate'] = $e_date;
                            $data['type'] = "Udemy";
                            $data['status'] = 0;
                            $data['view'] = 0;
                            $data['enroll'] = 0;
                            $insertCourseId = DB::table('courses')->insert($data);
                            if ($insertCourseId) {
                                echo $this->getupdateCourses($pramalink);
                            }
                        }
                    }
                }
            }
        })->delay(now()->addSeconds(value: 5));
    }

    public function updateCourses(Request $req)
    {
        $link = "https://www.real.discount/offer/" . $req->post('prama_link') . "/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $fx = explode("[", $result);
        $fxx = explode("%", $fx[1]);
        if ($fxx[0] != '100') {
            die('del');
        }
        $ex = explode("container-fluid", $result);
        $ex2 = explode('img src=', $ex[3]);
        $itft = explode('"', $ex2[1]);
        $itf = ($itft[1] == "/img/ec.png") ? $ex2[2] : $ex2[1];
        $ex2x = explode('"', $itf);
        $data['image'] = $ex2x[1];
        $titlex = $ex2x[3];
        $data['title'] = rtrim($titlex, 'Coupon');
        $ex3x = explode('<a href=', $itf);
        $ex3x1 = explode('"', $ex3x[2]);
        $url_linkx = explode("https://", $ex3x1[1]);
        $isUdemy = explode('.', $url_linkx[1]);
        if ($isUdemy[1] != 'udemy') {
            die('del');
        }
        $url_link = "https://" . $url_linkx[1];
        if (strpos($url_link, 'couponCode') !== false) {
            $urlx = explode('?', $url_link);
            $urlxx = explode('couponCode=', $urlx[1]);
            $data['link'] = $urlx[0] . "?couponCode=" . $urlxx[1];
        } else {
            die('del');
        }
        $ex3 = explode('Description', $ex[3]);
        $des = explode("</div>", $ex3[1]);
        $data['content'] = "<h3>Description" . $des[0];
        $data['status'] = 1;
        $update = DB::table('courses')->where('prama_link', $req->post('prama_link'))->update($data);

        return $result = ($update) ? $req->post('prama_link') : 0;
    }

    public function getupdateCourses($pramaLink)
    {
        $link = "https://www.real.discount/offer/" . $pramaLink . "/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $fx = explode("[", $result);
        $fxx = explode("%", $fx[1]);
        if ($fxx[0] != '100') {
            die('del');
        }
        $ex = explode("container-fluid", $result);
        $ex2 = explode('img src=', $ex[3]);
        $itft = explode('"', $ex2[1]);
        $itf = ($itft[1] == "/img/ec.png") ? $ex2[2] : $ex2[1];
        $ex2x = explode('"', $itf);
        $data['image'] = $ex2x[1];
        $titlex = $ex2x[3];
        $data['title'] = rtrim($titlex, 'Coupon');
        $ex3x = explode('<a href=', $itf);
        $ex3x1 = explode('"', $ex3x[2]);
        $url_linkx = explode("https://", $ex3x1[1]);
        $isUdemy = explode('.', $url_linkx[1]);
        if ($isUdemy[1] != 'udemy') {
            die('del');
        }
        $url_link = "https://" . $url_linkx[1];
        if (strpos($url_link, 'couponCode') !== false) {
            $urlx = explode('?', $url_link);
            $urlxx = explode('couponCode=', $urlx[1]);
            $data['link'] = $urlx[0] . "?couponCode=" . $urlxx[1];
        } else {
            die('del');
        }
        $ex3 = explode('Description', $ex[3]);
        $des = explode("</div>", $ex3[1]);
        $data['content'] = "<h3>Description" . $des[0];
        $data['status'] = 1;
        return DB::table('courses')->where('prama_link',  $pramaLink)->update($data);
    }

    function uploadCourses($pramaLink)
    {
        $link = url('/Admin/updateCourses/') . $pramaLink;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
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
            return 0;
        }
        $data['title'] = $req->post('title');
        $data['prama_link'] = $req->post('pramaLink');
        $data['type'] = "Udemy";
        $data['content'] = $req->post('desc');
        $data['image'] = $req->post('img');
        $data['link'] = $req->post('link');
        $data['enroll'] = 0;
        $data['view'] = 0;
        $data['status'] = 1;
        $data['catg'] = $req->post('cat');
        $data['sort_desc'] = $req->post('sortDesc');
        return DB::table('courses')->insert($data);
    }
}