<?php

namespace App\Http\Controllers;

use App\Models\Admin; // Pastikan Anda mengimpor model Admin
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ini adalah view login yang benar
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
        ]);

        // Cari admin berdasarkan username
        $admin = Admin::where('username', $request->username)->first();

        // Debugging: Tampilkan admin yang ditemukan
        // dd($admin); // Uncomment jika perlu debug

        // Cek apakah admin ada
        if ($admin) {
            // Jika username cocok, login
            Auth::login($admin); // Gunakan objek admin langsung
            // Redirect ke dashboard
            return redirect()->route('dashboard');
        }

        // Jika admin tidak ditemukan
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
