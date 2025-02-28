<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return redirect(route('film'));
});
//film
Route::get('/film', [FilmController::class,'index'])->name('film');
Route::get('/film/{id}', [FilmController::class, 'findById'])->name('film-detail');

Route::get('/genre',[GenreController::class,'index'])->name('genre');
Route::get('/genre/{id}', [GenreController::class, 'findById'])->name('genre-detail');



Route::middleware('auth')->group(function () {
    //film
    Route::delete('/film/{id}', [FilmController::class, 'delete'])->name('film-delete');
    Route::post('/film/create', [FilmController::class, 'create'])->name('film-create');
    Route::get('/film/update/{id}', [FilmController::class,'editForm'])->name('film-edit-form');
    Route::put('/film/update/{id}',[FilmController::class, 'update'])->name('film-edit');

    //genre
    Route::delete('/genre/{id}', [GenreController::class, 'delete'])->name('genre-delete');
    Route::post('/genre/create', [GenreController::class, 'create'])->name('genre-create');
    Route::get('/genre/update/{id}', [GenreController::class,'editForm'])->name('genre-edit-form');
    Route::put('/genre/update/{id}', [GenreController::class,'update'])->name('genre-edit');


    //review
    Route::post('/review/{filmId}/create',[ReviewController::class, 'create'])->name('review-create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
