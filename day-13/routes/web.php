<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return redirect('table');
});
Route::get('/table', function (){
    return view('table');
})->name('table');
Route::get('/data-table', function (){
    return view('data-table');
})->name('data');


