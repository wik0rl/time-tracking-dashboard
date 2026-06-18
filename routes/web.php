<?php

use Illuminate\Support\Facades\Route;

Route::get('/daily', function () {
    return view('daily');
})->name('daily');
Route::get('/', function () {
    return view('weekly');
})->name('weekly');
Route::get('/monthly', function () {
    return view('monthly');
})->name('monthly');
