<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"> -->

        <title>Rodríguez Services</title>

        <!-- CSS -->
        <link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/loader.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/menu.css') }}" type="text/css" rel="stylesheet" media="screen,projection">    
        <link href="{{ url('css/index.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
        
        <!-- Fonts -->      
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:100i,300,400,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        

           

        
    </head>
    <body>
        
        @if(!$visited)
            @include('loader')
         @endif   
        @include('menuNav')

        <div class="slider">

            <div class="slider-container">

                <div class="img-container">

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/1.jpg') }}') ">
                        <div>
                            <h3>Apasionado por el Código</h3>
                            <a class="linea"></a>
                            <p>El desarrollo de software ofrece el poder de crear únicamente necesitando un computador</p>
                            
                        </div>
                    </div>

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/2.jpg') }}') ">

                        <div>
                            <h3>Ideología</h3>
                            <a class="linea"></a>
                            <p>Las metas de mi carrera profesional se resumen en la filosofía de un desarrollo y progreso constante (KAIZEN)</p>
                            <a></a>
                        </div>

                    </div>

                    
                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/4.jpg') }}') ">

                        <div>
                            <h3>TRABAJO COLABORATIVO</h3>
                            <a class="linea"></a>
                            <p>Próximo desarrollo de aplicación con enfoque en procesos conductuales.</p>
                            
                        </div>

                    </div>

                    <div class="slider-piece" style=" background-image: url('{{ url('img/index/3.jpg') }}') "></div>

                </div>
                <div class="indicators left" onclick="sliderBefore()"><i class="material-icons" >keyboard_arrow_left</i></div>
                <div class="indicators right" onclick="sliderNext()"><i class="material-icons">keyboard_arrow_right</i></div>

            </div>

            <div class="slider-circles">
                
            </div>

        </div>

        <div class="quien">
            <div class="quien-container card">

                <div class="text">

                    <h1>SOY <br> FRANCISCO RODRÍGUEZ</h1>
                    <img class="mov" width="100%" src="{{ url('img/index/quien.jpg') }}">
                    <p>Encontré en el desarrollo de software una pasión por la creación a través
                        del código, siempre sintiéndome sediento de conocer más.
                        <br><br>
                        Considero que el mundo de la programación se encuentra en constante evolución
                        y expansión por lo que para mí es importante actualizarme continuamente.
                    </p>
                    <!-- <div>LEER MAS...</div> -->

                </div>

                <div class="img pc img-background" style="background-image: url({{ url('img/index/quien.jpg') }})"></div>
            </div>
        </div>
                

        <div class="servicios">

            <h1>SERVICIOS</h1>

            <div class="servicios-container">

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <img src="img/index/servicio1.jpg">
                        <h3>SOFTWARE</h3>
                    </div>
                    
                    
                    <div class="pc"> Los servicios de software se divide en diversas ramas como la creación de páginas web (estaticas/ dinamicas), 
                        aplicaciones de escritorio, aplicaciones moviles o aplicaciones web</div>
                </div>    

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>MULTIMEDIA</h3>
                        <img src="img/index/servicio2.jpg">
                    </div>
                        
                    <div class="pc"> 
                        Los servicios de multimedia contiene diferentes variante como la creación 
                        de comerciales, creación de animaciones o coberturas de eventos.
                    </div>

                </div>    

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>FOTOGRAFÍA</h3>
                        <img src="img/index/servicio3.jpg">
                    </div>    
                    <div class="pc"> 
                        Los servicios de fotografía abarcan distintos aspectos como cobertura de eventos (XV, BODAS, CUMPLEAÑOS, ETC),
                         o sesiones fotograficas trabajando colaborativamente con <a href="http://www.lilianapineda.com/">Liliana Pineda</a>
                    </div>
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

        <!-- <div class="parallax1" style="background-image: url(img/index/parallax1.jpg)">  
        </div>
 -->
        

        <div class="timelineContainer">
            <h1 text-align="center">TRABAJOS DESTACADOS</h1>
            <img class="backgr" alt="" data-type="image" src="img/index/timeline.webp" >

            <div class="timeline">
            
              
                  <div class="container left">
                    <div class="content card hidden">

                        <div>
                            <h3>AMERIGAS</h3>
                            <img src="img/index/destacados1.jpg">
                        </div>       

                        <p>Desarrollo de página y aplicación web Amerigas 
                        enfocada a la administración de ventas y proveedores
                        de productos químicos.</p>

                    </div>
                  </div>

                  <div class="container right">
                    <div class="content card hidden ">

                        <div>
                            <h3>WOLOSKY GYM</h3>
                            <img src="img/index/destacados2.jpg">
                        </div>
                            
                        <p>Desarrollo de página y aplicación web de escritorio enfocada a la 
                            administración de pagos de alumnos y profesores mediante el acceso con sistema biométrico</p>

                    </div>
                  </div>

                  <div class="container left">
                    <div class="content card hidden">

                        <div>
                            <h3>RESIDENCIAL CHULAVISTA</h3>
                            <img src="img/index/destacados3.jpg">
                        </div>
                            
                        <p>Desarrollo de página y aplicación web Residencial Chulavista enfocada a la administración de 
                            contratos de venta y pagos de casa de un fraccionamiento. 
                        </p>

                    </div>
                  </div>

                  <div class="container right">
                    <div class="content card hidden">

                        <div>
                            <h3>GRUPO RUILO</h3>
                            <img src="img/index/destacados4.jpg">
                        </div>    
                        <p>Aplicación web enfocada a la administración de tareas a trabajadores 
                            mediante una interfaz estilo proveedor de correo, diseñado para generar 
                            bitácoras de progreso según las nuevas entradas de los empleados por la tarea asignada.
                        </p>

                    </div>
                  </div>
                  
                </div> <!-- //timeline -->
            </div> <!-- TIMELINE CONTAINER -->    

            <div class="contact">

                <div class="formContact card hidden">

                    <div class="information">
                        <h1>Contacto</h1>
                        <p>¿Tienes algun proyecto en mente? 
                            <br><br>- ¡Contáctame!, te ayudare a realizarlo
                            solo mandame un mensaje o llamame. Podemos tomar ir por un cafe
                            y conversar sobre tu negocio.
                        </p>
                        <a href="tel:+5219611221222"> 
                            <i class="material-icons">local_phone</i> 
                                961-122-1222</a>
                        <br><br>
                        <a href="mailto:jfcr@live.com">
                            <i class="material-icons">mail</i> 
                             jfcr@live.com</a>
                    </div>

                    <div>
                        <form>
                            
                            <input type="text" placeholder="Nombre *">
                            <input type="mail" placeholder="Correo *">
                            

                            <textarea placeholder="Mensaje"></textarea>

                            <button>Enviar mensaje  <i class="material-icons">send</i></button>
                        </form>
                    </div>
                </div>

                <img class="backgr" alt="" data-type="image" src="img/index/contact.webp" >


            </div>
        
        <script src="{{ url('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ url('js/index/waypoints.js') }}"></script>
        <script src="{{ url('js/loader.js') }}"></script>
        <script src="{{ url('js/menu.js') }}"></script>
        <script src="{{ url('js/index/sliderIndex.js') }}"></script>
        <script src="{{ url('js/index/parralax-image.js') }}"></script>
        <script src="js/index/slider-logos-enterprise.js"></script>
    </body> 
</html>
