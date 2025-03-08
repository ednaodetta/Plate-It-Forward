<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productexp;
use App\Models\Products;



class ProductsexpsController extends Controller
{
    public function show($id)
    {
        $product = Products::findOrFail($id);
        $productExps = ProductExp::where('product_id', $id)->get();
    
        // Hitung total quantity
        $totalQuantity = $productExps->sum('quantity');
    
        return view('productexp', compact('product', 'productExps', 'totalQuantity'));
    }
    


  









  public function create($product_id)
{
    $productsearch = Products::findOrFail($product_id);
    
    return view('addproductexp',compact('productsearch'));
}


public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
        'price_discount' => 'required|integer|min:0',
        'expired_at' => 'required|date',
    ]);

    // Simpan data ke database
    ProductExp::create([
        'product_id' => $request->product_id,
        'quantity' => $request->quantity,
        'price_discount' => $request->price_discount,
        'expired_at' => $request->expired_at,
        'created_at' => now(), // Timestamp otomatis
    ]);

    // Redirect ke halaman productexp/{product_id}
    return redirect()->route('productexp.show', $request->product_id)
                     ->with('success', 'Data berhasil ditambahkan!');
}





 
}
