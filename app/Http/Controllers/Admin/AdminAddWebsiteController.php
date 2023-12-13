<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addwebsiteform;
use App\Mail\CreatewebsiteMail;
use Illuminate\Support\Facades\Mail;

class AdminAddWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myusers = addwebsiteform::orderBy('created_at', 'desc')->get();
         return view('admin.add_website',compact('myusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $addwebsiteform =addwebsiteform::where('id' ,$id)->first();
         return view('admin.add_website_edit',compact('addwebsiteform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'phonenumber'=>'required',
            'websitekind'=>'required | max:100',
            'message'=>'required | max:100'
       ]);

         $sendemail =addwebsiteform::where('id' ,$id)->first();

         $sendemail->update([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'phonenumber'=>$request->input('phonenumber'),
            'websitekind'=>$request->input('websitekind'),
            'message'=>$request->input('message')
        ]);

        $mail = Mail::to($sendemail->lastname)->send(new CreatewebsiteMail($sendemail));
        return redirect()->back()->with('succes' , 'your email was sent agian successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sendemail =addwebsiteform::where('id' ,$id)->first();
        $sendemail->delete();
        return redirect()->back()->with('succes' , 'Data is deleted Successfully');

    }

}
