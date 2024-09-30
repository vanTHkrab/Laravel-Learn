<?php

namespace App\Http\Controllers;

class AdminHomeController extends Controller
{
    public function index()
    {
        if (auth()->guard('admin')->check()) {
            return view('admin.home');
        }

        return redirect()->route('admin.login');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
