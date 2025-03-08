<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        $restaurant = Auth::guard('restaurant')->user();

        if (!$restaurant) {
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Ambil produk berdasarkan restoran
        $products = DB::table('products')->where('restaurant_id', $restaurant->id)->get();

        // Menghitung Total Donation dari atribut 'total' di tabel carts
        $totalDonation = Cart::sum('total');

        // Menghitung Total Orders dari jumlah data di tabel carts
        $totalOrders = Cart::count();

        // Menghitung Total Portion Donate dari atribut 'quantity' di tabel cart_items
        $totalPortions = CartItem::sum('quantity');

        // Mengambil 5 pesanan terbaru
        $recentOrders = Cart::orderBy('created_at', 'desc')->take(5)->get();

        return view('testing', [
            'restaurant' => $restaurant,
            'products' => $products,
            'totalDonation' => $totalDonation,
            'totalOrders' => $totalOrders,
            'totalPortions' => $totalPortions,
            'recentOrders' => $recentOrders
        ]);
    }
}
