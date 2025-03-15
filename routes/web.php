<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('website.')->group(function () {
    Route::view('/', 'website.pages.index')->name('index');

    Route::view('/about','website.pages.about.index')->name('about');

    Route::view('/service','website.pages.service.index')->name('service');

    Route::view('/project','website.pages.project.index')->name('project');
    
    Route::view('/team','website.pages.team.index')->name('team');
    
    Route::view('/testimonial','website.pages.testimonial.index')->name('testimonial');

    Route::view('/contact','website.pages.contact.index')->name('contact');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';
