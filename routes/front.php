<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\GeneralController;
use App\Http\Controllers\Front\Auth\LoginUserController;
use App\Http\Controllers\Front\Auth\RegisterUserController;


Route::get('/', [GeneralController::class, 'home'])->name('home');

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('post/{id}', [GeneralController::class, 'postDetails'])->name('post-details');
    Route::get('category/{id}', [GeneralController::class, 'category'])->name('category');
    Route::get('popular-posts', [GeneralController::class, 'popularPosts'])->name('popular-posts');
    Route::get('recent-posts', [GeneralController::class, 'recentPosts'])->name('recent-posts');
    Route::get('posts-today', [GeneralController::class, 'allPostsToday'])->name('posts-today');
    Route::get('search', [GeneralController::class, 'searchPosts'])->name('search');
    Route::get('profile', [GeneralController::class, 'profile'])->name('profile');
    Route::put('profile', [GeneralController::class, 'updateProfile'])->name('profile.update');
    Route::get('change-password', [GeneralController::class, 'viewChangePassword'])->name('change-password');
    Route::put('change-password', [GeneralController::class, 'changePassword'])->name('change-password.update');
});

Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

//Route::middleware('guest')->group(function () {
//    Route::get('register', [RegisterUserController::class, 'create'])->name('user.register');
//    Route::post('register', [RegisterUserController::class, 'store'])->name('user.register.store');
//    Route::get('login', [LoginUserController::class, 'create'])->name('user.login');
//    Route::post('login', [LoginUserController::class, 'store'])->name('user.login.store');
//    Route::get('forgot-password', [GeneralController::class, 'forgotPassword'])->name('forgot-password');
//    Route::post('forgot-password', [GeneralController::class, 'forgotPasswordStore'])->name('forgot-password-store');
//    Route::get('reset-password/{token}', [GeneralController::class, 'resetPassword'])->name('reset-password');
//    Route::post('reset-password', [GeneralController::class, 'resetPasswordStore'])->name('reset-password-store');
//});


