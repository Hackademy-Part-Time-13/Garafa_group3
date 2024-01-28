<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageFileController extends Controller
{
    // public function index(){
    //     return view('welcome');
    // }


    public function imageFileUpload(Request $request){

        $this->validate($request, [
            'file'=>'required|'
        ])
    }
}
