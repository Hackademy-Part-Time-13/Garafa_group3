<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SocialiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

//ADS
Route::get('/createAd', [PageController::class, 'createAd'])->middleware(['auth', 'verified'])->name('ad.create');
Route::get('/ads', [PageController::class, 'indexAd'])->name('ads.index');
Route::get('/ad/{ad}', [PageController::class, 'showAd'])->name('ad.show');
Route::get('/adsByCategory/{category}', [PageController::class, 'adsByCat'])->name('adsByCat');

//RICERCA ANNUNCIO
Route::get('/searched/ads', [PageController::class, 'searchAd'])->name('ad.searched');

Route::prefix('auth')->group(function () {
        //SOCIALITE GITHUB  
    Route::get('/github',[SocialiteController::class,'redirectToGithub']);
    Route::get('/github/callback',[SocialiteController::class,'handleGithubCallback']);
        //SOCIALITE GOOGLE
    Route::get('/google',[SocialiteController::class,'redirectToGoogle']);
    Route::get('/google/callback',[SocialiteController::class,'handleGoogleCallback']);
        //PAGINA PROFILO
    Route::get('/profile',[UserController::class, 'profile'])->middleware(['auth', 'verified'])->name('user.auth.profile');
    Route::get('/profile/showAd/{ad}',[AdsController::class, 'show'])->middleware(['auth', 'verified'])->name('user.auth.profile');
});

//HOME REVISORE/ACCETTA E RIFIUTA ANNUNCIO
Route::middleware('isRevisor')->group(function() {
    Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.index');
    Route::patch('/accetta/annuncio/{ad}',[RevisorController::class,'acceptAd'])->name('revisor.accept_ad');
    Route::patch('/rifiuta/annuncio/{ad}',[RevisorController::class,'rejectAd'])->name('revisor.reject_ad');
});

// RICHIEDI PER DIVENTARE REVISORE
Route::middleware('auth', 'verified')->group(function() {
Route::get('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->name('become.revisor');
Route::get('/workWithUs', [RevisorController::class,'workWithUs'])->name('work.with.us');
Route::post('/revisorApplication', [RevisorController::class,'revisorApplication'])->name('revisor.application');
});

// RENDI UTENTE REVISORE
Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');


// LANGUAGE
Route::post('lingua/{lang}',[LanguageController::class, 'setLanguage'])->name('set.language.locale');


// SELLER PROFILE
Route::get('/seller/profile/{user}',[UserController::class, 'seller'])->middleware(['auth', 'verified'])->name('user.seller.profile');

