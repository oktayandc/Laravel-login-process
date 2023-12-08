<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('welcome');
        } else if ($request->method() == 'POST') {
            $data = $request->only('email', 'password');
            if (Auth::attempt($data)) {
                return redirect(route('home'))->with('login', 'Giriş işlemi başarılı');
            } else {
                // login fail
                return redirect()->back()->with('login', 'Giriş işlemi başarısız');
            }
        }
    }
    public function register(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('register');
        } else if ($request->method() == 'POST') {
            $request->validate([
                "name" => "required|min:3|max:50",
                "email" => "required|email",
                "password" => "required|min:8|confirmed"
            ]);

            $data = $request->only('name', 'email', 'password');
            $data['password'] = bcrypt($data['password']);

            User::create($data);

            return redirect(route('login'))->with('register', 'Kayıt işlemi başarılı');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('login'))->with('login', 'Oturum başarıyla kapatıldı.');
    }
}
