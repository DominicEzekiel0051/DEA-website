@extends('layouts.app')
@section('content')
        
        <h4>{{$post->title}}</h4>
        <div>
            {!!$post->body!!}
        </div>

        <a href="/posts" class="btn btn-primary">Go back</a>

        <a href="/posts/{{$post->id}}/edit" class="btb btn-primary">Edit Post</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

        {!!Form::close()!!}

        <hr>
        <small>Written on {{$post->created_at}}</small>

@endsection