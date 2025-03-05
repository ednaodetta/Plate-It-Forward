<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Http\Request;

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
        // dd($resto);
        $selectedCity = $request->query('city'); // Ambil nama kota dari query string

        // Ambil daftar restoran berdasarkan kota yang dipilih
        $filteredResto = $selectedCity ? Restaurant::where('city', $selectedCity)->get() : collect();

        return view('location', compact('resto', 'filteredResto', 'selectedCity'));
    }

    // Menampilkan restoran berdasarkan kota
    // public function showByCity($city)
    // {
    //     return view('location', compact('city')); 
    // }
}