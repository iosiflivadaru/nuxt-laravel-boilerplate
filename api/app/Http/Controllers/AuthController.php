<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
          ]);
      
          $credentials = $request->only('email', 'password');
      
          if (Auth::attempt($credentials)) {
            return response()->json(Auth::user(), 200);
          }
      
          throw ValidationException::withMessages([
            'email' => 'The provided credentails are incorect.'
          ]);
    }

    public function logout()
    {
        Auth::logout();
    }
}
