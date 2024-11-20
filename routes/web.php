<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/quran', [QuranController::class, 'index']);
Route::get('/quran/juz/{no}', [QuranController::class, 'juz']);
Route::get('/quran/surah/{no}', [QuranController::class, 'surahDetail']);
