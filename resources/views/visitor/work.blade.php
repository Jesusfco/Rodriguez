@extends('layouts.visitor')

@section('title', $work->title . ' || Rodríguez Services ') 

@section('metatags')
<meta property="og:url"                content="{{ url('portafolio', $work->id)}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ $work->title }}" />
<meta property="og:description"        content="{{ $work->resume }}" />
<meta property="og:image"              content="{{ url('img/app/works/' . $work->id . '/' . $work->img) }}" />
@endsection

@section('css')     
    <link href="{{ url('css/visitor/work.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navPadding topImgContainer pc">
    <div class="img-background"
    style="background-image: url({{ url('img/app/works/' . $work->id . '/' . $work->img)}})"></div>
</div>

<div class="navSpace mov" ></div>
<img class="pincipalMovImg mov" width="100%" src="{{ url('img/app/works/' . $work->id . '/' . $work->img) }}">

<div class="principal-inf">
    <div class="container">
        <div class="principalImgContainer pc">
            <img class="principalImg" src="{{ url('img/app/works/' . $work->id . '/' . $work->img)}}">
        </div>
        <h1>{{ $work->title}}</h1>
        
        <p class="resume">"{{ $work->resume}}"</p>
        <div>{!! $work->description !!}</div>
    </div>
</div>

@endsection

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        