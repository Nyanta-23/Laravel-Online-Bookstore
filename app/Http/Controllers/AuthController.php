<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin()
    {

        return view('auth.signin', [
            'title' => 'SignIn'
        ]);
    }

    public function signup()
    {

        return view('auth.signup', [
            'title' => 'SignUp'
        ]);
    }

    public function regist(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users,username|min:5|max:255',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/auth/signin')->with('success', 'Registration successful! Please SignIn');
    }

    
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withInput()->with('authError', 'Email or Password is wrong!');
    }

    public function signOut (Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
