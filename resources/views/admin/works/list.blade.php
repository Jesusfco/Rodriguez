@extends('layouts.admin')
@section('title', 'Trabajos') 
@section('styles')
    <link href="{{url('assets/sweet/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('content')            

            <div class="panel panel-default" id="principal">
                <div class="panel-heading">
                    <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                    <h2>Trabajos >> Lista</h2>
                    </div>

                    <a href="{{ url('app/works/create') }}"><button class="btn">Crear Trabajo</button></a>
                    <div class="col-xs-12 col-sm-6">
                        
                    <form method="GET" class="navbar-form">
                         <div class="input-group">
                            <input name="name" class="form-control" placeholder="Buscar Trabajo" autofocus>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Buscar</button>
                            </span>
                        </div>
                    </form>     
                        
                    </div></div>
                    
                    
                </div>
                
                
                    <table class="striped responsive-table">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Cliente</th>
                            <th>Status</th>
                            <th>Costo</th>
                            <th>Deposito</th>
                            <th>Pendiente</th>
                            <th>Publico</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                        
                        <tr id="noticia{{$work->id}}">
                            <td>{{ $work->id }}</td>
                            <td>{{ $work->title }}</td>
                            <td>{{ $work->user->name }}</td>
                            <td>{{ $work->status() }}</td>
                            <td>${{ $work->cost() }}</td>
                            <td>${{ $work->deposit() }}</td>
                            <td>${{ $work->debt() }}</td>
                            <td>{{ $work->public() }}</td>
                            <td>
                                <a href="{{ url('app/works/update/'.$work->id.'/uploadPhotos') }}" class="btn purple">Administrar Fotos </a>                                
                                <a href="{{ url('app/works/update/'.$work->id.'/parts') }}" class="btn orange">Partes </a>                                
                                <a href="{{ url('app/works/update/'.$work->id.'') }}" class="btn yellow">Editar </a>
                                <a  onclick="eliminar({{ $work->id }}, '{{ $work->title }}')" class="btn red"> Eliminar</a>
                                {{-- <a href="{{ url('noticias', $work->id) }}" class="btn green">Ver</a> --}}
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                    </table>
                
                <center>
                    {{ $works->links() }}
                </center>

            </div>

            

@endsection

@section('scripts')
    <script src="{{url('assets/sweet/sweetalert.min.js')}}"></script>
    <script src="{{url('js/aplication/noticiasList.js')}}"></script>
@endsection
