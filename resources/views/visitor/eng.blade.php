@extends('layouts.visitorEng')

@section('title', 'Rodríguez Services || Home') 

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

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/1.jpg') }}') ">
                        <div>
                            <h3>IN LOVE WITH THE CODE</h3>
                            <a class="linea"></a>
                            <p>Software development offers the power to create only by needing a computer</p>
                            
                        </div>
                    </div>

                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/2.jpg') }}') ">

                        <div>
                            <h3>IDEOLOGY</h3>
                            <a class="linea"></a>
                            <p>The goals of my professional career are summarized in the philosophy of constant development and progress (KAIZEN)</p>
                            <a></a>
                        </div>

                    </div>

                    
                    <div class="slider-piece centrar" style=" background-image: url('{{ url('img/index/4.jpg') }}') ">

                        <div>
                            <h3>COLLABORATIVE WORK</h3>
                            <a class="linea"></a>
                            <p>Next application development with a focus on behavioral processes.</p>
                            
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

                    <h1>I'M <br> FRANCISCO RODRIGUEZ</h1>
                    <img class="mov" width="100%" src="{{ url('img/index/quien.jpg') }}">
                    <BR>
                    <p>I found in software development a passion for creation through 
                    of the code, always feeling thirsty to know more.
                        <br><br>
                        I believe that the world of programming is constantly evolving 
                        and expansion so it's important for me to update myself continuously.
                    </p>

                    <div>LEER MAS...</div>

                </div>

                <div class="img pc img-background" style="background-image: url({{ url('img/index/quien.jpg') }})"></div>
            </div>

            <h2 class="title">PROGRAMS SKILLS</h2>

           

            


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

            <h2 class="title">PROGRAMMING LANGUAGES</h2>

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
                <a class="btn" href="CV_RODRIGUEZ_2018_ENG.pdf">
                DOWNLOAD CV
                <span class='line-1'></span>
                    <span class='line-2'></span>
                    <span class='line-3'></span>
                    <span class='line-4'></span>
                </a>    
            </div> 

            

        </div>    

        
            
        </div>
                

        <div class="servicios">

            <h1>SERVICES</h1>

            <div class="servicios-container">

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <img src="img/index/servicio1.jpg">
                        <h3>SOFTWARE</h3>
                    </div>
                    
                    
                    <div class="pc"> Software services are divided into various branches such as the creation of web pages (static / dynamic),
                         desktop applications, mobile applications or web applications</div>
                </div>    

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>MULTIMEDIA</h3>
                        <img src="img/index/servicio2.jpg">
                    </div>
                        
                    <div class="pc"> 
                        The multimedia services contains different variant as the creation
                         of commercials, creation of animations or coverage of events.
                    </div>

                </div>    

                <div class="servicios-piece card hidden">
                    <div class="imgCard">
                        <h3>PHOTOGRAPHY</h3>
                        <img src="img/index/servicio3.jpg">
                    </div>    
                    <div class="pc"> 
                        Photography services cover different aspects such as event coverage (XV, WEDDINGS, BIRTHDAYS, ETC),
                        or photo sessions working collaboratively with <a href="http://www.lilianapineda.com/">Liliana Pineda</a>
                    </div>
                </div>    

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
            <h1 text-align="center">FEATURED WORKS</h1>
            <img class="backgr" alt="" data-type="image" src="img/index/timeline.webp" >

            <div class="timeline">
            
              
                  <div class="container left">
                    <div class="content card hidden">

                        <div>
                            <h3>AMERIGAS</h3>
                            <img src="img/index/destacados1.jpg">
                        </div>       

                        <p> Developt of Web Page and Web App focused on sales and supplier managemente
                            of chemical products. Clients can access to their receiptments
                        </p>

                    </div>
                  </div>

                  <div class="container right">
                    <div class="content card hidden ">

                        <div>
                            <h3>WOLOSKY GYM</h3>
                            <img src="img/index/destacados2.jpg">
                        </div>
                            
                        <p>Development of page and web app focus on the administration of the gym and
                            development of a desktop application for have  access to the gym with a biometric system.
                        </p>

                    </div>
                  </div>

                  <div class="container left">
                    <div class="content card hidden">

                        <div>
                            <h3>RESIDENCIAL CHULAVISTA</h3>
                            <img src="img/index/destacados3.jpg">
                        </div>
                            
                        <p> Development of page and web app from the company "Residencial Chulavista", focus on the administration
                            of sale contract and payments of houses of the residential.                        
                        </p>

                    </div>
                  </div>

                  <div class="container right">
                    <div class="content card hidden">

                        <div>
                            <h3>GRUPO RUILO</h3>
                            <img src="img/index/destacados4.jpg">
                        </div>    
                        <p> Web App focus on the administration of task to workers, with a interface
                            with the style of a mail provider, designed for make progress bitacoras
                            with every input from the workers.                        
                        </p>

                    </div>
                  </div>
                  
                </div> <!-- //timeline -->
            </div> <!-- TIMELINE CONTAINER -->    

            <div class="contact">

                <div class="formContact card hidden">
                <div class="progressBar hidden"></div>

                    <div class="information">
                        <h1>Contact</h1>
                        <p>Do you have a proyect in your mind? 
                            <br><br>- Contact me! I am going to help you to make it just send me a message or call me.
                            We can take a coffe or make a video call and talk about your bussiness
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
                            <input type="text" name="name" placeholder="Name *" required>
                            <input type="email" name="mail" placeholder="Email *" required>
                            

                            <textarea name="text" placeholder="Message" required></textarea>

                            <button>Send Message  <i class="material-icons">send</i></button>
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
        

