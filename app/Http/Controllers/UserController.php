<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('front.user.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flush('success', 'You have registered');
        Auth::login($user);
        return redirect()->route('home');
    }

    public function show()
    {
        return view('front.user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success', 'You are logged');
        }
            if (Auth::user()) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->with('error', 'Incorrect login or password');
            }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
