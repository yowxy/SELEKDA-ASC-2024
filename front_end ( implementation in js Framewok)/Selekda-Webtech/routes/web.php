<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);