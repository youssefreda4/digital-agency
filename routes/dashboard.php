<?php

use Illuminate\Support\Facades\Route;



Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/', 'dashboard.pages.index')->name('index');



    Route::view('/login', 'dashboard.auth.pages.login')->name('auth.login');
    Route::view('/register', 'dashboard.auth.pages.register')->name('auth.register');
});