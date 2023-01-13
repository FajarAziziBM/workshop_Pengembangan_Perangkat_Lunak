<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.signin');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $is_active = User::where('username', $credentials['username'])->first()->is_active;

        // if ($is_active == 0) {
        //     return back()->with('failed', 'Akun anda sudah dinonaktifkan');
        // }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.index'))->with('success', 'Berhasil Login!');
        }
        return back()->with('failed', 'Username/Password salah!');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('logout', 'Session Telah Berakhir!');
    }
}
