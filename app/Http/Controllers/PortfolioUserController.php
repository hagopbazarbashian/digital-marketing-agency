<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;

class PortfolioUserController extends Controller
{
    public function index(){
        $portfolios_show = portfolio::first();
        $portfolios = portfolio::orderBy('created_at', 'desc')->get();
        return view('portfolio',compact('portfolios','portfolios_show'));
    }
}
