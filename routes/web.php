<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::auth();

Route::group(['middleware' => 'is_guest'], function() {

Route::resource('/analytics', App\Http\Controllers\AnalyticsController::class);

// Route for profile page
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile-index');

// Route for logout
// Had to make it beacuse of: "Supported methods: POST."
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

// Route for create-blog page
Route::get('/create-blog', [App\Http\Controllers\PostController::class, 'createblog'])->name('createblog');

// Route for User Settings Page
Route::get('/profile-settings', 'App\Http\Controllers\UserController@settings')->name('user.settings');



// Routes for DASHBOARD pages

//!

Route::resource('/users', 'App\Http\Controllers\UserController', [
    'names' => [

      ],
]);


Route::resource('/posts', 'App\Http\Controllers\PostController', [
    'names' => [

      ],
]);


});



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


// Routes for contact page email
Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     Mail::to('5dzoni5@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });


Route::get('contactlist', 'App\Http\Controllers\DeleteUserController@contactlist');

Route::post('multipleusersdelete', 'App\Http\Controllers\DeleteUserController@multipleusersdelete');