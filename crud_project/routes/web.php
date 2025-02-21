<?php

use App\Http\Controllers\CastController;
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


