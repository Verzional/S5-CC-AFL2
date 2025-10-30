<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'new_account_mail' => 'required|email',
            'subject' => 'required|string',
            'name' => 'required|string',
        ]);

        Mail::to($request->new_account_mail)->send(new TestMail($request->all()));

        return back()->with('success', 'Email sent successfully!');
    }
}