<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // Check credentials without encryption
        $user = DB::table('users')
            ->where('email', $credentials['email'])
            ->where('password', $credentials['password'])
            ->first();
        if ($user) {

            Auth::loginUsingId($user->UserID);
            $request->session()->regenerate();
            // return redirect()->intended('admin.dashboard');
            return redirect()->route('admin')->with('success', 'Logged in successfully');
        }

        // Jika login gagal, kembalikan ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau Password ada yang salah!',
        ])->onlyInput('email');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}


// public function showLoginForm()
// {
//     return view('auth.login');  // Menampilkan form login
// }

// public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');
//     // Check credentials without encryption
//     $user = DB::table('users')
//         ->where('email', $credentials['email'])
//         ->where('password', $credentials['password'])
//         ->first();

//     if (Auth::attempt($credentials)) {
//         // Autentikasi berhasil, redirect ke halaman utama
//         return redirect()->route('home')->with('success', 'Logged in successfully.');
//     }



// public function logout(Request $request)
// {
//     Auth::logout();
//     return redirect()->route('login')->with('success', 'Logged out successfully.');
// }

