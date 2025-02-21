<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\LoginRequest;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\View\View;

// class AuthenticatedSessionController extends Controller
// {
//     /**
//      * Display the login view.
//      */
//     public function create(Request $request): View
//     {
//         // Menentukan tampilan login berdasarkan jenis pengguna
//         if ($request->is('login/admin')) {
//             return view('auth.login-admin');
//         } elseif ($request->is('login/restaurant')) {
//             return view('auth.login-restaurant');
//         }

//         return view('auth.login');
//     }

//     /**
//      * Handle an incoming authentication request.
//      */
//     public function store(LoginRequest $request): RedirectResponse
//     {
//         $guard = 'web'; // Default untuk user biasa

//         if ($request->is('login/admin')) {
//             $guard = 'admin';
//         } elseif ($request->is('login/restaurant')) {
//             $guard = 'restaurant';
//         }

//         if (!Auth::guard($guard)->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
//             return back()->withErrors(['email' => 'Email atau password salah.']);
//         }

//         $request->session()->regenerate();

//         // Redirect sesuai jenis pengguna
//         if ($guard === 'admin') {
//             return redirect()->route('admin.dashboard');
//         } elseif ($guard === 'restaurant') {
//             return redirect()->route('restaurant.dashboard');
//         }

//         return redirect()->intended(route('dashboard'));
//     }

//     /**
//      * Destroy an authenticated session.
//      */
//     public function destroy(Request $request): RedirectResponse
//     {
//         if ($request->is('logout/admin')) {
//             Auth::guard('admin')->logout();
//         } elseif ($request->is('logout/restaurant')) {
//             Auth::guard('restaurant')->logout();
//         } else {
//             Auth::guard('web')->logout();
//         }

//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         return redirect('/');
//     }
// }

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(Request $request): View
    {
        if ($request->routeIs('admin.*')) {
            return view('admin.login');
        } elseif ($request->routeIs('restaurant.*')) {
            return view('restaurant.login');
        }

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $guard = match (true) {
            $request->routeIs('admin.*') => 'admin',
            $request->routeIs('restaurant.*') => 'restaurant',
            default => 'web',
        };

        // if (!Auth::guard($guard)->attempt($request->only('email', 'password', 'email-register', 'password-register'), $request->boolean('remember'))) {
        //     // return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        //     return back()->withErrors([
        //         'email' => 'Email atau password salah.',
        //         'email-register' => 'Email atau password salah.'
        //     ])->withInput();
        // }
        // if (!Auth::guard($guard)->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        //     return back()->withErrors([
        //         'email' => 'Email atau password salah.',
        //         'email-register' => 'Email atau password salah.'
        //     ])->withInput();
        // }
        if (!Auth::guard($guard)->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return back()
                ->withErrors(['email' => 'Email atau password salah.'], 'login')
                ->withInput();
        }



        $request->session()->regenerate();

        return $guard === 'web'
            ? redirect()->route('dashboard')
            : redirect()->route("{$guard}.dashboard");
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        // $guard = match (true) {
        //     $request->routeIs('admin.*') => 'admin',
        //     $request->routeIs('restaurant.*') => 'restaurant',
        //     default => 'web',
        // };

        // session()->flash('logout_message', "User is logging out. Guard: {$guard}");

        // Auth::guard($guard)->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        // return $guard === 'web'
        //     ? redirect()->route('home')
        //     // : redirect()->route("{$guard}.login");
        //     : redirect()->route("{$guard}");

        $guard = match (true) {
            $request->routeIs('admin.*') => 'admin',
            $request->routeIs('restaurant.*') => 'restaurant',
            default => 'web',
        };
        Auth::guard($guard)->logout();
        $request->session()->flush(); // Hapus semua data session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // dd(Auth::check()); // Cek apakah masih login atau tidak

        return $guard === 'web'
            ? redirect()->route('home')
            // : redirect()->route("{$guard}.login");
            : redirect()->route("{$guard}");
        // : redirect()->route("admin");
    }
}
