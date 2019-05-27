<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ATG;

class ATGController extends Controller
{
    public function index(){

    	return view('task.index');
    }


    public function store(Request $request){

     

      	$request->validate([

            'name' => 'required',
            'email'=> 'required|email',
            'pin'=> 'required|size:6'

      	]);

      ATG::create([
        'name' => $request->name,
        'email'=> $request->email,
        'pincode'=> $request->pin

      ]);
      
	  session()->flash('msg','Data has been created');
 
      return redirect('/'); 
    }

}
