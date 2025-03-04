<?php
<<<<<<< HEAD

use App\Http\Controllers\ProductController;
=======
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\RestaurantController;
>>>>>>> 3d1f9287778887435fe27f8f6db7715f201bbf78
use Illuminate\Support\Facades\Route;

Route::get('/api/restaurants', [RestaurantController::class, 'index']);

// use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});





// use App\Http\Controllers\Auth\RegisteredOrphanageController;
// Route::post('/panti', [RegisteredOrphanageController::class, 'store'])->name('orphanage.add');
require __DIR__.'/auth_orphanage.php'; 

Route::get('/profilee', function () {
    return view('profile');
});

Route::get('/panti', function () {
    return view('panti');
})->name('panti');

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

// In routes/web.php
Route::delete('/restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');

Route::put('/restaurant/{id}/update', [RestaurantController::class, 'update'])->name('restaurant.update');

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


// Route::get('/restaurantinfo', function () {
//     return view('restaurantinfopage');
// })->name('restaurantinfo');


Route::get('/restaurantinfo', [RestaurantController::class, 'index'])->name('restaurantinfo');


// Route::get('/updaterestaurantinfo', function () {
//     return view('updaterestaurantpage');
// });

Route::get('/updaterestaurantinfo/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit');

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
})->name('dashboardAdmin');

Route::get('/dashboardResto', function () {
    return view('dashboardResto');
})->name('dashboardResto');

use App\Http\Controllers\SupportController;

Route::post('/contactus', [SupportController::class, 'store'])->name('contactus');
Route::post('/update-handled/{id}', [SupportController::class, 'updateHandled']);

use App\Models\Support;

Route::get('/support', [SupportController::class, 'index'])->name('support.index');

<<<<<<< HEAD



Route::get('/menupage/{id}', [ProductController::class, 'menuPage'])->name('menupage');
=======
Route::post('/add-restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
>>>>>>> 3d1f9287778887435fe27f8f6db7715f201bbf78

