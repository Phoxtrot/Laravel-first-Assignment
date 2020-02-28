<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;

class NurseController extends Controller
{
     public function index()
    {
    	$nurse = Staff::latest()->where('role', 'nurse')->get();

    	return view('nurse.show',[
    		'nurse'=>$nurse
    	]);
    }
}
