<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController; // Import the controller

// Task Routes
Route::get('/tasks', [PageController::class, 'indextask']);
Route::post('/saveTasks', [TaskController::class, 'store']);

// Default Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Login and Registration
Route::get('/login', function () {
    return view('login');
});

// Include Laravel's authentication routes
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
