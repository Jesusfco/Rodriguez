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
        
        <div class="enterprise-slider">
            <div class="enterprise-slider-container">
                <div><img src="img/index/enterprise-logo1.png"></div>
                <div><img src="img/index/enterprise-logo2.png"></div>
                <div><img src="img/index/enterprise-logo3.png"></div>
                <div><img src="img/index/enterprise-logo8.png"></div>
                <div><img src="img/index/enterprise-logo4.png"></div>
                <div><img src="img/index/enterprise-logo5.png"></div>
                <div><img src="img/index/enterprise-logo6.png"></div>
                <div><img src="img/index/enterprise-logo7.png"></div>
                
                <div><img src="img/index/enterprise-logo9.png"></div>
                <div><img src="img/index/enterprise-logo10.png"></div>
                <!-- <div><img src="img/index/enterprise-logo11.png"></div>                 -->
            </div>
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

        <div class="parallax1" style="background-image: url(img/index/parallax1.jpg)">  
        </div>

        <div class="proyects">

            <h1>Trabajos Destacados</h1>

            <div class="proyects-container">

                <div class="proyects-piece">
                    <div>
                        <h3>Amerigas</h3>
                        <p>Desarrollo de pagina y aplicación web Amerigas 
                        enfocada a la administración de ventas y proveedores
                        de productos quimicos.</p>
                    </div>
                    <div>
                        <img src="img/index/destacados1.jpg">
                    </div>
                </div>

                <div class="proyects-piece">                
                    <div>
                        <img src="img/index/destacados2.jpg">
                    </div>
                    <div>
                        <h3>Wolosky Gym</h3>
                        <p>Desarrollo de pagina y aplicacion web de escritorio enfocada a la administración de pagos de alumnos y profesores mediante el acceso con sistema biometrico</p>
                    </div>
                </div>

                <div class="proyects-piece">
                    <div>
                        <h3>RESIDENCIAL CHULAVISTA</h3>
                        <p>Desarrollo de pagina y aplicación web Residencial Chulavista enfocada a la administracion de contratos de venta y pagos de casa de un fraccionamiento. 
                        </p>
                    </div>
                    <div>
                        <img src="img/index/destacados3.jpg">
                    </div>
                </div>

                <div class="proyects-piece">
                    
                    <div>
                        <img src="img/index/destacados4.jpg">
                    </div>
                    <div>
                        <h3>GRUPO RUILO</h3>
                        <p>Aplicación web enfocada a la administración de tareas a trabajadores mediante una interfaz estilo proveedor de correo, diseñado para generar bitacoras de progreso segun las nuevas entradas de los empleados por la tarea asignada.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ url('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ url('js/menu.js') }}"></script>
        <script src="{{ url('js/parralax-image.js') }}"></script>
        <script src="js/slider-logos-enterprise.js"></script>
    </body> 
</html>
