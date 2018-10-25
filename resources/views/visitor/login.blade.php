@extends('layouts.visitor')

@section('title', 'Rodríguez Services || Login') 

@section('css')     
    <link href="{{ url('css/login.css') }}" type="text/css" rel="stylesheet" media="screen,projection"> 
@endsection    
               
@section('content')

<div class="cardSpace navPadding">



    <div class="loginCardModule">
        <h2 id="bienvenida">INICIA SESIÓN</h2>

        <img id="logo" src="{{url('img/logoLogin.png')}}">

        



        <div id="formSpace">

            <form (submit)="accesar()" method="POST" action="" autocomplete="on">
                
                {{ csrf_field() }}

                <input name="email" type="email" placeholder="Correo" #focus><br>

                <input  name="password" type="password" placeholder="Contraseña"><br>

                <button type="submit" class="btn black">Iniciar sesión</button>
                
            </form>

            <p>¿Olvidaste tu Contraseña?</p>

            <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
        </div>


    </div>
</div>

@endsection
@section('scripts')
    
@endsection
        
