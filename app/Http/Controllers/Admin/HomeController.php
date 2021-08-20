<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\GeneralInformation;
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

    public function general_information () {

        $general_information = GeneralInformation::where('site_name', config('app.name'))
                                                    ->first();

        return view('admin.pages.general_information', compact('general_information'));
    }

    public function general_information_update (Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'address' => ['required'],
            'site_name' => ['required']
        ]);


        $inputs = $request->except("_token");


        $model = GeneralInformation::where('site_name', config('app.name'))->first();
        $model->email = $inputs['email'];
        $model->phone = $inputs['phone'];
        $model->address = $inputs['address'];

        if ($model->save()) {

            $request->session()->flash('success', 'General information successfully updated');
            return redirect()->back();
        }

        $request->session()->flash('error', 'General information not updated');
        return redirect()->back();
    }

    public function about () {

        $page = Page::where('name', 'about')->first();

        return view('admin.pages.about', compact('page'));
    }

    public function about_page_update (Request $request) {

        $credentials = $request->validate([
            'content' => ['required']
        ]);


        $inputs = $request->except("_token");


        $model = Page::where('name', 'about')->first();
        $model->main_heading = $inputs['main_heading'];
        $model->sub_heading = $inputs['sub_heading'];
        $model->content = $inputs['content'];

        if ($model->save()) {

            $request->session()->flash('success', 'About page successfully updated');
            return redirect()->back();
        }

        $request->session()->flash('error', 'About page not updated');
        return redirect()->back();
    }


}
