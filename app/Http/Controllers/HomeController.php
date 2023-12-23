<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    // login
    public function masuk() {

        return view('auth.login');
    }

    public function prosesMasuk(Request $request) {
        $request->validate([
            'mail'      => 'required',
            'password'  => ['required', Password::min(8)]
        ]);

        // save input from user dan berhasil divalidasi
        $data   = [
            'email'     => $request->mail,
            'password'  => $request->password
        ];

        // proses pengecekan login
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('failed', 'Email atau password salah!');

    }

    // logout
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();  // menghapus sesi

        $request->session()->regenerateToken(); // digenerate token baru

        return redirect('/');
    }

    // register
    public function daftar() {
        return view('auth.register');
    }

    public function prosesDaftar(Request $request) {
        $validatedData  = $request->validate([
            'username'  => 'required',
            'mail'      => 'required',
            'phone'     => 'required',
            'password'  => ['required', Password::min(8)]
        ]);

        // Enkripsi password menggunakan bcrypt sebelum disimpan ke database
        $hashedPassword = Hash::make($validatedData['password']);

        // data berhasil divalidasi
        DB::table('users')->insert([
            'name'          => $validatedData['username'],
            'email'         => $validatedData['mail'],
            'phone_number'  => $validatedData['phone'],
            'password'      => $hashedPassword,
        ]);

        // redirect
        return redirect('/login');
    }
}
