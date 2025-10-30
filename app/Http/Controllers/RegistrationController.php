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
        return view('app');
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
            'subject' => 'Welcome to Cloud Computing Class - Registration Successful',
        ];

        // Send confirmation email
        Mail::to($registration->email)->send(new RegistrationMail($emailData));

        // Redirect to success page
        return redirect()->route('success')->with('success', 'Registration successful! Welcome to the Cloud Computing class.');
    }

    /**
     * Show the registration success page
     */
    public function success()
    {
        return view('success');
    }
}
