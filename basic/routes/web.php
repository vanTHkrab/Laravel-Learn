<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('student', [AdminController::class, 'index'])->name('student');
Route::get('create', [AdminController::class, 'create']);
Route::post('insert', [AdminController::class, 'insert']);
