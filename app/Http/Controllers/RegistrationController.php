<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Registration;
use App\Mail\RegistrationMail;

class RegistrationController extends Controller
{
    /**
     * Show the registration form
     */
    public function index()
    {
        return view('registration.form');
    }

    /**
     * Handle the registration form submission
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|unique:registrations,email',
            'password' => 'required|string|min:8|confirmed',
            'birthDate' => 'required|date|before:today',
        ]);

        // Create the registration
        $registration = Registration::create([
            'fullName' => $validated['fullName'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birthDate' => $validated['birthDate'],
        ]);

        // Prepare email data
        $emailData = [
            'name' => $registration->fullName,
            'email' => $registration->email,
            'subject' => 'Selamat Datang - Pendaftaran Berhasil',
        ];

        // Send confirmation email
        Mail::to($registration->email)->send(new RegistrationMail($emailData));

        // Redirect to success page
        return redirect()->route('registration.success')->with('success', 'Pendaftaran berhasil! Silakan cek email Anda.');
    }

    /**
     * Show the registration success page
     */
    public function success()
    {
        return view('registration.success');
    }
}
