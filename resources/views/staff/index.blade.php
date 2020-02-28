@extends("layout" )
@section("content" )
  <div class="p-5">
    <h1 class="text-center p-2">Our Staff profile</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Last name</th>
          <th scope="col">First Name</th>
          <th scope="col">Role</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($staff as $staffs)        
        <tr>          
          <td scope="row">            
            {{$count+=1}}</td>
          <td>{{$staffs->Last_name}}</td>
          <td>{{$staffs->First_name}}</td>
          <td>{{$staffs->Role}}</td>
          <td>{{$staffs->Email}}</td>                    
        </tr>
        @endforeach    
      </tbody>
    </table>
  </div>
@endsection("content" )