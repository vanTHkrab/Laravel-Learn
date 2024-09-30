<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
