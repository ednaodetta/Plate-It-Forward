<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/panti', function () {
    return view('panti');
});

Route::get('/my-donations', function () {
    return view('mydonations');
});

Route::get('/menupage', function () {
    return view('menupage');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/OrderList', function () {
    return view('OrderList');
});

Route::get('/restoranpage', function () {
    return view('restoranpage');
});

Route::get('/OrderListRestaurant', function () {
    return view('OrderListRestaurant');
});

Route::get('/location', function () {
    return view('location');
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
