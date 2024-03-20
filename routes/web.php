<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

// Laravel 8 이상의 라우트 정의 방식
Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);
Route::post('/todos/{todo}/complete', [TodoController::class, 'complete']);
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);

