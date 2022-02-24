<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return redirect('/');
    }
}
