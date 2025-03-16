<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;



Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
    });

    Route::get('/login', [AuthController::class, 'index'])->middleware('guest:admin')->name('auth.login');

    Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth:admin')->name('auth.logout');
});
