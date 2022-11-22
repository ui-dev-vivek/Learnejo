<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Exception;

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
                return redirect('/');
            } else {
                $sid = "ASG" . Str::random(12);
                $newUser = User::create([
                    'student_id' => "ASG" . Str::random(12),
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
                    return redirect('/');
                }
            }
        } catch (Exception $e) {
            dd($e->getMessage());
            // return redirect('/auth/google');
        }
    }
    function logout()
    {
        Session::flush();
        return redirect('/');
    }
}