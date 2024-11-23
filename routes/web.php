<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

// ====================== HALAMAN UTAMA ======================
Route::get('/', function () {
    return view('welcome'); // Halaman utama
})->name('home');

// ====================== AUTHENTICATION ROUTES ======================

// Login Routes
Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Register Routes
Route::get('/register', [RegisterController::class, 'halamanRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// ====================== EMAIL VERIFICATION ======================

// Halaman pemberitahuan verifikasi email
Route::get('/register/verify', function () {
    return view('auth.verify-email');
})->name('register.verify');

// Proses verifikasi email
Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    $user = \App\Models\User::find($id);

    if (!$user || !hash_equals(sha1($user->email), $hash)) {
        return redirect()->route('login')->with('status', 'Link verifikasi tidak valid atau sudah kadaluarsa.');
    }

    if ($user->hasVerifiedEmail()) {
        return redirect()->route('login')->with('status', 'Email Anda sudah diverifikasi.');
    }

    $user->markEmailAsVerified();

    return redirect()->route('login')->with('status', 'Email Anda berhasil diverifikasi. Silakan login.');
})->middleware(['signed'])->name('verification.verify');

// Mengirim ulang email verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'Link verifikasi telah dikirim ulang.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// ====================== PASSWORD RESET ======================

// Halaman untuk meminta reset password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password'); // Pastikan view ini ada
})->middleware('guest')->name('password.request');

// Mengirim email reset password
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

// Halaman reset password menggunakan token
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Proses reset password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => \Illuminate\Support\Facades\Hash::make($password),
            ])->setRememberToken(\Illuminate\Support\Str::random(60));

            $user->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', 'Password berhasil direset. Silakan login.')
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('/home', function () {
    return view('home'); // Pastikan view `home.blade.php` ada di folder resources/views
})->middleware('auth')->name('home');
