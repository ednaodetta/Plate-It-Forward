<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Sesuaikan dengan model yang dipakai

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        $orders = Order::where('restaurant_id', auth()->id())->latest()->get(); // Sesuaikan dengan struktur database

        return view('testing', compact('orders'));
    }
}
