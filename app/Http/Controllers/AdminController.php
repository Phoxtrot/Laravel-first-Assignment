<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = Staff::latest()->where('role', 'admin')->get();

    	return view('admin.show',[
    		'admin'=>$admin
    	]);
    }
}
