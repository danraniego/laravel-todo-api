<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/todos', [ TodoController::class, 'addTodo' ]);  
Route::get('/todos', [ TodoController::class, 'getTodos']);
Route::patch('/todos/{id}', [ TodoController::class, 'updateTitle']);
Route::delete('/todos/{id}', [ TodoController::class, 'delete' ]);