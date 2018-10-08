@extends('layouts.admin')
@section('styles')
    
@endsection
@section('content')            

            <div class="panel panel-default" id="principal">
                
                <div class="panel-heading">
                    
                    <div class="row">
                    
                        <div class="col-xs-12 col-sm-6">

                            <h2>Sesión Iniciada</h2>
                            <h5>Bienvenido - {{Auth::user()->name }}</h5>
                            
                        </div>

                    </div>

                </div>

            </div>

            

@endsection

@section('scripts')
    
@endsection
