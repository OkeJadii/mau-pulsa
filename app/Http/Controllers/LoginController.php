<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', '<strong>Login failed!</strong>');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
