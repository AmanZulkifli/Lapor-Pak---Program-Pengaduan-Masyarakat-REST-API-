<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegister()
    {
        return view('accounts.register');
    }

    public function loadRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ],
        [
            'name.required' => 'Nama Lengkap perlu diisi',
            'username.required' => 'Username perlu diisi',
            'email.required' => 'Email perlu diisi',
            'password.required' => 'Password perlu diisi',
        ]);

        $proses = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'GUEST',
            'password' => Hash::make($request->password),
        ]);

        if($proses) {
            return redirect()->to('/accounts/login')->with('success', 'Registrasi Berhasil');
        } else {
            return redirect()->back()->with('failed', 'Registrasi Gagal');
        }
    }

    public function showLogin() {
        return view('accounts.login');
    }

    public function loadLogin(Request $request) {
    // Validasi input
    $proses = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Email perlu diisi',
        'email.email' => 'Format email tidak valid',
        'password.required' => 'Password perlu diisi',
    ]);

    // Ambil email dan password dari input yang divalidasi
    $proses = $request->only(['email', 'password']);

    // Cek apakah login berhasil
    if (Auth::attempt($proses)) {
        if(Auth::user()->role == 'GUEST') {
            return redirect()->route('report')->with('success', 'Selamat datang ' . Auth::user()->name);
        } elseif (Auth::user()->role == 'STAFF') {  
            return redirect()->route('userreports')->with('success', 'Selamat datang ' . Auth::user()->name);
        } elseif (Auth::user()->role == 'HEAD_STAFF') {
            return redirect()->route('accounts')->with('success', 'Selamat datang ' . Auth::user()->name);
        }
    } else {
        // Kembali ke halaman login jika gagal
        return back()->withErrors([
            'email' => 'Email atau Password salah',
        ])->withInput($request->only('email')); // Mempertahankan input email
    }
}

    public function logout() {
    Auth::logout();
    return redirect()->route('login')->with('success', 'Logout Berhasil');
}
}
