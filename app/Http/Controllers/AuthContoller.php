<?php

<<<<<<< HEAD
namespace App\Http\Controllers;

//App/Http/Controllers/AuthController.php
=======
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

>>>>>>> 04fe654d8fb9882ad8e01070e6e12caf6971cc65
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // View: resources/views/auth/login.blade.php
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to a secure page (like dashboard)
            return redirect()->intended('/dashboard');
        }

        // If login fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logout
    }

    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register'); // View: resources/views/auth/register.blade.php
    }

    // Handle registration
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Send email verification notification (if MustVerifyEmail is implemented)
        $user->sendEmailVerificationNotification();

        // Log the user in (optional)
        Auth::login($user);

        // Redirect to a secure page (like dashboard)
        return redirect()->route('verification.notice')->with('message', 'Please check your email to verify your account.');
    }
}
