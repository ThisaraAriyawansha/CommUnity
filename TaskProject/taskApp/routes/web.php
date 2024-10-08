<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController; // Import the controller
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;

// Task Routes
Route::get('/tasks', [PageController::class, 'indextask']);
Route::post('/saveTasks', [TaskController::class, 'store']);
Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::post('/opportunities', [OpportunityController::class, 'store'])->name('opportunities.store');
Route::get('/map', [OpportunityController::class, 'showMap'])->name('map.show');

// Default Welcome Route
Route::get('/', function () {
    return view('welcome');
});


Route::get('/opportunities ', function () {
    return view('opportunities');
});

Route::get('/contactus ', function () {
    return view('contactus');
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


use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
