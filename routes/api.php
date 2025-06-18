<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('projects')->group(function () {
    Route::post('/', [ProjectController::class, 'create']);
});

Route::prefix('task')->group(function () {
    Route::post('/', [TaskController::class, 'create']);
});
