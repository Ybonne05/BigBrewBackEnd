<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\RegistrationMiddleware;

    Route::get('/register', [AuthController::class, 'showRegisterForm'])
        ->name('register')
        ->middleware('guest', 'registration');

    Route::post('/register', [AuthController::class, 'register'])
        ->middleware('guest', 'registration');

        Route::get('/login', [AuthController::class, 'showLoginForm'])
        ->name('login')
        ->middleware('guest');

    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('guest');



    Route::middleware('auth')->group(function () {
        Route::get('/email/verify', function () {
            return view('auth.verify-email'); // Create verify-email.blade.php
        })->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', [EmailVerificationRequest::class, 'handle'])
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('/email/resend', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();
            return back()->with('message', 'Verification link sent!');
        })->middleware('throttle:6,1')->name('verification.resend');
    });
