<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::post('/dashboard/projects', [DashboardController::class, 'createProject'])->name('project.create');

Route::post('/dashboard/tasks', [DashboardController::class, 'createTask'])->name('task.create');
