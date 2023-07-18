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
        //  // Validate the data received from the request (optional)
        //  $validatedData = $request->validate([
        //      'id' => 'required|string|max:255',
        //      'style' => 'required|email|unique:your_table_name,email', // Replace your_table_name with the actual table name in the database
        //      // Add other validation rules for your data fields if needed
        //  ]);
 
        //  // Store the data in the database using the model
        //  $record = storepagestyle::create($validatedData);
 
        //  // If you want to return the newly created record, you can do so
        //  return response()->json(['message' => 'Data stored successfully', 'data' => $record]);
        dd("test");
     }
}
