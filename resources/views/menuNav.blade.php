<nav>
    <div class="container">
        
        <div class="logo"> 
            <img src="{{ url('img/logoNav.png') }}">
        </div>
        
        <div class="links">
            <a class="pc">QUIEN SOY</a> 
            <a class="pc">SERVICIOS</a>
            <a class="pc">PORTAFOLIO</a>
            <a class="pc">CONTACTO</a>
            <a class="pc">LOGIN</a>
            <a class="pc"> <img src="{{ url('img/mex.png') }}"></a>
            <a class="pc"> <img src="{{ url('img/usa.png') }}"></a>

            <div id="nav-icon" class="mov">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="movMenu hidden">
            <img src="{{ url('img/logoNav.png') }}">
            <ul>
                <li class="hidden"> <i class="material-icons">home</i> INICIO</li>
                <li class="hidden"> <i class="material-icons">person</i> QUIEN SOY</li>
                <li class="hidden"> <i class="material-icons">build</i> SERVICIOS</li>
                <li class="hidden"> <i class="material-icons">folder_special</i> PORTAFOLIO</li>
                <li class="hidden"> <i class="material-icons">message</i> CONTACTO</li>
                <li class="hidden"> <i class="material-icons">account_circle</i> LOGIN</li>
            </ul>   
            
            <div class="lenguage">
                <a> <img src="{{ url('img/mex.png') }}"></a>
                <a> <img src="{{ url('img/usa.png') }}"></a>
            </div>
        </div>        
    </div>
</nav>

<div id="menuTarget" 
    ontouchstart="menuTargetStart(event)"
    ontouchmove="menuTargetMove(event)"
    ontouchend="menuTargetEnd(event)"></div>




