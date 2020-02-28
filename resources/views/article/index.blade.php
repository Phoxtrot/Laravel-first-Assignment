@extends('./layout')
@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Latest Articles</h2>                
               <ul class="style1">
            	@foreach ($articles as $article)
                <li class="first">
                    <a href="articles/{{$article->id}}"><p><strong>{{$article->title}}</strong></p></a>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$article->excerpt}}</p>
                </li>
                @endforeach                
            </ul>
            </div>
        </div>
    </div>
</div>
@endsection()