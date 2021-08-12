<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if(auth()->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->route('admin.home')->with("pass", "welcome " . auth()->user()->username);
        }
        return redirect()->back()->with("fail", "Try another email or password.");
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route('admin.login');
    }

}
