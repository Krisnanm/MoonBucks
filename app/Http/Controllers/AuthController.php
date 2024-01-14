<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'phone_number' => $request->phone_number,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // dd(Auth::user());
            return redirect('/show/coffee')->with('success', 'Login Successfully');
        }
        return redirect()->back()->with('error', 'Login failed. Check your phone number and password.');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    // Tambahkan metode untuk proses registrasi jika diperlukan
}
