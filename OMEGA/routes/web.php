<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('users', UsersController::class);
