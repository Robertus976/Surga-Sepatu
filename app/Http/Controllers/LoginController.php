<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function halamanLogin()
    {
        return view('loginPage');
    }

    // Mengelola proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba untuk login
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil, redirect ke halaman dashboard atau halaman lain
            return redirect()->intended('dashboard'); // Ganti 'dashboard' sesuai dengan rute yang kamu inginkan
        }

        // Jika login gagal, redirect kembali dengan pesan kesalahan
        return redirect()->back()->withErrors(['password' => 'Username atau password salah.'])->withInput($request->only('username'));
    }
}
