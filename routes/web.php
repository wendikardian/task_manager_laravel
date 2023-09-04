<?php

use Illuminate\Support\Facades\Route;
// Import TasksController to this page
use App\Http\Controllers\TasksController;
// import Auth
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth::routes();

Auth::routes();
Route::get('/', [TasksController::class, 'index']);
Route::get('/tasks', [TasksController::class, 'index'])->name('task.index');
Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('task.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
