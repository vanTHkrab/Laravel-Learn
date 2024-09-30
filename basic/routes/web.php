<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('student', [AdminController::class, 'index'])->name('student');
Route::get('create', [AdminController::class, 'create']);
Route::post('insert', [AdminController::class, 'insert']);
Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('update/{id}', [AdminController::class, 'update'])->name('update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
