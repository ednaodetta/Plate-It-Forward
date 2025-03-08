<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RestaurantDashboardController extends Controller
{
    public function index($viewType = 'dashboardResto')
    {
        $restaurant = Auth::guard('restaurant')->user();

        if (!$restaurant) {
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Ambil produk berdasarkan restoran
        $products = DB::table('products')->where('restaurant_id', $restaurant->id)->get();

        // Menghitung Total Donation dari atribut 'total' di tabel carts
        $totalDonation = Order::sum('total');

        // Menghitung Total Orders dari jumlah data di tabel carts
        $totalOrders = Order::count();

        // Menghitung Total Portion Donate dari atribut 'quantity' di tabel cart_items
        $totalPortions = OrderItem::sum('quantity');

        // Mengambil 5 pesanan terbaru dengan detail makanan
        $recentOrders = DB::table('orders')
        ->select('orders.id', 'orders.total', 'orders.status', 'orders.created_at')
        ->addSelect(DB::raw("
            GROUP_CONCAT(CONCAT(order_items.quantity, ' ', products.name) SEPARATOR ', ') AS transaction_detail
        "))
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->join('products', 'order_items.product_id', '=', 'products.id')
        ->where('products.restaurant_id', $restaurant->id)
        ->groupBy('orders.id', 'orders.total', 'orders.status', 'orders.created_at')
        ->orderBy('orders.created_at', 'desc')
        ->take(5)
        ->get();

        // untuk nampilin order list
        $allorder = DB::table('orders')
        ->select('orders.id', 'orders.total', 'orders.status', 'orders.created_at')
        ->addSelect(DB::raw("
            GROUP_CONCAT(CONCAT(order_items.quantity, ' ', products.name) SEPARATOR ', ') AS transaction_detail
        "))
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->join('products', 'order_items.product_id', '=', 'products.id')
        ->where('products.restaurant_id', $restaurant->id)
        ->groupBy('orders.id', 'orders.total', 'orders.status', 'orders.created_at')
        ->orderBy('orders.created_at', 'desc')
        ->get();

        $view = ($viewType == 'orderlist') ? 'OrderListRestaurant' : 'dashboardResto';

        return view($view, [
            'restaurant' => $restaurant,
            'products' => $products,
            'totalDonation' => $totalDonation,
            'totalOrders' => $totalOrders,
            'totalPortions' => $totalPortions,
            'recentOrders' => $recentOrders,
            'allorder' => $allorder
    ]);
    }
}
