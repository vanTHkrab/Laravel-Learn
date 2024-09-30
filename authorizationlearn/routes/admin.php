<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLogoutController;
use App\Http\Controllers\AdminProfileUpdateController;
use App\Http\Controllers\AdminResetPasswordController;

Route::get('/admin', function () {
    if (auth()->guard('admin')->check()) {
        return redirect()->route('admin.home');
    }
    return redirect()->route('admin.login');
});

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'store']);
    Route::get('/register', [AdminRegisterController::class, 'index'])->name('register');
    Route::post('/register', [AdminRegisterController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/profile', [AdminHomeController::class, 'profile'])->name('profile');
    Route::get('/reset-password', [AdminResetPasswordController::class, 'index'])->name('reset-password');
    Route::post('/reset-password', [AdminResetPasswordController::class, 'update']);
    Route::get('/update-profile', [AdminProfileUpdateController::class, 'index'])->name('update-profile');
    Route::post('/update-profile', [AdminProfileUpdateController::class, 'update']);
    Route::post('/logout', [AdminLogoutController::class, 'store'])->name('logout');
});
