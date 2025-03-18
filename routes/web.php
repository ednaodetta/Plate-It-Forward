<?php

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrphanageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RestaurantDashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SupportController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('welcomelogin');
    })->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{itemId}', [CartController::class, 'updateCartItem'])->name('cart.update');
    Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeCartItem'])->name('cart.remove');

    Route::post('/update-cart', [CartController::class, 'updateCart']);
    Route::post('/clear-cart', [CartController::class, 'clearCart']);

    Route::get('/cart', [CartController::class, 'showCart'])->name('cart');

    Route::post('/checkout', [CheckoutController::class, 'checkout']);

    Route::get('/my-donations', [DonationController::class, 'getDonations'])->name('mydonations');
});
Route::post('/midtrans/notification', [CheckoutController::class, 'handleNotification']);
Route::get('/api/restaurants', [RestaurantController::class, 'index']);


Route::get('/location', [LocationController::class, 'list'])->name('resto.list');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contactus');



// Rute utama untuk user biasa
Route::get('/', function () {
    return view('welcome');
});






Route::post('/contactus', [SupportController::class, 'store'])->name('contactus');

Route::get('/menu', [RestaurantController::class, 'menu'])->name('menu');

Route::get('/restaurants', [ProductController::class, 'restaurant'])->name('restaurants');

Route::get('/search-location', [LocationController::class, 'search']);



require __DIR__ . '/auth.php';
require __DIR__ . '/auth_admin.php';
require __DIR__ . '/auth_restaurant.php';
require __DIR__ . '/auth_orphanage.php';
