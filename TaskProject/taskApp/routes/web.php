<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController; // Import the controller

Route::get('/tasks', [PageController::class, 'indextask']);



Route::get('/', function () {
    return view('welcome');
});


Route::post('/saveTasks', [TaskController::class, 'store']);

