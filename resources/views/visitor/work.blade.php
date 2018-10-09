@extends('layouts.visitor')

@section('title', 'Portafolio || Rodríguez Services ') 

@section('css')     
    <link href="{{ url('css/visitor/work.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="letter">
        <h2>{{ $work->title}}</h2>
        <img src="{{ url('img/app/works/' . $work->id . '/' . $work->img)}})">
        <p>{{ $work->resume}}</p>
        <div>{!! $work->description !!}</div>
    </div>

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        