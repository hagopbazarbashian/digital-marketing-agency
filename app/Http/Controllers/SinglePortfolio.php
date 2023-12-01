<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;

class SinglePortfolio extends Controller
{
     public function index($id){

        $portfolios_single = portfolio::where('id' , $id)->first();
        return view('single_portfolio',compact('portfolios_single'));
     }
}
