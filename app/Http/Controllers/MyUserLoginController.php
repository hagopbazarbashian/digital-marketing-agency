<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myuser;
use Hash;
use Auth;

class MyUserLoginController extends Controller
{
    public function index(){
        return view('my_user_login');
    }

    public function login_submit(Request $request){
        // dd("test");

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember = $request->has('remember_me'); // Check if the "Remember Me" checkbox is selected

        if(Auth::guard('myuser')->attempt($credential, $remember)) {
            return redirect()->route('myuser.index');
        } else {
            return redirect()->route('login')->with('error', 'Information is not correct!');
        }

    }
}
