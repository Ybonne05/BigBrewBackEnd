<?php

use Illuminate\Support\Facades\Route;
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
