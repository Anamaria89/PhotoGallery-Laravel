@extends('layouts.app')

@section('content')
    <div class="col">
    <h1>{{$album->name}}</h1>
    <a class='btn btn-secondary' href='/'>Go Back</a>
    <a class='btn btn-info' href='/photos/create/{{$album->id}}'>Upload Photo To Album</a>
    </div>
    <br>
    @if(count($album->photos) > 0)
    <?php 
        $colcount = count($album->photos);
        $i = 1;
        ?>
   
    <div class="col" id='photos'>
        <div class="row text-center">
        @foreach($album->photos as $photo)
            @if($i == $colcount)
            <div class='col-md-4'>
                <a href='/photos/{{$photo->id}}'>
                    <img class='thumbnail' src='/storage/photos/{{$photo->album_id}}/{{$photo->photo}}'>
                </a>
                <br>
                <h4>{{$photo->title}}</h4>
            @else
            <div class='col-md-4'>
                 <a href='/photos/{{$photo->id}}'>
                     <img class='thumbnail' src='/storage/photos/{{$photo->album_id}}/{{$photo->photo}}'>
                       
                </a>
                <br>
                <h4>{{$photo->title}}</h4>
            @endif
           @if($i % 3 == 0)
            </div></div><div>
            @else
            </div>
            @endif
            <?php $i++; ?>
        @endforeach
        </div>
      </div>
      @else
      <div class="col">
      <p>No Photos To Display</p>
      </div>
      @endif
@endsection