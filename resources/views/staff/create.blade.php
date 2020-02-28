@extends("layout" )
@section("content" )
<div class="p-5">
	<h1 class="pt-2"> Register Here</h1>
<form method="POST" action="/register">
	@csrf
	<div class="form-row">
  	<div class="form-group col-md-6">
    <label for="First_name">First Name</label>
    <input type="text" class="form-control" id="First_name" name="First_name" >
    @if ($errors->has("First_name"))
       <p class=" help text-danger">{{$errors->first('First_name')}}</p>
    @endif     
  </div>
  <div class="form-group col-md-6">
    <label for="Last_name">Second Name</label>
    <input type="text" class="form-control" id="Last_name" name="Last_name" >
    @if ($errors->has("Last_name"))
       <p class=" help text-danger">{{$errors->first('Last_name')}}</p>
    @endif
  </div>
  </div>	
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="Email" name="Email">
      @if ($errors->has("Email"))
       <p class=" help text-danger">{{$errors->first('Email')}}</p>
    @endif
    </div>
    <div class="form-group col-md-6">
    <label for="Role">Role</label>
    <select class="form-control" id="Role" name="Role" >
      <option>Admin</option>
      <option>Doctor</option>
      <option>Nurse</option>      
    </select>
  </div>   
  </div>
  </div>    
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</div>
@endsection("content" )