<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function loginBackend()
    {
        // Show your login view (make sure this view exists)
        return view('backend.v_login.index');
    }

    /**
     * Handle login request.
     */
    public function authenticateBackend(Request $request)
    {
        // Validate the login input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('backend.beranda')->with('success', 'Login successful!');
        }

        // If failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Logout the user.
     */
    public function logoutBackend(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('backend.login')->with('success', 'You have been logged out.');
    }
}
