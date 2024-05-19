<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.register');
    }
    // public function store(Request $request)
    // {
    //     // Validate form data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|unique:users|max:255',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     // Create user
    //     $user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => bcrypt($validatedData['password']),
    //     ]);

    //     // Authenticate user (optional)

    //     // Redirect to home or dashboard
    //     return redirect('/')->with('success', 'Đăng kí thành công!');
    // }
}
