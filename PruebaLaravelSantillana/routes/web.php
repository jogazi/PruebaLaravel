<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::get('task/create', [App\Http\Controllers\TaskController::class, 'create'])->name('createTask');
Route::post('task/store', [App\Http\Controllers\TaskController::class, 'store'])->name('storeTask');
Route::delete('task/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('destroyTask');
Route::get('task/{tasks}/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('editTask');
Route::put('task/{tasks}', [App\Http\Controllers\TaskController::class, 'update'])->name('updateTask');