@extends('layouts.visitor')

@section('title', 'Servicios || Rodríguez Services ') 

@section('css')     
    <link href="{{ url('css/visitor/blog.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navSpace"></div>
{{-- <div class="navPadding topImgContainer">
    <div class="img-background"
    style="background-image: url({{ url('img/blog/background2.jpg')}})"></div>
</div> --}}
<h1 class="title">Blog</h1>

<div class="servicios-container">

    @foreach($blogs as $blog)

    <a href="{{ url('blog', $blog->id) }}" class="servicios-piece card">
        <div class="imgCard">
            <img src="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}">
            <h3>{{ $blog->title }}</h3>
        </div>
        
        <div class="text">
            <div class=""> {{ $blog->resume }}</div>

            <div class="readMore">Leer Más</div>
        </div>
        
    </a>    

    @endforeach

    {{ $blogs->links() }}

</div>


@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>     
<script>   
    

</script>                   
    
@endsection
        