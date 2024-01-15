<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
   public function index(){
    $ad_to_check = Ad::where('is_accepted', null)->first();
    return view('revisor.index', compact('ad_to_check'));
   }

   public function acceptAd(Ad $ad){
    $ad->setAccepted(true);
    return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
   }

   public function rejectAd(Ad $ad){
    $ad->setAccepted(false);
    return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
   }
}
