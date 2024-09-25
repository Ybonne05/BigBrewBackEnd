<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthContoller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\RegistrationMiddleware;

    // Registration routes
    Route::get('/register', [AuthController::class, 'showRegisterForm']);
    Route::post('/register', [AuthController::class, 'register']);


    // Login routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard (secured page)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('auth');
=======
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
>>>>>>> 04fe654d8fb9882ad8e01070e6e12caf6971cc65
