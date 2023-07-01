<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
// use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;

// Home
Route::get('/', HomeController::class);

// Task
Route::resource('tasks', TaskController::class);

// Register
Route::get('register', [RegistrationController::class, 'create'])->name('register');

// User
Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');