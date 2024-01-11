<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
       return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback(){
        $userGoogle=Socialite::driver('google')->user();

        $newUser= User::create([
            'name'=>$userGoogle->name,
            'email'=>$userGoogle->email,
            'password'=>encrypt(''),
        ]);

        Auth::login($newUser);
        return redirect('createdAd');
    }

}
