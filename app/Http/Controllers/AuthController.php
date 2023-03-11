<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogActivity;
use  Auth;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'logout']);
    }
    public function formLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $cred=$request->validate([
            'username'=>'required|exists:users',
            'password'=>'required'
        ]);

        if (Auth::attempt ($cred, $request->remember)){
            LogActivity::add('berhasil Login');
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'username'=> 'The provided credentials do not match our record.',
        
        ]);
    }
    public function logout(Request $request)
    {
        LogActivity::add('berhasil Logout');
        Auth::logout();
        return redirect()->route('login');
    }
}
