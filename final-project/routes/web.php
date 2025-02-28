<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

//film
Route::get('/film', [FilmController::class,'index'])->name('film');
Route::get('/film/{id}', [FilmController::class, 'findById'])->name('detail');


Route::middleware('auth')->group(function () {
    //film
    Route::delete('/film/{id}', [FilmController::class, 'delete'])->name('film-delete');
    Route::post('/film/create', [FilmController::class, 'create'])->name('film-create');

    //review
    Route::post('/review/{filmId}/create',[ReviewController::class, 'create'])->name('review-create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
