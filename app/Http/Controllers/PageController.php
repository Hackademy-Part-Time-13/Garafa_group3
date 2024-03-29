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
    $ads = Ad::where('is_accepted', true)->get();

    return view('ads.index', compact('ads'));
}

public function showAd(Ad $ad){
    if($ad->is_accepted) {
        return view('ads.show', compact('ad'));
    } else {
        return redirect()->back();
    }
}

public function adsByCat(Category $category){
    
    return view('ads.index', compact('category'));
}

public function searchAd(Request $request){

    $ads = Ad::search($request->searched)->where('is_accepted', true)->get();
    return view('ads.index', compact('ads', 'request'));
}
// 

}