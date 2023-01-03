<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class Google extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if ($finduser) {
                DB::table('users')->where('social_id', $user->id)->increment('login_count', 1);
                Session::put('StudentId', $finduser->student_id);
                Auth::login($finduser);
                if (Session::has('fromLoginRequest')) {
                    return redirect(session('fromLoginRequest'));
                } else {
                    return redirect('/');
                }
            } else {
                $newUser = User::create([
                    'student_id' => strtoupper("ASG" . Str::random(6) . "L"),
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'login_count' => 1,
                    'profile_pic' => $user->avatar,
                    'password' => encrypt('my-google')
                ]);
                Auth::login($newUser);
                $finduser = User::where('social_id', $user->id)->first();
                if ($finduser) {
                    DB::table('users')->where('social_id', $user->id)->increment('login_count', 1);
                    Session::put('StudentId', $finduser->student_id);
                    Auth::login($finduser);

                    if (Session::has('fromLoginRequest')) {
                        return redirect(session('fromLoginRequest'));
                    } else {
                        return redirect('/');
                    }
                }
            }
        } catch (Exception $e) {
            // echo print_r($user);
            // dd($e->getMessage());/
            return redirect('/auth/google');
        }
    }
    function logout()
    {
        Session::flush();
        return redirect('/');
    }

    function isLogin(Request $request)
    {
        if (Session::has('StudentId')) {
            return 1;
        } else {
            Session::put('fromLoginRequest', $request->post('backUrl'));
            return 0;
        }
    }
}