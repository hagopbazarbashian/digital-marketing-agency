<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;

class HomeController extends Controller 
{
    public function index(){
        $portfolios_show = portfolio::first();
        $portfolios = portfolio::orderBy('created_at', 'desc')->get();
        return view('welcome',compact('portfolios','portfolios_show'));
    }
}
