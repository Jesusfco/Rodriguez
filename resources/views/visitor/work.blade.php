@extends('layouts.visitor')

@section('title', $work->name . ' || Rodríguez Services ') 

@section('css')     
    <link href="{{ url('css/visitor/work.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navPadding topImgContainer">
    <div class="img-background"
    style="background-image: url({{ url('img/app/works/' . $work->id . '/' . $work->img)}})"></div>
</div>

<div class="principal-inf">
    <div class="container">
        <div class="principalImgContainer">
            <img class="principalImg" src="{{ url('img/app/works/' . $work->id . '/' . $work->img)}}">
        </div>
        <h1>{{ $work->title}}</h1>
        
        <p>{{ $work->resume}}</p>
        <div>{!! $work->description !!}</div>
    </div>
</div>

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        