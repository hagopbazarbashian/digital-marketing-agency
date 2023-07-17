<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;

class BasicPlanController extends Controller
{
     public function index(){
        $pages = page::get();
        return view('basic-plan',compact('pages'));
     }
}
