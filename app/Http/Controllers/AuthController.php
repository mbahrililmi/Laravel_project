<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        dd('registrasi berhasil');
    }
}
