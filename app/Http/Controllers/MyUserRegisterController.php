<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myuser;
use App\Models\addwebsiteform;
use Hash;
use Auth;

class MyUserRegisterController extends Controller
{
     public function index(){
        return view('myuser.add_website');
     }

     public function register(Request $request){

        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'phonenumber'=>'required',
            'websitekind'=>'required | max:100',
            'message'=>'required | max:100'
       ]);


       $myuser = myuser::create([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'phonenumber'=>$request->input('phonenumber'),
            'websitekind'=>$request->input('websitekind'),
            'message'=>$request->input('message')
       ]);

       return redirect()->back()->with('succes' , 'We will contact you within 24 hours');
    }
}
