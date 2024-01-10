<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/announcement.create', [PageController::class, 'createAd'])->middleware(['auth'])->name('announcement.create');
Route::get('/announcement.index', [PageController::class, 'indexAd'])->name('announcement.index');
Route::get('/announcement.show', [PageController::class, 'showAd'])->name('announcement.show');