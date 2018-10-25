@extends('layouts.visitor')

@section('title', 'Rodríguez Services || Home') 

@section('metatags')
<meta property="og:url"                content="{{ url('/')}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Rodriguez Services || Code Master" />
<meta property="og:description"        content="Rodriguez Services somos empresa dedicada a brindar distintos tipos de servicios y soluciones a empresas, Software a medida, Videos, Animación y Fotografía" />
<meta property="og:image"              content="{{ url('img/index/link.jpg') }}" />
@endsection

@section('css')     
    <link href="{{ url('css/index.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

        <div class="slider">

            <div class="slider-container">

                <div class="img-container" 
                    ontouchstart="sliderIndexTouchStart(event)"
                    ontouchmove="sliderIndexTouchMove(event)"
                    ontouchend="sliderIndexTouchEnd(event)">

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/5.jpg') }}') ">
                        <div>
                            <h3>APASIONADO POR EL CÓDIGO</h3>
                            <a class="linea"></a>
                            <p>El desarrollo de software ofrece el poder de crear únicamente necesitando un computador</p>
                            
                        </div>
                    </div>

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/4.jpg') }}') ">

                        <div>
                            <h3>TRABAJO COLABORATIVO</h3>
                            <a class="linea"></a>
                            <p>Próximo desarrollo de aplicación con enfoque en procesos conductuales.</p>
                            
                        </div>

                    </div>

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/1.jpg') }}') ">

                        <div>
                            <h3>Ideología</h3>
                            <a class="linea"></a>
                            <p>Las metas de mi carrera profesional se resumen en la filosofía de un desarrollo y progreso constante (KAIZEN)</p>
                            <a></a>
                        </div>

                    </div>                                       

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/6.jpg') }}') ">
                    
                        <div>
                            <h3>FILOSOFÍA KAIZEN</h3>
                            <a class="linea"></a>
                            <p>No compito contra nadie, mas que contra mi mismo, el mejoramiento constante es el unico camino.</p>                                
                        </div>

                    </div>

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

                    <h1> FRANCISCO RODRÍGUEZ</h1>
                    <img class="mov" width="100%" style="margin-bottom: 15px;" src="{{ url('img/index/quien2.jpg') }}">
                    
                    <p>Encontré en el desarrollo de software una pasión por la creación a través
                        del código, siempre sintiéndome sediento de conocer más.
                        <br><br>
                        Considero que el mundo de la programación se encuentra en constante evolución
                        y expansión por lo que para mí es importante actualizarme continuamente.
                    </p>
                    <br>
                    <p><a href="quien-soy">LEER MAS...</a></p>

                </div>

                <div class="img pc img-background" style="background-image: url({{ url('img/index/quien2.jpg') }})"></div>
            </div>

            <h2 class="title">Dominio de programas</h2>

           

            


            <div class="programHability">
                
                <div class="programDiv hidden">
                    <canvas id="cav1"></canvas>
                    <p>ILLUSTRATOR</p>
                </div>    

                <div class="programDiv hidden">
                    <canvas id="cav2"></canvas>
                    <p>PHOTOSHOP</p>
                </div> 

                <div class="programDiv hidden">
                    <canvas id="cav3"></canvas>
                    <p>PREMIER</p>
                </div> 

                <div class="programDiv hidden">
                    <canvas id="cav4"></canvas>
                    <p>AFTER EFFECTS</p>
                </div> 

            </div>

            <h2 class="title">Lenguajes de programación</h2>

            <div class="codeHability">
                <div>
                    <h5>HTML & CSS</h5>
                    <canvas id="html"></canvas>
                </div>

                <div>
                    <h5>Javascript</h5>
                    <canvas id="js"></canvas>
                </div>

                <div>
                    <h5>PHP</h5>
                    <canvas id="php"></canvas>
                </div>

                <div>
                    <h5>Java</h5>
                    <canvas id="java"></canvas>
                </div>

                <div>
                    <h5>Python</h5>
                    <canvas id="python"></canvas>
                </div>
            </div>

            <div class="btnCV">
                <a class="btn" href="CV_RODRIGUEZ_2018.pdf">
                DESCARGAR CV
                <span class='line-1'></span>
                    <span class='line-2'></span>
                    <span class='line-3'></span>
                    <span class='line-4'></span>
                </a>    
            </div> 

            

        </div>    

        
            
        </div>
                

        <div class="servicios">

            <a class="title" href="servicios"><h1>SERVICIOS</h1></a>

            <div class="servicios-container">

                <a href="servicios/SOFTWARE" class="servicios-piece card hidden">
                    <div class="imgCard">
                        <img src="img/index/servicio1.jpg">
                        <h3>SOFTWARE</h3>
                    </div>
                                        
                    <div class="pc"> Los servicios de software se divide en diversas ramas como la creación de páginas web (estaticas/ dinamicas), 
                        aplicaciones de escritorio, aplicaciones moviles o aplicaciones web</div>
                </a>    

                <a href="servicios/MULTIMEDIA" class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>MULTIMEDIA</h3>
                        <img src="img/index/servicio2.jpg">
                    </div>
                        
                    <div class="pc"> 
                        Los servicios de multimedia contiene diferentes variante como la creación 
                        de comerciales, creación de animaciones o coberturas de eventos.
                    </div>

                </a>    

                <a href="servicios/FOTOGRAFÍA" class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>FOTOGRAFÍA</h3>
                        <img src="img/index/servicio3.jpg">
                    </div>    
                    <div class="pc"> 
                        Los servicios de fotografía abarcan distintos aspectos como cobertura de eventos (XV, BODAS, CUMPLEAÑOS, ETC),
                         o sesiones fotograficas trabajando colaborativamente con Liliana Pineda
                    </div>
                </a>    

            </div>        

        </div>      

        <div class="enterprise-slider">
            <div class="enterprise-slider-container"
                ontouchstart="sliderTouchStart(event)"
                ontouchmove="sliderTouchMove(event)"
                ontouchend="sliderTouchEnd(event)">
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
            
              
                  <div class="containerT left">
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

                  <div class="containerT right">
                    <div class="content card hidden ">

                        <div>
                            <h3>WOLOSKY GYM</h3>
                            <img src="img/index/destacados2.jpg">
                        </div>
                            
                        <p>Desarrollo de página y aplicación web de escritorio enfocada a la 
                            administración de pagos de alumnos y profesores mediante el acceso con sistema biométrico</p>

                    </div>
                  </div>

                  <div class="containerT left">
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

                  <div class="containerT right">
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
                <div class="progressBar hidden"></div>

                    <div class="information">
                        <h1>Contacto</h1>
                        <p>¿Tienes algun proyecto en mente? 
                            <br><br>- ¡Contáctame!, te ayudare a realizarlo 
                            solo mándame un mensaje o llámame. Podemos 
                            ir por un café o realizar una videollamada y conversar sobre tu negocio.
                        </p>
                        <a href="tel:+5219611221222"> 
                            <i class="material-icons">local_phone</i> 
                                +52 1 961-122-1222</a>
                        <br><br>
                        <a href="mailto:contact@roguezservices.com">
                            <i class="material-icons">mail</i> 
                             contact@roguezservices.com</a>
                    </div>

                    <div style="position: relative">
                        <div class="loaderMail hidden">
                            <div class="spinner"></div>
                        </div>
                        <form action="mail" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="name" placeholder="Nombre *" required>
                            <input type="email" name="mail" placeholder="Correo *" required>
                            

                            <textarea name="text" placeholder="Mensaje" required></textarea>

                            <button>Enviar mensaje  <i class="material-icons">send</i></button>
                        </form>
                    </div>
                </div>

                <img class="backgr" alt="" data-type="image" src="img/index/contact.webp" >


            </div>

            <div class="alert-container centrar hidden">
                <div class="alert">
                    <h1></h1>
                    <p></p>
                </div>
            </div>

@endsection
@section('scripts')
    <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>                        
    <script src="{{ url('js/index/skillPrograms.js') }}"></script>
    <script src="{{ url('js/index/waypoints.js') }}"></script>
    <script src="{{ url('js/index/sliderIndex.js') }}"></script>        
    <script src="{{ url('js/index/mail.js') }}"></script>
    <script src="{{ url('js/index/parralax-image.js') }}"></script>
    <script src="js/index/slider-logos-enterprise.js"></script>
@endsection
        

