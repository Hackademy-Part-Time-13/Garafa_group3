<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }


    public function handleGithubCallback()
    {

        $userGithub = Socialite::driver('github')->stateless()->user();

        $newUser = User::updateOrCreate(
            [

                'github_id' => $userGithub->id,
            ],
            [
                'name' => $userGithub->nickname,
                'email' => $userGithub->email,
                'password' => encrypt(''),
            ]
        );

        Auth::login($newUser);
        return redirect(route('ad.create'));
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {

        $userGoogle = Socialite::driver('google')->stateless()->user();


        $newUser = User::updateOrCreate(
            [

                'email' => $userGoogle->email,
            ],
            [
                'name' => $userGoogle->name,
                'password' => encrypt(''),
                'google_id' => $userGoogle->id,
            ]
        );
    }
}
