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

use App\Http\Controllers\TaskController;

// Route::prefix('tasks')->group(function () {
    // Index page to show all tasks
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

    // Show the form to create a new task
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');

    // Store a new task
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');

    // Show the form to edit a task
    Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

    // Update a task
    Route::put('/{task}', [TaskController::class, 'update'])->name('tasks.update');

    // Delete a task
    Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
// });
