<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Setting\SettingController;
use App\Http\Controllers\Dashboard\Skill\SkillController;
use App\Http\Controllers\Dashboard\Subscriber\SubscriberController;
use Illuminate\Support\Facades\Route;






Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('admin')->group(function () {
        //Home page
        Route::get('/', [HomeController::class, 'index'])->name('index');

        //Settings page
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');

        //Skills page
        Route::get('/skills', [SkillController::class, 'index'])->name('skills');

        //Subscriber page
        Route::get('/subscribers', [SubscriberController::class, 'index'])->name('subscribers');
    });

    Route::get('/login', [AuthController::class, 'index'])->middleware('guest:admin')->name('auth.login');
    Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth:admin')->name('auth.logout');
});
