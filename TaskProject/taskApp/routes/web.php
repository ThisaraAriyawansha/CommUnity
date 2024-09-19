<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController; // Import the controller
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AuthController;

// Task Routes
Route::get('/tasks', [PageController::class, 'indextask']);
Route::post('/saveTasks', [TaskController::class, 'store']);
Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Default Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Login and Registration
Route::get('/loginn', function () {
    return view('loginn');
});

// Include Laravel's authentication routes
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::get('auth/apple', [SocialiteController::class, 'redirectToApple'])->name('auth.apple');
Route::get('auth/apple/callback', [SocialiteController::class, 'handleAppleCallback']);




Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
