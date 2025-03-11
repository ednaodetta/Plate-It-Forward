<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data dari tabel supports
        return view('userinfopage', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('userinfo')->with('error', 'User not found');
        }

        return view('updateuserpage', compact('user'));
    }


    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:restaurants,email,' . $id,
        ]);

        // Find the restaurant by ID
        $user = User::findOrFail($id);

        // Update the restaurant with the new values
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect back to the restaurant info page with a success message
        return redirect()->route('userinfo')->with('success', 'User updated successfully!');
    }



    public function destroy($id)
    {
        // Find the restaurant by ID
        $user = User::findOrFail($id);
        // Delete the restaurant
        $user->delete();
        // Redirect back to the restaurant list with a success message
        return redirect()->route('userinfo')->with('success', 'User deleted successfully!');
    }
}
