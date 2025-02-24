<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

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

// Route::post('/signin', [AuthController::class, 'signin'])->name('signin.post');

// Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contactus');

Route::get('/updateuserinfo', function () {
    return view('updateuserpage');
});

Route::get('/userinfo', function () {
    return view('userinfopage');
});


Route::get('/restaurantinfo', function () {
    return view('restaurantinfopage');
});

Route::get('/updaterestaurantinfo', function () {
    return view('updaterestaurantpage');
});

Route::get('/updateorphanageinfo', function () {
    return view('updateOrphanage');
});

Route::get('/productinfo', function () {
    return view('restorantproductinfo');
});

Route::get('/updaterestorant', function () {
    return view('updaterestorantproduct');
});

Route::get('/supportAdmin', function () {
    return view('support');
});

use App\Http\Controllers\ProfileController;

// Rute utama untuk user biasa
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin', function () {
    return view('welcomeadmin');
})->name('admin');

Route::get('/restaurant', function () {
    return view('welcomerestaurant');
})->name('restaurant');

require __DIR__ . '/auth.php';
// Include rute authentication admin & restaurant
require __DIR__ . '/auth_admin.php';
require __DIR__ . '/auth_restaurant.php';

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
});

use App\Http\Controllers\SupportController;

Route::post('/contactus', [SupportController::class, 'store'])->name('contactus');
Route::post('/update-handled/{id}', [SupportController::class, 'updateHandled']);

use App\Models\Support;

Route::get('/support', [SupportController::class, 'index'])->name('support.index');
