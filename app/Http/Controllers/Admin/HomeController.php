<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
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

        return view('admin.login');
    }


    public function dashboard () {

        return view('admin.dashboard');
    }

}
