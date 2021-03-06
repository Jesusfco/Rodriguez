@extends('layouts.admin')
@section('title', 'Servicios') 
@section('styles')
    <link href="{{url('assets/sweet/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('content')            

            <div class="panel panel-default" id="principal">
                <div class="panel-heading">
                    <div class="row">
                    
                    
                    <h2>Servicios >> Lista</h2>                    
                    <a href="{{ url('app/services/create') }}"><button class="btn">Crear Servicios</button></a>
                                                                                                          
                    
                    
                </div>
                
                
                    <table class="striped responsive-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Resumen</th>
                            <th>Publico</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($services as $n)
                        
                        <tr id="noticia{{$n->id}}">
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->name }}</td>
                            <td>{{ $n->resume }}</td>
                            <td>{{ $n->public() }}</td>
                            <td>                                
                                <a href="{{ url('app/services/update/'.$n->id.'/gallery') }}" class="btn purple">Administrar Fotos </a>                                
                                <a href="{{ url('app/services/update/'.$n->id.'') }}" class="btn yellow">Editar </a>
                                {{-- <a  onclick="eliminar({{ $n->id }}, '{{ $n->title }}')" class="btn red"> Eliminar</a>
                                <a href="{{ url('noticias', $n->id) }}" class="btn green">Ver</a> --}}
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                    </table>
                                

            </div>

            

@endsection

@section('scripts')
    <script src="{{url('assets/sweet/sweetalert.min.js')}}"></script>
    <script src="{{url('js/aplication/noticiasList.js')}}"></script>
@endsection
