@extends('layouts.visitor')

@section('title', $blog->title . ' || Rodríguez Services ') 

@section('metatags')
<meta property="og:url"                content="{{ url('blog', $blog->id)}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ $blog->title }}" />
<meta property="og:description"        content="{{ $blog->resume }}" />
<meta property="og:image"              content="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}" />
@endsection

@section('css')     
    <link href="{{ url('css/visitor/work.css') }}" type="text/css" rel="stylesheet" media="screen,projection">     

@endsection    
               
@section('content')

<div class="navPadding topImgContainer pc">
    <div class="img-background"
    style="background-image: url({{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }})"></div>
</div>
<div class="navSpace mov" ></div>
<img class="pincipalMovImg mov" width="100%" src="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}">

<div class="principal-inf">
    <div class="container">
        <div class="principalImgContainer  pc">
            <img class="principalImg" src="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}">
        </div>
        <h1>{{ $blog->title }}</h1>
        
        <p class="resume">{{ $blog->resume}}</p>
        <div>{!! $blog->description !!}</div>
    </div>
</div>

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        