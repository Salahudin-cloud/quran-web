<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\CariSurahController;
use Illuminate\Support\Facades\Route;

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

// home page web
Route::get('/', [HomepageController::class, 'index']);

// redirect to detail quran 
Route::get('/quran/surah', [QuranController::class, 'index'])->name('surah');

// cari nomor surha 
Route::get('/cari/surah/', [CariSurahController::class, 'index'])->name('cari');
