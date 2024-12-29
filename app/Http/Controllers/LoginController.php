<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view("pages.login");
    }

    public function auth(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = $request->only(['email', 'password']);

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('login.index')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login.index')->with('success', 'Kamu berhasil logout');
    }
}
