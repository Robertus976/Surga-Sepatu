<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('home.contact');
    }

    public function sendEmail(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // Kirim email
        Mail::to('kukuhsp5@gmail.com')->send(new ContactMail($validated));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
