<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;

class AdminBasicWebPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = page::get();
        return view('admin.basic-plan' ,compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.basic-plan-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required'
        ]);

          // Get the uploaded file
        $image = $request->file('image');

        // Generate a unique file name for the image
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        // Move the image to the public/images directory (you can change the folder name)
        $image->move(public_path('page'), $filename);

        page::create([
            'name'=>$request->name,
            'image'=>$filename
        ]);

        return redirect()->route('basic-page.index')->with('succes' , 'Data successfully Saved');
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
        $page = page::where('id' ,$id)->first();

        return view('admin.basic-plan-edit' , compact('page'));
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
        $page = page::where('id' ,$id)->first();

        $request->validate([
            'name'=>'required',
            // 'image'=>'required'
        ]);

         // Update the name field
          $page->name = $request->name;

         // Handle the image upload if provided
         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $filename = uniqid() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('page'), $filename);
             if ($page->image) {
                unlink(public_path('page\\' . $page->image));
            }
         }

          // Save the updated record
           $page->save();

         $page->update([
            'name'=>$request->name
         ]);

         return redirect()->route('basic-page.index')->with('succes' , 'Update Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $page = page::where('id' , $id)->first();
        page::where('id' , $id)->delete();
        return redirect()->route('basic-page.index')->with('succes' , 'Data is deleted Successfully');

    }
}
