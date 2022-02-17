<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::middleware([ 'api','localization' ])->group(function () {

    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);

});
