<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Basic route
Route::get('/', [HomeController::class, 'index']); 

// Resource routes (includes index, show, create, store, edit, update, destroy)
Route::resource('users', UserController::class);

// Extra custom route with parameter
Route::get('/user/{id}', [UserController::class, 'show']);

// Route with middleware
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
