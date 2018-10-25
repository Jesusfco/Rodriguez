@extends('layouts.visitor')

@section('title', 'Rodríguez Services || Quien Soy') 

@section('css')     
    <link href="{{ url('css/visitor/quien.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="navPadding principalImg">

    <div class="img-background" style=" background-image: url('{{ url('img/quien/5.jpg') }}') ">

        <div>
            <h1>Francisco Rodriguez</h1>
            <p class="colorLink">Desarrollador de software, fotografo, camarografo, traceur.</p>
        </div>

    </div>

</div>

<div class="container quien1">
    <p class="navegation"><a href="{{ url('/') }}">Inicio</a> >> Quien Soy </p>
    <h3>Soy Francisco Rodríguez</h3>
    <img class="avatar" src="{{ url('img/quien/pp.jpg') }}">
    <p>Hola mi nombre es Francisco Rodríguez, actualmente trabajo como desarrollador de software en varias empresas de manera externa otorgando mantenimiento s los sistemas, creándolos y expandió.</p>
    <p>Encontré en el software una enorme pasión por el código debido a la capacidad de creación que este puede llegar a tener a dedos de una persona capacitada.</p>
    
    {{-- <p>En el año 2015 hice mi primer contacto con la programación, y desde el primer momento me encontré fascinado con mi primer programa, por fin había hecho que la computadora hiciera algo con instrucciones, funciones, la consola, la terrorífica pantalla negra que antes no entendía ahora tendría algún sentido, alguna funcionalidad, pero apenas manejaba unos cuantos datos, los guardaba en archivos de texto con mi propia lógica. Me encontraba comenzando a aprender, aunque ya preguntándome ¿Existirán mejores maneras de hacer esto? – Sí, claro que existen. Programación Orientada a Objetos, bases de datos, encriptación, control de periféricos, es un universo enorme y se sigue expandiendo.</p> --}}
</div>

<div class="quien2">
    <div class="textQuien2 pc">
        <p>En el año 2015 hice mi primer contacto con la programación, y desde el primer momento me encontré 
            fascinado, por fin había hecho que la computadora hiciera algo con instrucciones, funciones, la consola, la terrorífica pantalla negra ahora tendría alguna funcionalidad, pero apenas manejaba unos cuantos datos, los guardaba en archivos de texto con mi propia lógica.

            </p>
    </div>
    <div>
        <img src="img/quien/4.jpg">
    </div>

    <div class="textQuien2 mov">
            <p>En el año 2015 hice mi primer contacto con la programación, y desde el primer momento me encontré 
                fascinado, por fin había hecho que la computadora hiciera algo con instrucciones, funciones, la consola, la terrorífica pantalla negra ahora tendría alguna funcionalidad, pero apenas manejaba unos cuantos datos, los guardaba en archivos de texto con mi propia lógica.
    
                </p>
    </div>
</div>

<div class="quien1 container">
    
    <h3>Primer Trabajo</h3>
    
    <p>Mi primer trabajo fue realizar una página web, codificar el diseño que ya tenían la empresa 
        <a  target="_blank"  href="http://www.implantesdentalesgsb.com">Grupo Salud Bucal </a>
        a principios del 2016 aunque el diseño no lo solicitaron responsive (Adaptable a cualquier dispositivo).</p>
        <img class="gsb" src="img/quien/GSB.jpg">
    <p>El director de la empresa DR Juan Chávez me hizo sugerencias de las cosas que más requerían las empresas y que debería aprender, así fue como motivado emprendí la iniciativa de continuar aprendiendo bases de datos y muchos conceptos más aplicados.</p>

    <h3>Mas Skills</h3>
    <p>Previo a comenzar mis estudios en la carrera desarrollo de software, me encontraba estudiando ciencias de la comunicación por lo adquirí habilidades de diseño, edición y creación de videos, así como fotografía y todas estas habilidades en su momento se vieron nutridas ya que asesoraba a muchos de mis compañeros en los proyectos universitarios.</p>
    <p>Una prueba de mis habilidades es que soy ganador del concurso de 
        <a target="_blank" href="https://www.facebook.com/NutrisaMx/videos/muchas-felicidades-a-jes%C3%BAs-francisco-cortes-rodr%C3%ADguez-por-ganar-el-primer-lugar-/1547952981967429/">
            1 año gratis de helado con Nutrisa</a> 
            donde tenía que crear un video explicando por qué quería ganar un año de helado, con quien lo compartiría y por qué.</p>
    
    <div class="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/BFm3zM-S6B0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <br>
    <p>En ocasiones los clientes solicitan la creación de spot publicitarios o coberturas de eventos ya sea con material fotográfico o video y es un servicio que también me encuentro capacitado para otorgar. Los fines de semana trabajo cubriendo Bodas y XV.</p>
</div>

@endsection

@section('scripts')
    
@endsection
        
