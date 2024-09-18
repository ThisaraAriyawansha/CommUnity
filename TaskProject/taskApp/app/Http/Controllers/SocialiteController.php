<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->registerOrLoginUser($user);

        return redirect()->intended('/');
    }

    public function redirectToApple()
    {
        return Socialite::driver('apple')->redirect();
    }

    public function handleAppleCallback()
    {
        $user = Socialite::driver('apple')->stateless()->user();
        $this->registerOrLoginUser($user);

        return redirect()->intended('/');
    }

    protected function registerOrLoginUser($socialUser)
    {
        $user = User::where('email', $socialUser->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => bcrypt('default-password'),
            ]);
        }

        Auth::login($user);
    }
}
