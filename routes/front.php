<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\GeneralController;


Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/post/{id}', [GeneralController::class, 'postDetails'])->name('post-details');
Route::get('/category/{id}', [GeneralController::class, 'category'])->name('category');
