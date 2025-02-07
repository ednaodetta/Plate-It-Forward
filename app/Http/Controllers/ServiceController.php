<?php

// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use App\Models\Service; // Pastikan model Service di-import
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'additional_info' => 'nullable|string',
        ]);

        // Simpan data ke database
        Service::create([
            'name' => $request->name,
            'email' => $request->email,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('contactus')->with('success', 'Your inquiry has been submitted successfully.');
    }
}
