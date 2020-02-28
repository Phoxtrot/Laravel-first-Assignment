@extends("layout" )
@section("content" )
  <div class="p-5">
    <h1 class="text-center">Our Admins</h1>
    <ol>
      @foreach ($admin as $admins)
      <li>
        <a href="/profile/{{$admins->id}}"><p> <strong>{{$admins->Last_name}}</strong> {{$admins->First_name}}</p></a>
      </li>
      @endforeach
    </ol>
  </div>
@endsection("content" )