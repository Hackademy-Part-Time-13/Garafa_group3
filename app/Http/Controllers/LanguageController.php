<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller
{
    public function setLanguage(Request $request, $lang){
        
      

        
        session()->put('locale', $lang);
        return redirect()->back();
}
}