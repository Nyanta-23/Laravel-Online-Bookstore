<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isFalse;
use function PHPUnit\Framework\isTrue;

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

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            dd('Hi sayang');
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('authError', 'Email or Password is wrong!');
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
}
