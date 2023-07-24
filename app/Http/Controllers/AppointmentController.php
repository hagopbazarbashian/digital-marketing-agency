<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use App\Mail\AppointmentEmail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
     public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'topic'=>'required',
            'body'=>'required'
        ]);

        $appointment = appointment::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'topic'=>$request->topic,
            'body'=>$request->body
        ]);

        Mail::to($appointment->email)->send(new AppointmentEmail());

        return redirect()->back()->with('success' , 'Message successfully sent');


     }
}
