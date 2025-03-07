<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        // Menghitung Total Donation dari atribut 'total' di tabel carts
        $totalDonation = Cart::sum('total');

        // Menghitung Total Orders dari jumlah data di tabel carts
        $totalOrders = Cart::count();

        // Menghitung Total Portion Donate dari atribut 'quantity' di tabel cart_items
        $totalPortions = CartItem::sum('quantity');

        // Mengambil 5 pesanan terbaru
        $recentOrders = Cart::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('testing', compact('totalDonation', 'totalOrders', 'totalPortions', 'recentOrders'));
    }
}
