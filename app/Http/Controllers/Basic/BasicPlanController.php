<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use App\Models\storepagestyle;

class BasicPlanController extends Controller
{
     public function index(){
        $pages = page::get();
        return view('basic-plan',compact('pages'));
     }

     public function store(Request $request)
     {

        $storepagestyle = storepagestyle::create([
            'king_page_id'=>$request->id,
            'kind_page'=>$request->name
        ]);
        return redirect()->to('contact');

     }
}
