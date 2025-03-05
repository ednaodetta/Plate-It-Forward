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

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|integer',
        'description' => 'nullable|string',
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $restaurantId = Auth::guard('restaurant')->user()->id;

    Products::create([
        'restaurant_id' => $restaurantId,
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'foto' => $request->foto ? $request->file('foto')->store('products') : 'noimage.png',
    ]);

    return redirect()->route('products')->with('success', 'Produk berhasil ditambahkan.');


}



public function createproduct()
{
    return view('addproduct');
}
}
