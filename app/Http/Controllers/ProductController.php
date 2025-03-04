<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        // Ambil ID restoran yang sedang login
        $restaurantId = Auth::guard('restaurant')->user()->id;

        // Ambil hanya produk yang dimiliki restoran ini
        $products = Products::where('restaurant_id', $restaurantId)->get();

        return view('restorantproductinfo', compact('products'));
    }


    public function menuPage()
{
    $product = Products::find(1); // Ambil data dengan ID = 1
    return view('menupage', compact('product'));
}
}
