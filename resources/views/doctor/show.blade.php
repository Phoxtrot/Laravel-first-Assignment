@extends("layout" )
@section("content" )
  <div class="p-5">
    <h1 class="text-center">Our Doctors</h1>
    <ol>
      @foreach ($doctor as $doctors)
      <li>
        <a href="/profile/{{$doctors->id}}"><p> <strong>{{$doctors->Last_name}}</strong> {{$doctors->First_name}}</p></a>
      </li>
      @endforeach
    </ol>
  </div>
@endsection("content" )