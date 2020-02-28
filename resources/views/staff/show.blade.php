@extends("layout" )
@section("content" )
  <div class="p-5 col-10 pb-0">
    <p class="pt-3"> <strong>First Name:</strong> {{$profile->First_name}}</p>
    <p> <strong>Last Name:</strong> {{$profile->Last_name}}</p>
    <p> <strong>Role:</strong> {{$profile->Role}}</p>
    <p> <strong>Email:</strong> {{$profile->Email}}</p>
  </div>
  <div class="col-2 pt-0">
    <button class="btn btn-outline-primary pt-0 ml-2 pull-right mb-3" type="button">
          <a href="/profile/{{$profile->id}}/edit" class="nav-link text-uppercase">Edit profile </a>
        </button>
    <form action="/profile/{{$profile->id}}" method="POST" class="pull-right">
      @csrf
      @method("DELETE")
      <button type="submit" class="btn btn-primary">Delete profile</button>
    </form>           
    </div>
@endsection("content" )