<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

public function home(){
    return view('homepage');
}

public function createAd(){
    return view('ads.create');
}

public function indexAd(){
    return view('ads.index');
}

public function showAd(Ad $ad){
    return view('ads.show', compact('ad') ) ;
}

public function prova(){
    
    return view('prova');
}

public function adsByCat(Category $category){

    return view('ads.adsByCategory', compact('category'));
}


}