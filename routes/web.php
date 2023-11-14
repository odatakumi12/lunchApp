<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\GenresAndStaplesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GenresAndStaplesController::class, 'index'] );

Route::get('/index', [GenresAndStaplesController::class, 'index'] )->middleware(['auth'])->name('index');

//ジャンルに関するルーティング

// ジャンルindex: showの補助ページ(ジャンルに応じたショップ一覧を表示する)
Route::get('/genre/{genre_id}', [ShopsController::class, 'indexByGenre'])->name('genre.index');

//主食に関するルーティング

// ジャンルindex: showの補助ページ(主食に応じたショップ一覧を表示する)
Route::get('/staple/{staple_id}', [ShopsController::class, 'indexByStaple'])->name('staple.index');


/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
