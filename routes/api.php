<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\UserController;

Route::post("login",[UserController::class,'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('products', [ApiProductController::class, 'index']);
    Route::post('products', [ApiProductController::class, 'store']);
});
