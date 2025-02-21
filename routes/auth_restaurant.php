<?php

use App\Http\Controllers\Auth\RegisteredRestaurantController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::prefix('restaurant')->name('restaurant.')->group(function () {
    Route::get('register', [RegisteredRestaurantController::class, 'create'])->name('register');
    Route::post('register', [RegisteredRestaurantController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::middleware(['restaurant'])->group(function () {
        Route::get('dashboard', function () {
            return view('restaurant.dashboard');
        })->name('dashboard');
    });
});
