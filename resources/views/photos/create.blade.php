@extends('layouts.app')
    
@section('content')
    <div class="col-md-4">
    <h3>Upload Photo</h3>
    </div>
    <div class="col-md-4">
    {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::text('title','',['placeholder' => 'Photo Title']) }}
        {{ Form::text('description','',['placeholder' => 'Photo description']) }}
        {{ Form::hidden('album_id', $album_id)}}
        {{ Form::file('photo') }}
        {{ Form::submit('Submit') }}
    {!! Form::close() !!}
    </div>
@endsection

