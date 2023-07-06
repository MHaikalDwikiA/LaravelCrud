<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('profile/{identifier}', ProfileController::class);

Route::get("/tasks", [TaskController::class, "index"]);
Route::post("/tasks", [TaskController::class, "store"]);
Route::get('/tasks/{task:id}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/tasks/{id}/delete', [TaskController::class, 'destroy']);


Route::get('contact', [ContactController::class, 'update']);
Route::post('contact', [ContactController::class, 'store']);
