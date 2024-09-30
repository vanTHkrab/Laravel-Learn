<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogoutController extends Controller
{
    public function store(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
