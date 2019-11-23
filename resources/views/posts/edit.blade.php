@extends('layouts.app')

@section('content')


      <h2><?php echo 'Edit Form'?></h2>
      
      <!--the form code to open and close the form-->

      {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
      <!--the form code for the TITLE-->
           <div class="form-group">

               {{Form::label('title', 'TiTle')}}
               {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

           </div>

      <!--the form code for the IMAGE/VIDEO/AUDIO
           <div>

           </div>
      -->

      <!--the form code for the BODY/TEXTAREA-->
           <div>

            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->title, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'] )}}

           </div>

           {{Form::hidden('_method','PUT')}}

           {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      
      {!! Form::close() !!}

@endsection