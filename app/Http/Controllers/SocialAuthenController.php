<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class SocialAuthenController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->createUserOrSignin($user, 'google');
    }

    public function createUserOrSignin($userSocial, $Socialprovider)
    {
        $user = User::firstOrCreate(
            ['email' => $userSocial->getEmail()],
            [
                'name' => $userSocial->getName(),
                'provider' => $Socialprovider,
                'provider_id' => $userSocial->getId(),
                'avatar' => $userSocial->getAvatar(),
            ]
        );
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
