<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\singlebasicpage;
use App\Models\page;

class AdminSingleBasicPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singlebasicpages = singlebasicpage::with('page')->get();
        return view('admin.single-basic-plan',compact('singlebasicpages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = page::get();
        return view('admin.single-basic-plan-create',compact('pages'));
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
            'icon'=>'required'
        ]);


        singlebasicpage::create([
            'page_id'=>$request->page,
            'name'=>$request->name,
            'icon'=>$request->icon
        ]);

        return redirect()->route('single-basic-plan.index')->with('succes' , 'Data successfully Saved');
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
       $pages = page::get();
       $singlebasicpage = singlebasicpage::where('id' , $id)->first();
       return view('admin.single-basic-plan-edit',compact('singlebasicpage','pages'));
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
        $singlebasicpage = singlebasicpage::where('id' , $id)->first();
        $request->validate([
            'name'=>'required',
            'icon'=>'required'
        ]);
        $singlebasicpage->update([
            'page_id'=>$request->page,
            'name'=>$request->name,
            'icon'=>$request->icon
        ]);

        return redirect()->route('single-basic-plan.index')->with('succes' , 'Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singlebasicpage = singlebasicpage::where('id' , $id)->first();
        singlebasicpage::where('id' , $id)->delete();
        return redirect()->route('single-basic-plan.index')->with('succes' , 'Data is deleted Successfully');
    }
}
