<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialLogin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialLoginController extends Controller
{
    public function toProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function handleCallback($driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            return redirect()->route('login')->withErrors('Authentication failed, please try again.');
        }

        $user_account = SocialLogin::where('provider', $driver)->where('provider_id', $user->getId())->first();

        if ($user_account) {
            Auth::login($user_account->user);
        } else {
            $db_user = User::where('email', $user->getEmail())->first();

            if ($db_user) {
                SocialLogin::create([
                    'provider' => $driver,
                    'provider_id' => $user->getId(),
                    'user_id' => $db_user->id
                ]);
            } else {
                $db_user = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make(rand(1000, 9999))
                ]);

                SocialLogin::create([
                    'provider' => $driver,
                    'provider_id' => $user->getId(),
                    'user_id' => $db_user->id
                ]);
            }

            Auth::login($db_user);
        }

        Session::regenerate();
        return redirect()->intended('dashboard');
    }
}
