<?php

use App\Http\Controllers\Auth\RegisteredOrphanageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Route::prefix('orphanage')->name('orphanage.')->group(function () {
//     Route::get('register', [RegisteredOrphanageController::class, 'create'])->name('register');
// ------------- Route::get('orphanage/register', [RegisteredOrphanageController::class, 'create'])->name('orphanage.register');
//     Route::post('register', [RegisteredOrphanageController::class, 'store']);

//     Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
//     Route::post('login', [AuthenticatedSessionController::class, 'store']);

//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//     Route::middleware(['restaurant'])->group(function () {
//         Route::get('dashboard', function () {
//             return view('restaurant.dashboard');
//         })->name('dashboard');
//     });
// });

Route::post('/panti', [RegisteredOrphanageController::class, 'store'])->name('orphanage.add');