<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
     public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message'=>'required'
        ]);
 
        Info::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message

        ]);

        return redirect()->back()->with('succes' , 'Succesfully send your message to the team');

     }


    public function contact(Request $request){

        $request->validate([
            'name' => 'required',
            'last' => 'required',
            'email'=>'required | email',
            'number'=>'required',
            'message'=>'required'
        ]);

        contact::create([
            'name' => $request->name,
            'last' => $request->last,
            'email'=> $request->email,
            'number'=>$request->number,
            'message'=>$request->message
        ]);

        Mail::to($appointment->email)->send(new AppointmentEmail());

        return  redirect()->back()->with('succes' , 'Succesfully send your message to the team');
    }

}

