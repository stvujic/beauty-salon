<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/left-sidebar', 'left-sidebar');
Route::view('/right-sidebar', 'right-sidebar');
Route::view('/no-sidebar', 'no-sidebar');
Route::view('/elements', 'elements');
