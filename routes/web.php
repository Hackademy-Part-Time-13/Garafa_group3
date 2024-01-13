<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

// BUONA FORTUNA RAGA!

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/createAd', [PageController::class, 'createAd'])->middleware(['auth'])->name('ad.create');
Route::get('/ads', [PageController::class, 'indexAd'])->name('ads.index');
Route::get('/ad/{ad}', [PageController::class, 'showAd'])->name('ad.show');

Route::get('/auth/github',[SocialiteController::class,'redirectToGithub']);
Route::get('/auth/github/callback',[SocialiteController::class,'handleGithubCallback']);

Route::get('/auth/google',[SocialiteController::class,'redirectToGoogle']);
Route::get('/auth/google/callback',[SocialiteController::class,'handleGoogleCallback']);

Route::get('/auth/profile',[UserController::class, 'profile'])->middleware(['auth'])->name('user.auth.profile');

Route::get('/prova', [PageController::class, 'prova']);