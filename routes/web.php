<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ WebController::class, 'home' ]);
Route::get('/test', [ WebController::class, 'bisanUnsa' ]);