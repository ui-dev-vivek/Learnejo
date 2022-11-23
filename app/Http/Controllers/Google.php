<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
                Session::put('StudentId', $finduser->student_id);
                Auth::login($finduser);
                return redirect(session('fromLoginRequest'));
            } else {
                $newUser = User::create([
                    'student_id' => strtoupper("ASG" . Str::random(6) . "L"),
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'profile_pic' => $user->avatar,
                    'password' => encrypt('my-google')
                ]);
                Auth::login($newUser);
                $finduser = User::where('social_id', $user->id)->first();
                if ($finduser) {
                    Session::put('StudentId', $finduser->student_id);
                    Auth::login($finduser);
                    return redirect(session('fromLoginRequest'));
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
}