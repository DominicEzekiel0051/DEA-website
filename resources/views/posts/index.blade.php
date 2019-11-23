@extends('layouts.app')
@section('content')
     <head><h1>Agro Education</h1></head>

     @if(count($posts)>0)
          @foreach ($posts as $post)
              <div class="well">
              <h3> <a href="/posts/{{$post->id}}">{{$post->title}} </a></h3>
              <small>Written on {{$post->created_at}}</small>
              </div>

              
          @endforeach

          <div class="btn btn-warning">
            <a href="/posts/create">Add new post</a>
          </div>
        
     @else

     <h5>Oooops!! Sorry, no posts yet...</h5>

     @endif
     
@endsection