<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            // dd(auth()->user());
            // dd(auth()->check());
            // $request->session()->regenerate();
            return redirect()
                ->intended(route('home'))
                ->with('feedback.message', 'Login successfully. Welcome back!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('feedback.message', 'Credentials entered do not match.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login')
            ->with('feedback.message', 'You have been logged out.');
    }
}
