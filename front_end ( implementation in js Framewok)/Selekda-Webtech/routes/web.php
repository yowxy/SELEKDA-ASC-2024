<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route::post('login', [AuthController::class, 'login']);
// Route::post('register', [AuthController::class, 'register']);




Route::middleware('auth:sanctum')->group(function () {
    Route::put('profile', [AuthController::class, 'updateProfile']);
    Route::get('profile', [AuthController::class, 'getProfile']);
});


Route::apiResource('blog-comments', BlogCommentController::class);