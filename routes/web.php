<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\SuggestionController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [ArticleController::class, 'index'])->name('blog.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/doa', [DoaController::class, 'index'])->name('doa.index');

Route::get('/quran', [QuranController::class, 'index'])->name('quran.index');
Route::get('/quran/juz/{no}', [QuranController::class, 'juz']);
Route::get('/quran/surah/{no}', [QuranController::class, 'surahDetail']);

Route::post('/suggestion', [SuggestionController::class, 'store'])->name('suggestion.store');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
});
