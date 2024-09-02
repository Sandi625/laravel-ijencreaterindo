<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'operator') {
                return redirect('admin');

            } elseif (Auth::user()->role == 'keuangan') {
                return redirect('admin');

            } elseif (Auth::user()->role == 'marketing') {
                return redirect('admin');

            } elseif (Auth::user()->role == 'admin') {
                return redirect('admin');
            }

        } else {
            return redirect('')->withErrors('username dan password yang dimakssukan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
