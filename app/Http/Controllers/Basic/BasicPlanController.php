<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use App\Models\storepagestyle;
use App\Models\singlebasicpage;

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

     public function singlepage($id){
        $storepagestyles = singlebasicpage::with('page')->where('page_id' , $id)->get();
        $page = page::where('id' , $id)->first();
        return view('single-basic-plan',compact('storepagestyles','page'));
     }
}
