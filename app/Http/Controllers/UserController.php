<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        
        return view('user.auth.profile');
    }
    public function seller(User $user){
        
        return view('user.sellerProfile',compact('user'));
    }
}
