@extends('layouts.visitor')

@section('title', 'Servicios || Rodríguez Services ') 

@section('css')     
    <link href="{{ url('css/visitor/services.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navPadding topImgContainer">
    <div class="img-background"
    style="background-image: url({{ url('img/services/background.jpg')}})"></div>
</div>
<h1 class="title">Servicios</h1>

<div class="servicios-container">

    @foreach($services as $service)

    <a href="{{ url('servicios', $service->name) }}" class="servicios-piece card hidden">
            <div class="imgCard">
                <img src="{{ url('img/app/services', $service->img) }}">
                <h3>{{ $service->name }}</h3>
            </div>
            
            
            <div class="pc"> {{ $service->resume }}</div>
        </a>    

    @endforeach

</div>

@endsection

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>     
<script>

    setTimeout(() => {
        $('.servicios-piece:nth-child(1)').removeClass('hidden');
        $('.servicios-piece:nth-child(2)').removeClass('hidden');
        $('.servicios-piece:nth-child(3)').removeClass('hidden');
    }, 1200);
    

</script>                   
    
@endsection
        