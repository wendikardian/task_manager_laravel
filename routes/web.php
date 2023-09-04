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
Route::get('/tasks/draft', [TasksController::class, 'index'])->name('task.draft');
Route::get('/tasks/published', [TasksController::class, 'index'])->name('task.published');
Route::get('/tasks/verified', [TasksController::class, 'index'])->name('task.verified');
Route::get('/tasks/done', [TasksController::class, 'index'])->name('task.done');
Route::get('/tasks/create', [TasksController::class, 'create'])->name('task.create');
Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('task.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
