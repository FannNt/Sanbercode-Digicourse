<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cast', [CastController::class, 'index'])->name('index');
Route::post('/cast', [CastController::class, 'store'])->name('store');
Route::get('/cast/create', [CastController::class, 'create']);
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('update');
Route::delete('/cast/{cast_id}', [CastController::class, 'delete'])->name('delete');

Route::post("/game/create", [GameController::class, 'create'])->name('game-create');
Route::get("/game/create", [GameController::class, 'form'])->name('create-form');
Route::get("/game/{id}", [GameController::class, 'read'])->name('game-show');
Route::get("/game/", [GameController::class, 'index'])->name('game');
Route::post("/game/update/{id}", [GameController::class, 'update'])->name('game-update');
Route::get("/game/update/{id}", [GameController::class, 'formUpdate'])->name('game-update-form');
Route::delete("/game/delete/{id}", [GameController::class, 'delete'])->name('game-delete');

