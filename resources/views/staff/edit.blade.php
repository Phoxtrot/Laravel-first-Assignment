@extends("layout" )
@section("content" )
<div class="p-5">
	<h1 class="pt-2"> Update Profile </h1>
<form method="POST" action="/profile/{{$profile->id}}">
	@csrf
  @method('PUT')
	<div class="form-row">
  	<div class="form-group col-md-6">
    <label for="First_name">First Name</label>
    <input type="text" class="form-control" id="First_name" name="First_name" value="{{$profile->First_name}}" >
    @if ($errors->has("First_name"))
       <p class=" help text-danger">{{$errors->first('First_name')}}</p>
    @endif 
  </div>
  <div class="form-group col-md-6">
    <label for="Last_name">Last Name</label>
    <input type="text" class="form-control" id="Last_name" name="Last_name" value="{{$profile->Last_name}}" >
    @if ($errors->has("Last_name"))
       <p class=" help text-danger">{{$errors->first('Last_name')}}</p>
    @endif 
  </div>
  </div>	
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" id="Email" name="Email" value="{{$profile->Email}}">
      @if ($errors->has("First_name"))
       <p class=" help text-danger">{{$errors->first('Email')}}</p>
    @endif 
    </div>
    <div class="form-group col-md-6">
    <label for="Role">Role</label>
    <select class="form-control" id="Role" name="Role" value="{{$profile->Role}}" >
      <option>Admin</option>
      <option>Doctor</option>
      <option>Nurse</option>      
    </select>
  </div>   
  </div>
  </div>    
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
@endsection("content" )