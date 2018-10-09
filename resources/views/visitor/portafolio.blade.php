@extends('layouts.visitor')

@section('title', 'Rodríguez Services || Home') 

@section('css')     
    <link href="{{ url('css/visitor/portafolio.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="portafolio-container">
    @foreach($works as $work)
    <a class="portafolio">
        <div class="backgrundImg" style="background-image: url({{ url('img/app/works/' . $work->id . '/' . $work->img)}})"></div>
        <div class="backgroundColor"></div>

        <div class="letter">
            <h2>{{ $work->title}}</h2>
            <p>{{ $work->description}}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection
@section('scripts')
    <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    
@endsection
        