<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Setting\SettingController;
use Illuminate\Support\Facades\Route;




Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('admin')->group(function () {
        //Dashboard home page
        Route::get('/', [HomeController::class, 'index'])->name('index');
        
        //Dashboard settings page
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    });

    Route::get('/login', [AuthController::class, 'index'])->middleware('guest:admin')->name('auth.login');
    Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth:admin')->name('auth.logout');
});
