<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function () {
    return view('app');
});

Route::get('/sent', function () {
    return view('sent');
});

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');

Route::get('/register', [RegistrationController::class, 'index'])->name('registration.form');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/success', [RegistrationController::class, 'success'])->name('registration.success');
