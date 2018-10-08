<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('favicon1.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') || App Rodriguez Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/admin/navegationAdmin.css') }}">
    @yield('styles')
</head>
<body>
<div id="app">
    <div class="navegation">
        <br><br>
            <a href="{{ url('/')}}">

                <img id="logo" src="{{url('img/logoNav.png')}}">
            </a>
            
            <div class="links">
                <a href="{{ url('app/blog')}}"><p>Blog</p></a>
                <a href="{{ url('app/works')}}"><p>Trabajos</p></a>
                <a href="{{ url('app/receipts')}}"><p>Recibos</p></a>
                <a href="{{ url('app/services')}}"><p>Servicios</p></a>
                <a href="{{ url('app/receipts')}}"><p>Foto Evento</p></a>
                <a href="{{ url('app/users')}}"><p>Usuarios</p></a>
                <a href="{{ url('app/resetPassword')}}"><p>Cambiar contraseña</p></a>
                <a href="{{ url('logout')}}"><p>Cerrar Sesión<p></a>
            </div>

    </div>

    <div class="content">
        <div class="margener">

        @yield('content')
        </div>
    </div>

</div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    @yield('scripts')
    
</body>
</html>