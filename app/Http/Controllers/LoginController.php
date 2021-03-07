<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->filled('remember');
    
        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();
    
            return redirect()
            ->intended('dashboard')
            ->with('status', 'You are logged in');

        } 
        throw ValidationException::withMessages ([
            'password' => __('auth.failed')
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');


    }


}
