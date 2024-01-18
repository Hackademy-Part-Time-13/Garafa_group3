<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

   public function becomeRevisor(){

      $message = 'Quick application';

      if (auth()->user()->is_revisor) {
         return redirect()->back()->with('error','Attenzione! Sei già revisore!');
      } else {
         Mail::to('admin@presto.it')->send(new BecomeRevisor(auth()->user(), $message));
         return redirect()->route('home')->with('message','Complimenti! Hai richiesto di diventare revisore correttamente');
      }
   }

   public function workWithUs() {
      return view('revisor.workwithus');
   }

   public function revisorApplication(Request $request) {

      $request->validate([
         'email' => 'required|exists:users,email',
         'description' => 'required|min:5|max:1000'
      ]);

      $message = $request->description;
      
      
      if (auth()->user()->is_revisor) {
         return redirect()->back()->with('error','Attenzione! Sei già revisore!');
      } else {
         Mail::to('admin@presto.it')->send(new BecomeRevisor(auth()->user(), $request->description));
         return redirect()->route('home')->with('message','Complimenti! Hai richiesto di diventare revisore correttamente');
      }

   }

   public function makeRevisor(User $user){
      
      Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
      return redirect('/')->with('message','Complimenti! L\'utente è diventato revisore');
   }
}
