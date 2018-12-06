@extends('layouts.app')
    
@section('content')
    <div class="col">
    <h3>Create Album</h3>
    </div>
    <div class="col-md-4">
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::text('name','',['placeholder' => 'Album Name']) }}
        {{ Form::text('description','',['placeholder' => 'Album description']) }}
        {{ Form::file('cover_image') }}
        {{ Form::submit('Submit') }}
    {!! Form::close() !!}
    </div>
@endsection

