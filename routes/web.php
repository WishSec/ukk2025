<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tasks', TaskController::class);
route::post('tasks/{task}/mark-completed',[TaskController::class, 'markAsCompleted'])->name('tasks.markAsCompleted');
route::post('tasks/{task}/mark-Pending',[TaskController::class, 'markAsPending'])->name('tasks.markAsPending');