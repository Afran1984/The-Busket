<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Basic route
Route::get('/', function () {
    return view('welcome');
});

// Route with controller
Route::get('/users', [UserController::class, 'index']);

// Resource routes
Route::resource('users', UserController::class);

// Route with parameters
Route::get('/user/{id}', [UserController::class, 'show']);

// Route with middleware
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');