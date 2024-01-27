<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
         $allFavorites = 0;
         foreach (Ad::where('user_id',auth()->user()->id)->where('is_accepted', true)->get() as $ad) {
            $allFavorites += $ad->favorites->count();
         }
        // dd($allFavorites);
        
        return view('user.auth.profile', compact('allFavorites'));
    }
    public function seller(User $user){

        $allFavorites = 0;
         foreach (Ad::where('user_id',$user->id)->where('is_accepted', true)->get() as $ad) {
            $allFavorites += $ad->favorites->count();
         }
       
                
        return view('user.sellerProfile',compact('user', 'allFavorites'));
    }
}
