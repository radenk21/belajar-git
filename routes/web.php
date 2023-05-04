<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;

// home
Route::get('/', HomeController::class);

// profile
Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);

// task
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}',[TaskController::class, 'destroy']);

// contact 
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);