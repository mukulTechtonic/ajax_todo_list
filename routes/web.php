<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;





    Route::get('/', [TaskController::class, 'show'])->name('cms_task');
    Route::get('/tasks', [TaskController::class, 'index'])->name('cms_task_get');
    Route::post('/tasks', [TaskController::class, 'store'])->name('cms_task_save');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('cms_task_status');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('cms_task_delete');

