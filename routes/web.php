<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-donations', function () {
    return view('mydonations');
});


Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::post('/signin', [AuthController::class, 'signin'])->name('signin.post');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contactus');
