<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUserLoginController extends Controller
{
    public function index(){
        return view('my_user_login');
    }
}
