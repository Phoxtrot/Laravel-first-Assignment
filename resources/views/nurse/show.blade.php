@extends("layout" )
@section("content" )
  <div class="p-5">
    <h1 class="text-center">Our Nurses</h1>
    <ol>
      @foreach ($nurse as $nurses)
      <li>
        <a href="/profile/{{$nurses->id}}"><p> <strong>{{$nurses->Last_name}}</strong> {{$nurses->First_name}}</p></a>
      </li>
      @endforeach
    </ol>
  </div>
@endsection("content" )