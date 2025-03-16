<?php

use App\Http\Controllers\AdminPasswordController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\OrphanageController;
use App\Http\Controllers\UserController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredAdminController::class, 'create'])->name('register');
    Route::post('register', [RegisteredAdminController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('forgot-password', [AdminPasswordController::class, 'showForgotForm'])->name('forgot');
    Route::post('forgot-password', [AdminPasswordController::class, 'sendResetLink']);
    Route::get('reset-password/{token}', [AdminPasswordController::class, 'showResetForm'])->name('reset');
    Route::post('reset-password', [AdminPasswordController::class, 'resetPassword'])->name('reset-submit');

    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/products', [ProductController::class, 'index']);
        Route::match(['get', 'post'], 'orderlist', [AdminDashboardController::class, 'list'])->name('OrderList');
    });
});

Route::middleware(['admin'])->group(function () {
    // Route::get('dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('dashboard');
    Route::post('/update-handled/{id}', [SupportController::class, 'updateHandled']);

    Route::get('/support', [SupportController::class, 'index'])->name('support.index');

    Route::post('/add-restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
    Route::get('/restaurantinfo', [RestaurantController::class, 'index'])->name('restaurantinfo');

    Route::get('/updaterestaurantinfo/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit');
    Route::delete('/restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');

    Route::put('/restaurant/{id}/update', [RestaurantController::class, 'update'])->name('restaurant.update');

    Route::get('/panti', [OrphanageController::class, 'index'])->name('panti.index'); // Orphanage list

    Route::get('/updateorphanage/{id}', [OrphanageController::class, 'edit'])->name('panti.edit'); // Orphanage edit form

    Route::put('/updateorphanage/{id}', [OrphanageController::class, 'update'])->name('panti.update'); // Orphanage update

    Route::post('/panti', [OrphanageController::class, 'store'])->name('panti.store'); // Store orphanage

    Route::delete('/deleteorphanage/{id}', [OrphanageController::class, 'destroy'])->name('panti.destroy'); // Delete orphanage
    Route::get('/userinfo', [UserController::class, 'index'])->name('userinfo');
});
