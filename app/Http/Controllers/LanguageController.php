<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage(Request $request, $lang){
        
      

        session()->put('locale', $lang);

        return redirect()->back();
}
}