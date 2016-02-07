@extends('layouts.layout')
    
@section('content')
    <ul>
    @foreach ($songs as $song)
        <li><a href="/songs/{{$song->id_song}}">{{$song->name}}</a> -- {{$song->name_viet}}</li>
    @endforeach
    </ul>
@stop
