<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileUpdateController extends Controller
{
    public function index()
    {
        return view('admin.update-profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $request->user()->update($request->only('name', 'email'));

        return back()->with('status', 'Profile updated!');
    }
}
