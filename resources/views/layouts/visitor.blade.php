<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta property="fb:app_id"              content="142501176704826" />
        @yield('metatags')

        <title>@yield('title')</title>

        <!-- CSS -->
        <link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/loader.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/menu.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/alert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        
        @yield('css')        
   
        
        <!-- Fonts -->      
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:100i,300,400,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">         
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126687664-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126687664-1');
        </script>

        
    </head>
    <body> 

        @if(Session::get('visited') == 1)
            @include('layouts.loader')
        @endif   

        @include('layouts.menuNav')

        @yield('content')

        <script src="//code.jquery.com/jquery.min.js"></script>
        <!-- <script src="{{ url('js/jquery-2.1.1.min.js') }}"></script> -->
        <script src="{{ url('js/loader.js') }}"></script>
        <script src="{{ url('js/menu.js') }}"></script>

        @yield('scripts')
       
    </body>
</html>