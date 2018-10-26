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
    <link href="{{ url('css/visitor/galleryGeneric.css') }}" type="text/css" rel="stylesheet" media="screen,projection">     

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/gallery/css/blueimp-gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/gallery/css/blueimp-gallery-indicator.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/gallery/css/blueimp-gallery-video.css') }}">
@endsection    
               
@section('content')

<div class="navPadding topImgContainer pc">
    <div class="img-background"
    style="background-image: url({{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }})"></div>
</div>
<div class="navSpace mov" ></div>
<img class="pincipalMovImg mov" width="100%" src="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}">

<div class="principal-inf" id="app">

    <div class="container">

        <div class="principalImgContainer  pc">
            <img class="principalImg" src="{{ url('img/app/blog/' . $blog->id . '/' . $blog->img) }}">
        </div>

        <h1>{{ $blog->title }}</h1>
        
        <p class="resume">{{ $blog->resume}}</p>
        <div>{!! $blog->description !!}</div>

        <div>

            <h2>Galeria</h2>
                <input type="hidden" value="{{$blog->id}}" id="galleryId">
                <input type="hidden" value="{{url('/')}}" id="homePath">
                <input type="hidden" value="1" id="photoType">

                <div id="links" class="photoContainer">
                    <div v-for="photo in photos" class="photo">
                        <a v-bind:id="'pho-' + photo.id" class="backgroundPhoto"  v-bind:href="photo.path" data-gallery="#blueimp-gallery-links"></a>                        
                    </div>
                </div>

                <div id="blueimp-gallery" class="blueimp-gallery">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

        </div> 
        {{-- //GALLERY NOT --}}

    </div>
    {{-- #//CONTAINER --}}

</div>

@endsection

@section('scripts')
    
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>  

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
<script type="text/javascript" src="{{ asset('js/visitor/galleryGeneric.js') }}"></script>

<script src="{{ asset('assets/gallery/js/blueimp-helper.js') }}"></script>
<script src="{{ asset('assets/gallery/js/blueimp-gallery.js') }}"></script>
<script src="{{ asset('assets/gallery/js/blueimp-gallery-fullscreen.js') }}"></script>
<script src="{{ asset('assets/gallery/js/blueimp-gallery-indicator.js') }}"></script>
<script src="{{ asset('assets/gallery/js/jquery.blueimp-gallery.js') }}"></script>
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>                    
    
@endsection
        