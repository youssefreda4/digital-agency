<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Category\CategoryController;
use App\Http\Controllers\Dashboard\Counter\CounterController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Message\MessageController;
use App\Http\Controllers\Dashboard\Project\ProjectController;
use App\Http\Controllers\Dashboard\Service\ServiceController;
use App\Http\Controllers\Dashboard\Setting\SettingController;
use App\Http\Controllers\Dashboard\Skill\SkillController;
use App\Http\Controllers\Dashboard\Subscriber\SubscriberController;
use Illuminate\Support\Facades\Route;











Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::middleware('admin')->group(function () {
        //HOME PAGE
        Route::get('/', [HomeController::class, 'index'])->name('index');

        //SETTINGS PAGE
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');

        //SKILLS PAGE
        Route::get('/skills', [SkillController::class, 'index'])->name('skills');

        //SUBSCIBERS PAGE
        Route::get('/subscribers', [SubscriberController::class, 'index'])->name('subscribers');
        
        //COUNTER PAGE
        Route::get('/counters', [CounterController::class, 'index'])->name('counters');

        //SERVICES PAGE
        Route::get('/services', [ServiceController::class, 'index'])->name('services');

        //MESSAGES PAGE
        Route::get('/messages', [MessageController::class, 'index'])->name('messages');

        //CATEGORIES PAGE
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        
        //PROJECTS PAGE
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    });

    Route::get('/login', [AuthController::class, 'index'])->middleware('guest:admin')->name('auth.login');
    Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth:admin')->name('auth.logout');
});
