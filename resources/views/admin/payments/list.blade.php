@extends('layouts.admin')
@section('title', 'Trabajos') 
@section('styles')
    <link href="{{url('assets/sweet/sweetalert.css')}}" rel="stylesheet">
@endsection
@section('content')            

            <div class="panel panel-default" id="principal">
                <div class="panel-heading">
                    <div class="row">
                                        
                    <h2>Pagos de clientes >> Lista</h2>                    
                    <a href="{{ url('app/receipts/create') }}"><button class="btn">Crear Recibo</button></a>                    
                    
                </div>                
                
                    <table class="striped responsive-table">
                        <thead>
                            <th>ID</th>
                            <th>Trabajo</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th>Fecha de creación</th>                            
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($payments as $payment)
                        
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->work->title }}</td>
                            <td>${{ $payment->amount }}</td>
                            <td>{{ $payment->date }}</td>
                            <td>{{ $payment->created_at }}</td>                            
                            <td>
                                
                                <a href="{{ url('app/payment/update/'.$payment->id.'') }}" class="btn yellow">Editar </a>
                                <a class="btn red"> Eliminar</a>
                                {{-- <a href="{{ url('noticias', $work->id) }}" class="btn green">Ver</a> --}}
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                    </table>
                
                <center>
                    {{ $payments->links() }}
                </center>

            </div>

            

@endsection

@section('scripts')
    <script src="{{url('assets/sweet/sweetalert.min.js')}}"></script>
    <script src="{{url('js/aplication/noticiasList.js')}}"></script>
@endsection
