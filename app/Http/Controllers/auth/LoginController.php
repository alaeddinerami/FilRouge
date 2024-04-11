<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function authenticate(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validation)) {
            // Authentication successful
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/librarys');
            }
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided information do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
