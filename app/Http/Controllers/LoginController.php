<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin()
    {
        return view('loginPage'); // View untuk halaman login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Autentikasi menggunakan name dan password
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home'); // Redirect ke dashboard atau halaman tujuan Anda
        }

        // Jika login gagal
        return back()->withErrors([
            'name' => 'Name atau password salah.',
        ])->withInput($request->only('name'));
    }
}

