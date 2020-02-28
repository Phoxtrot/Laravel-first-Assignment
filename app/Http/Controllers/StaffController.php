<?php

namespace App\Http\Controllers;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
    	$staff = Staff::all();
    	$count=0;
    	return view ('staff.index', [
    		'staff'=>$staff, 'count'=>$count
    	]);
    }
    public function create($value='')
    {
    	return view('staff.create');
    }
    public function store()
    {
    	request()->validate([
    		'First_name'=>'required',
    		'Last_name'=>'required',
    		'Email'=>'required',
    		'Role'=>'required',
    	]);
    	$staff = new Staff();
    	$staff->First_name = request('First_name');
    	$staff->Last_name = request('Last_name');
    	$staff->Email = request('Email');
    	$staff->Role = request('Role');
    	$staff->save();
    	return redirect('/');  
    }
    public function show($id)
    {
    	$profile = Staff::find($id);
    	return view('staff.show', [
    		'profile'=>$profile
    	]);
    }
    public function edit($id)
    {
    	$profile=Staff::find($id);
    	return view('staff.edit', [
    		'profile'=>$profile
    	] );
    }
    public function update($id)
    {
    	request()->validate([
    		'First_name'=>'required',
    		'Last_name'=>'required',
    		'Email'=>'required',
    		'Role'=>'required',
    	]);

    	$profile= Staff::find($id);
    	$profile->First_name = request('First_name');
    	$profile->Last_name = request('Last_name');
    	$profile->Email = request('Email');
    	$profile->Role = request('Role');
    	$profile->save();
    	return redirect('/profile/'.$profile->id); 
    }
   public function destroy($id)
   {
   		$staff = Staff::find($id);
   		$staff->delete();
   		return redirect('/')->with('sucess', 'Member removed');
   }
    public function search()
    {
    	$search= request('search');    	
    	$staff = Staff::find('Muhammad');//->where('name','like','%'.$search.'%');
    	dd($staff);
    	//return view('search',[
    	//	'search'=>$search
    	//]);
    	//if (count($staff)>0) {
    	//	return view('search')->withDetails($staff)->withQuery($q);
    	//}
    	//else return view('search')->withMessage('No Details found');
    }
}
