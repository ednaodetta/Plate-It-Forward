<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productexp;
use App\Models\Products;



class ProductsexpsController extends Controller
{
  public function show($id)
  {
    
      // Ambil data produk berdasarkan ID
      $product = Products::findOrFail($id);

      // Ambil langsung data dari ProductExp yang sesuai tanpa pakai relasi
      $productExps = ProductExp::where('product_id', $id)->get();

      // Kirim data ke view
      return view('productexp', compact('product', 'productExps'));
  }








  public function create()
  {
      $products = Products::all(); // Ambil semua produk buat ditampilkan di dropdown
      return view('addproductexp', compact('products'));
  }

  public function store(Request $request)
  {
      $request->validate([
          'product_id' => 'required|exists:products,id',
          'quantity' => 'required|integer|min:1',
          'price_discount' => 'required|integer|min:0',
          'expired_at' => 'required|date',
      ]);

      ProductExp::create([
          'product_id' => $request->product_id,
          'quantity' => $request->quantity,
          'price_discount' => $request->price_discount,
          'expired_at' => $request->expired_at,
      ]);

      return redirect()->route('productexp.index')->with('success', 'Data berhasil ditambahkan!');
  }
}
