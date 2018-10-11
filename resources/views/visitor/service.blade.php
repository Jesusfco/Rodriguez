@extends('layouts.visitor')

@section('title', $service->name . ' || Rodríguez Services ') 

@section('metatags')
<meta property="og:url"                content="{{ url('servicios', $service->id)}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ $service->name }}" />
<meta property="og:description"        content="{{ $service->resume }}" />
<meta property="og:image"              content="{{ url('img/app/services/', $service->img) }}" />
@endsection

@section('css')     
    <link href="{{ url('css/visitor/work.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navPadding topImgContainer pc">
    <div class="img-background"
    style="background-image: url({{ url('img/app/services', $service->img)}})"></div>
</div>
<div class="navSpace mov" ></div>
<img class="pincipalMovImg mov" width="100%" src="{{ url('img/app/services', $service->img)}}">

<div class="principal-inf">
    <div class="container">
        <div class="principalImgContainer  pc">
            <img class="principalImg" src="{{ url('img/app/services', $service->img)}}">
        </div>
        <h1>SERVICIO {{ $service->name}}</h1>
        
        <p>{{ $service->resume}}</p>
        <div>{!! $service->description !!}</div>
    </div>
</div>

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        