<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use GuzzleHttp\Middleware;

Route::get('/', fn () => view('welcome'));
Route::middleware('guest')->group(function () {
    Route::get('/register',[RegisterController::class,'create']);
    Route::post('/register',[RegisterController::class,'store']);
    Route::get('/login',[SessionController::class,'create'])->name('login');
    Route::post('/login',[SessionController::class,'store']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout',[SessionController::class,'destroy']);
});
