<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myuser;
use Hash;
use Auth;

class MyUserRegisterController extends Controller
{
     public function index(){
        return view('my_user_register');
     }

     public function register(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required',
            'retype_password'=>'required'
       ]);

       $hashedPassword = Hash::make($request->input('password'));

       $myuser = myuser::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$hashedPassword,
            'status'=>0
       ]);

       return redirect()->route('login')->with('succes' , 'Thanks for registering!');
    }
}
