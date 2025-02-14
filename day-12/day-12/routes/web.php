<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class, 'index'])->name('form');
Route::post('/welcome', [DashboardController::class, 'welcome'])->name('welcome');
