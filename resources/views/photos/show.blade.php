@extends('layouts.app')

@section('content')
    <div class='container'>
    <h1>{{$photo->title}}</h1>
   
    
    <a class='btn btn-info' href='/albums/{{$photo->album->id}}'>Go Back To Gallery</a>
    <br><br>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}">

    <br><br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete Photo', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    <hr>
  
    <p>Size: {{$photo->size}}</p>
    </div>
@endsection