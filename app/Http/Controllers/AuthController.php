<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ================= REGISTER =================
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|unique:users,email',
            'phone'            => 'nullable|string|max:20',
            'birth_date'       => 'nullable|date',
            'alamat_domisili'  => 'nullable|string|max:255',
            'asal_kampus'      => 'nullable|string|max:255',
            'program_studi'    => 'nullable|string|max:255',
            'password'         => 'required|min:6',
        ]);

        User::create([
            'name'            => $validated['name'],
            'email'           => $validated['email'],
            'phone'           => $validated['phone'] ?? null,
            'birth_date'      => $validated['birth_date'] ?? null,
            'alamat_domisili' => $validated['alamat_domisili'] ?? null,
            'asal_kampus'     => $validated['asal_kampus'] ?? null,
            'program_studi'   => $validated['program_studi'] ?? null,
            'password'        => Hash::make($validated['password']),
        ]);

        return redirect('/login')
            ->with('success', 'Register berhasil, silakan login');
    }

    // ================= LOGIN =================
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/beranda');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    // ================= LOGOUT =================
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
