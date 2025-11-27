<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginPost(Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        // Jika admin
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Jika user biasa
        return redirect()->route('home');
    }

    return redirect()->back()->with('error', 'Email atau password salah!');
}


    public function register() {
        return view('auth.register');
    }

    public function registerPost(Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:3'
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user', // ⬅ otomatis user
    ]);

    return redirect()->route('login')->with('success', 'Pendaftaran berhasil!');
}

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
