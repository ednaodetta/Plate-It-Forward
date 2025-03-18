<?php

use App\Http\Controllers\AdminPasswordController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use App\Http\Controllers\Auth\RegisteredRestaurantController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\OrphanageController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->group(function () {
    Route::get('register', [RegisteredAdminController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredAdminController::class, 'store'])->name('admin.register.submit');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.submit');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    Route::get('forgot-password', [AdminPasswordController::class, 'showForgotForm'])->name('admin.forgot');
    Route::post('forgot-password', [AdminPasswordController::class, 'sendResetLink'])->name('admin.forgot.submit');
    Route::get('reset-password/{token}', [AdminPasswordController::class, 'showResetForm'])->name('admin.reset');
    Route::post('reset-password', [AdminPasswordController::class, 'resetPassword'])->name('admin.reset.submit');

    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('products', [ProductController::class, 'index'])->name('admin.products');
        Route::match(['get', 'post'], 'orderlist', [AdminDashboardController::class, 'list'])->name('admin.OrderList');
        Route::get('userinfo', [UserController::class, 'index'])->name('userinfo');
        Route::get('/restaurantinfo', [RestaurantController::class, 'index'])->name('restaurantinfo');
        Route::get('/updaterestaurantinfo/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit');
        Route::delete('/restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
        Route::post('register', [RegisteredRestaurantController::class, 'store'])->name('restaurant.register');
        Route::put('/restaurant/{id}/update', [RestaurantController::class, 'update'])->name('restaurant.update');
        Route::post('/add-restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');

        Route::get('/orphanage', [OrphanageController::class, 'index'])->name('panti.index'); // Orphanage list
        Route::get('/updateorphanage/{id}', [OrphanageController::class, 'edit'])->name('panti.edit'); // Orphanage edit form
        Route::put('/updateorphanage/{id}', [OrphanageController::class, 'update'])->name('panti.update'); // Orphanage update
        Route::post('/orphanage', [OrphanageController::class, 'store'])->name('panti.store'); // Store orphanage
        Route::delete('/deleteorphanage/{id}', [OrphanageController::class, 'destroy'])->name('panti.destroy'); // Delete orphanage

        Route::post('/update-handled/{id}', [SupportController::class, 'updateHandled'])->name('support.update');
        Route::get('/support', [SupportController::class, 'index'])->name('support.index');
    });
});


Route::middleware(['admin'])->group(function () {});
