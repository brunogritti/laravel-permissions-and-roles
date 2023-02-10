<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('permission:create-users')->group(function () {
    
    Route::get('/users/create', [\App\Http\Controllers\HomeController::class, 'createUser'])->name('create-user');
    Route::post('/users', [\App\Http\Controllers\HomeController::class, 'store']);

});

Route::middleware('permission:create-blog-posts')->group(function () {

    Route::get('/posts/create', [\App\Http\Controllers\HomeController::class, 'createPost'])->name('create-post');
    Route::post('/posts', [\App\Http\Controllers\HomeController::class, 'store']);

});