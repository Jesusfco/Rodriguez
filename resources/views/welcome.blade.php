<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"> -->

        <title>Rodríguez Services</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/menu.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/index.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    

        
    </head>
    <body>
        
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

        <nav>
            <div class="container">
                
                <div class="logo"> 
                    <img src="{{ url('img/logoNav.png') }}">
                </div>
                
                <div class="links">
                    <a>QUIEN SOY</a> 
                    <a>SERVICIOS</a>
                    <a>PORTAFOLIO</a>
                    <a>CONTACTO</a>
                </div>
            </div>
        </nav>

        <div class="slider">
            <div class="slider-container">
                <div class="img-container">
                    <div class="slider-piece" style=" background-image: url('{{ url('img/index/1.jpg') }}') "></div>
                </div>
                <div class="indicators left"><</div>
                <div class="indicators right">></div>

            </div>

            <div class="slider-circles">
                <div class="active"></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>

        <div class="quien">
            <div class="quien-container">
                <div class="text">

                    <h1>SOY <br> FRANCISCO RODRÍGUEZ</h1>
                    <p>Encontre en el desarrollo de software una pasión por la creación a traves
                        del código, siempre sintiéndome sediento de conocer más.
                        <br><br>
                        Considero que el mundo de la programación se encuentra en constante evolución
                        y expansion por lo que para mí es importante actualizarme continuamente.
                    </p>
                    <div>LEER MAS...</div>

                </div>
                <div class="img">
                    <img src="{{ url('img/index/quien.jpg') }}">
                </div>
            </div>
        </div>
        
        <div class="parallax1" style="background-image: url(img/index/parallax1.jpg)">
            
        </div>

        <div class="servicios">

            <h1>SERVICIOS</h1>

            <div class="servicios-container">

                <div class="servicios-piece">
                    <h3>SOFTWARE</h3>
                    <img src="img/index/servicio1.jpg">
                    <div> VER MÁS </div>
                </div>    

                <div class="servicios-piece">
                    <h3>VIDEO</h3>
                    <img src="img/index/servicio2.jpg">
                    <div> VER MÁS </div>
                </div>    

                <div class="servicios-piece">
                    <h3>FOTOGRAFÍA</h3>
                    <img src="img/index/servicio3.jpg">
                    <div> VER MÁS </div>
                </div>    

            </div>        

        </div>      

        
        
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ url('js/menu.js') }}"></script>
        <script src="{{ url('js/parralax-image.js') }}"></script>
    </body> 
</html>
