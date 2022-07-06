<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\Auth\LoginUserController;
use App\Http\Controllers\Front\Auth\RegisterUserController;


Route::get('/', [GeneralController::class, 'home'])->name('home');

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('post/{id}', [GeneralController::class, 'postDetails'])->name('post-details');
    Route::get('category/{id}', [GeneralController::class, 'category'])->name('category');
    Route::get('contact', [GeneralController::class, 'contact'])->name('contact');

    Route::get('logout', [LoginUserController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('register', [RegisterUserController::class, 'store'])->name('register-store');
    Route::get('login', [LoginUserController::class, 'create'])->name('login');
    Route::post('login', [LoginUserController::class, 'store'])->name('login.store');
//    Route::get('forgot-password', [GeneralController::class, 'forgotPassword'])->name('forgot-password');
//    Route::post('forgot-password', [GeneralController::class, 'forgotPasswordStore'])->name('forgot-password-store');
//    Route::get('reset-password/{token}', [GeneralController::class, 'resetPassword'])->name('reset-password');
//    Route::post('reset-password', [GeneralController::class, 'resetPasswordStore'])->name('reset-password-store');
});


