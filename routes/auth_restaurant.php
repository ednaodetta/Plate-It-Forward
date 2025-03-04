<?php

use App\Http\Controllers\Auth\RegisteredRestaurantController;
use App\Http\Controllers\RestaurantPasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::prefix('restaurant')->name('restaurant.')->group(function () {
    Route::get('register', [RegisteredRestaurantController::class, 'create'])->name('register');
    Route::post('register', [RegisteredRestaurantController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


    Route::get('forgot-password', [RestaurantPasswordController::class, 'showForgotForm'])->name('forgot');
    Route::post('forgot-password', [RestaurantPasswordController::class, 'sendResetLink']);
    Route::get('reset-password/{token}', [RestaurantPasswordController::class, 'showResetForm'])->name('reset');
    Route::post('reset-password', [RestaurantPasswordController::class, 'resetPassword'])->name('reset-submit');

    Route::middleware(['restaurant'])->group(function () {
        Route::get('dashboard', function () {
            return view('restaurant.dashboard');
        })->name('dashboard');
    });
});
