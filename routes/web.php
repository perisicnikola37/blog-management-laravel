<?php

use Illuminate\Support\Facades\Route;

Route::auth();

// This return /homepage
Route::get('/', 'App\Http\Controllers\HomeController@redirect');

// Route for main homepage
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

// Route for contact page
Route::get('/contact-me', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-me');
// 
// Route for about page
Route::get('/about-me', [App\Http\Controllers\HomeController::class, 'about'])->name('about-me');

// Route for post page
Route::get('/post/{slug}', [App\Http\Controllers\HomePageController::class, 'show'])->name('post-index');




// Route for logout
// Had to make it beacuse of: "Supported methods: POST."
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

