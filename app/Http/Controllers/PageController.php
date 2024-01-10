<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{

public function home(){
    return view('homepage');
}

public function createAd(){
    return view('announcement.create');
}

public function indexAd(){
    return view('announcement.index');
}

public function showAd(Announcement $announcement){
    return view('announcement.show', compact('announcement') ) ;
}


}
