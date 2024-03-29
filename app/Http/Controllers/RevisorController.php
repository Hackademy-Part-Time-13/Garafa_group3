<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Ad;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RevisorController extends Controller
{

   public function index(){
      $ads_to_check = Ad::where('is_accepted', null)
      ->where('user_id', '!=', auth()->user()->id)->get();
      return view('revisor.index', compact('ads_to_check'));
   }


   public function show(Ad $ad_to_check)
   {
       return view('revisor.showAdToCheck', compact('ad_to_check'));
   }


   public function acceptAd(Ad $ad){
      $ad->setAccepted(true);
      return redirect()->route('revisor.index')->with('message', 'Complimenti, hai accettato l\'annuncio');
   }


   // public function rejectAd(Ad $ad){
   //    $ad->setAccepted(false);
   //    return redirect()->route('revisor.index')->with('message', 'Complimenti, hai rifiutato l\'annuncio');
   // }

   public function destroy(Ad $ad)
   {
      foreach ($ad->images as $image) {
         Storage::delete($image->path);
         $image->delete();
      }

      Storage::deleteDirectory('public/images/' . $ad->id);

      $ad->delete();
      return redirect()->route('revisor.index')->withInput()->with(['success' => 'Ad deleted successfully']);

   }




            // ZONA DIVENTA REVISORE

   // QUICK LINK DIVENTA REVISORE
   public function becomeRevisor(){

      $message = 'Sistem message: Quick application';
      $user= User::where('id',auth()->user()->id);
      
      if (auth()->user()->is_revisor) {
         return redirect()->back()->with('error','Attenzione! Sei già revisore!');
      } elseif (auth()->user()->is_applied) {
         return redirect()->back()->with('error','La tua richiesta è in stato di valutazione');
      } else {
         Mail::to('admin@presto.it')->send(new BecomeRevisor(auth()->user(), $message));      
         $user->update(['is_applied'=>true,]);
         return redirect()->route('home')->with('message','Complimenti! Hai richiesto di diventare revisore correttamente');
      }
   }


   // FORM PER DIVENTARE REVISORE
   public function workWithUs() {
      return view('revisor.workwithus');
   }

   public function revisorApplication(Request $request) {

      $request->validate([
         'email' => 'required|exists:users,email',
         'description' => 'required|min:5|max:1000'
      ]);

      $user= User::where('id',auth()->user()->id);
      
      if (auth()->user()->is_revisor) {
         return redirect()->back()->with('error','Attenzione! Sei già revisore!');
      } elseif (auth()->user()->is_applied) {
         return redirect()->back()->with('error','La tua richiesta è in stato di valutazione');
      } else {
         Mail::to('admin@presto.it')->send(new BecomeRevisor(auth()->user(), $request->description));
         $user->update(['is_applied'=>true,]);
         return redirect()->route('home')->with('message','Complimenti! Hai richiesto di diventare revisore correttamente');
      }
   }

   public function makeRevisor(User $user){
      
      Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
      return redirect('/')->with('message','Complimenti! L\'utente è diventato revisore');
   }


}