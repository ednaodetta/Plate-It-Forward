<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $user = Auth::user();
        $product = Products::findOrFail($productId);

        // Cek apakah ada cart aktif
        $cart = Cart::where('user_id', $user->id)->first();

        // Jika belum ada cart, buat baru
        if (!$cart) {
            $cart = Cart::create([
                'user_id' => $user->id,
                'total' => 0
            ]);
        } else {
            // Cek apakah cart memiliki produk dari restoran lain
            $existingRestaurantId = $cart->items->first()?->product?->restaurant_id;
            if ($existingRestaurantId && $existingRestaurantId !== $product->restaurant_id) {
                return response()->json(['switchRestaurant' => true]);
            }
        }

        // Cek apakah produk sudah ada di cart
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
            $cartItem->subtotal = $cartItem->quantity * $cartItem->price;
            $cartItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,
                'subtotal' => $product->price
            ]);
        }

        // Update total cart
        $cart->total = $cart->items->sum('subtotal');
        $cart->save();

        return response()->json(['success' => true]);
    }

    public function switchRestaurant(Request $request)
    {
        $user = Auth::user();
        Cart::where('user_id', $user->id)->delete(); // Hapus cart lama

        return response()->json(['cleared' => true]);
    }

    public function updateQuantity(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['success' => true]);
    }
}
