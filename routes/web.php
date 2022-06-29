<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('cms/admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::view('categories', 'admin.categories.index')->name('categories');
    Route::view('categories/trash', 'admin.categories.trash')->name('categories.trash');

    Route::view('posts', 'admin.posts.index')->name('posts');
    Route::view('posts/trash', 'admin.posts.trash')->name('posts.trash');

    Route::view('roles', 'admin.roles.index')->name('roles');
});
