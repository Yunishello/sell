<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'login successful');
        }

        return redirect('/signin')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/');
    }

}
