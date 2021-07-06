<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


     
class TestController extends Controller
{
    function getV(Request $req){
        $validatedData = $req->validate([
            'name' => 'required'
            
        ], [
            'name.required' => 'Name is required',
            
        ]);

    $user = User::create($validatedData);
  
    return back()->with('success', 'User created successfully.');
}
   
}
