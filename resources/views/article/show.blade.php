@extends('./layout')
@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <p><strong>{{$article->title}}</strong></p>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>{{$article->body}} </p>
            
            </div>
      
       
    </div>
</div>
@endsection()