@extends('layouts.app')

@section('content')
    @if(count($albums) > 0)
    <?php 
        $colcount = count($albums);
        $i = 1;
    ?>
    <div id='albums'>
        <div>
        @foreach($albums as $album)
            @if($i == $colcount)
            <div class='col-md-4'>
                <a href='/albums/{{$album->id}}'>
                    <img class='' src='storage/album_covers/{{$album->cover_image}}'>
                </a>
                <br>
                <h4 class='text-center'>{{$album->name}}</h4>
            @else
            <div class='col-md-4'>
                <a href='/albums/{{$album->id}}'>
                    <img class='' src='storage/album_covers/{{$album->cover_image}}'>
                </a>
                <br>
                <h4>{{$album->name}}</h4>
            @endif
            @if($i % 3 == 0)
            <div></div><div>
            @else
            <div>
            @endif
            <?php $i++; ?>
        @endforeach
        </div>
        </div>
      @else
      <p>No Albums To Display</p>
      @endif
@endsection

