<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Show the registration form
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        // Validate input fields
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        // Check if user exists
        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user) {
            return back()->withErrors([
                'login' => '❌ No account found with this email address. Please check your email or register a new account.',
            ])->onlyInput('email');
        }

        // Attempt authentication
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // Redirect to admin dashboard after successful login
            return redirect()->intended('/admin/dashboard')->with('success', '🎉 Login Successful! Welcome to your dashboard.');
        }

        // Login failed - incorrect password
        return back()->withErrors([
            'login' => '❌ Incorrect password. Please check your password and try again.',
        ])->onlyInput('email');
    }

    /**
     * Handle registration request
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Show success message on register page first
        return redirect('/register')->with('success', '🎉 Registration Successful! Your account has been created. You can now login with your credentials.');
    }

    /**
     * Handle logout request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }
}