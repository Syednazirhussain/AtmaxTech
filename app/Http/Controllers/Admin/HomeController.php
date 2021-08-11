<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index () {

        if (Auth::check()) {

            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    public function login () {

        if (Auth::check()) {

            return redirect()->intended('admin/dashboard');
        }

        return view('admin.login');
    }

    public function login_attempt (Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = 0;
        if ($request->has('remember_me')) {

            $remember = 1;
        }

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout (Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }


    public function dashboard () {

        return view('admin.dashboard');
    }

}
