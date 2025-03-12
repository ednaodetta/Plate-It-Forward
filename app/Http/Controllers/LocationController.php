<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LocationController extends Controller
{
    // Menampilkan halaman lokasi
    public function index()
    {
        $city = Restaurant::all();

        return view('restoranpage',compact('city')); // Pastikan ada file location.blade.php di resources/views
    }
    public function list(Request $request)
    {
        $resto = Restaurant::all();
        $selectedCity = $request->query('city');
    
        // Ambil daftar restoran berdasarkan kota yang dipilih
        $filteredResto = $selectedCity 
            ? Restaurant::where('city', $selectedCity)->get()
            : collect();
    
        // Ambil foto produk untuk tiap restoran yang ditemukan
        $fotoProducts = Products::whereIn('restaurant_id', $filteredResto->pluck('id'))
        ->get()
        ->groupBy('restaurant_id')
        ->map(fn($products) => $products->first()->foto);
    
        
    
        return view('location', compact('resto', 'filteredResto', 'selectedCity', 'fotoProducts'));
    }
    

    
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Ambil hanya kota unik yang mengandung query (tanpa duplikasi)
        $locations = DB::table('restaurants')
            ->where('city', 'LIKE', "%$query%")
            ->distinct()
            ->pluck('city'); 

        \Log::info('Hasil Query:', $locations->toArray()); // Debugging ke log

        return response()->json($locations);
    }

}