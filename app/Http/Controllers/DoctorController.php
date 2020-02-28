<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
    	$doctor = Staff::latest()->where('role', 'doctor')->get();
    	return view('doctor.show',[
    		'doctor'=>$doctor
    	]);
    	//dd($doctor);
    }	
}