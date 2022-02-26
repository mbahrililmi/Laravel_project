<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index', [
            'title' => 'Login',
        ]);
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // boleh begini
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // boleh begini

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 0;

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil! Anda bisa login');
        return redirect()->route('login');
    }

    public function autentification(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth()->user()->role == 1) {
                $request->session()->regenerate();
                return redirect()->route('admin');
            }
            if (Auth()->user()->role == 0) {
                $request->session()->regenerate();
                return redirect()->route('member.category');
            }
        }

        return back()->with('loginError', 'Login Gagal Periksa email dan password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('logoutSuccess', 'Logout berhasil, Terimakasih');
    }
}
