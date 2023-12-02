<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = portfolio::orderBy('created_at', 'desc')->get();
         return view('admin.portfolio',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio-create');
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
            'image'=>'required',
            'title'=>'required'
        ]);
        $image = $request->file('image');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('portfolio'), $filename);

        portfolio::create([
            'image'=>$filename,
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate,
            'client'=>$request->client,
            'category'=>$request->category,
            'name'=>$request->name,
            'title'=>$request->title,
            'link'=>$request->link,
        ]);

        return redirect()->route('portfolio-admin.index')->with('succes' , 'Data successfully Saved');
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
        $portfolio = portfolio::where('id' , $id)->first();
        return view('admin.portfolio-edit',compact('portfolio'));
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

        $portfolio = portfolio::where('id' ,$id)->first();
        $request->validate([
            'title' => 'required',
            // 'image' => 'required|image', // Requires a valid image file
        ]);



        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('portfolio'), $filename);
            $portfolio->image = $filename;
            $portfolio->save();
        }

        // Update the portfolio record
        $portfolio->update([
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate,
            'client'=>$request->client,
            'category'=>$request->category,
            'title' => $request->title,
            'link' => $request->link
        ]);

        return redirect()->route('portfolio-admin.index')->with('succes', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = portfolio::where('id' , $id)->first();
        portfolio::where('id' , $id)->delete();
        return redirect()->route('portfolio-admin.index')->with('succes' , 'Data is deleted Successfully');

    }
}
