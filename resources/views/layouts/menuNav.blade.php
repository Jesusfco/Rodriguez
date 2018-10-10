<nav>
    <div class="container">
        
        <div class="logo"> 

            <a href="{{ url('/') }}">
                <img src="{{ url('img/logoNav.png') }}">
            </a>  

        </div>
        
        <div class="links">
            <a href="{{url('quien-soy')}}" class="pc">QUIEN SOY</a> 
            <a href="{{url('servicios')}}" class="pc">SERVICIOS</a>
            <a href="{{url('portafolio')}}" class="pc">PORTAFOLIO</a>
            <a class="pc">CONTACTO</a>
            <a href="{{url('blog')}}" class="pc">BLOG</a>
            <a href="{{url('login')}}" class="pc">LOGIN</a>
            <a class="pc" href="{{ url('/') }}"> <img src="{{ url('img/mex.png') }}"></a>
            <a class="pc"href="{{ url('/eng') }}"> <img src="{{ url('img/usa.png') }}"></a>

            <div id="nav-icon" class="mov">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="movMenu hidden" onclick="console.log('click en menu')">
            
            <a href="{{ url('/') }}">
                <img src="{{ url('img/logoNav.png') }}">
            </a>  
            
            <div class="movLinksContainer">
                <a href="{{url('/')}}"  class="hidden"> <i class="material-icons">home</i> INICIO</a>
                <a href="{{url('quien-soy')}}"  class="hidden"> <i class="material-icons">person</i> QUIEN SOY</a>
                <a href="{{url('servicios')}}"  class="hidden"> <i class="material-icons">build</i> SERVICIOS</a>
                <a href="{{url('portafolio')}}"  class="hidden"> <i class="material-icons">folder_special</i> PORTAFOLIO</a>
                <a href="{{url('blog')}}"  class="hidden"> <i class="material-icons">terrain</i> Blog</a>
                <a class="hidden"> <i class="material-icons">message</i> CONTACTO</a>
                <a href="{{url('login')}}"  class="hidden"> <i class="material-icons">account_circle</i> LOGIN</a>
            </div>   
            
            <div class="lenguage">
                <a href="{{ url('/') }}"> <img src="{{ url('img/mex.png') }}"></a>
                <a href="{{ url('/eng') }}"> <img src="{{ url('img/usa.png') }}"></a>
            </div>
        </div>        
    </div>
</nav>

<div id="menuTarget" 
    ontouchstart="menuTargetStart(event)"
    ontouchmove="menuTargetMove(event)"
    ontouchend="menuTargetEnd(event)"></div>




