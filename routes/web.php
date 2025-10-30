<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'index'])->name('app');
Route::post('/', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/success', [RegistrationController::class, 'success'])->name('success');
