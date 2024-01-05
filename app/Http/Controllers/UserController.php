<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }

        return redirect()->back()->withInput()->withErrors(['error' => 'Invalid credentials. Check your user name and password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function usercreate(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'user' => 'boolean',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'admin' => $request->input('user'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('AdminUsers')->with('success', 'User added successfully!');

    }

    public function viewuser()
    {
        $user = User::get();
        return view('admin.users', compact('user'));
    }

    public function adduser()
    {
        return view('admin.adduser');
    }

}
