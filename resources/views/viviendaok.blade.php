@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                 <h4>   Vivienda Guardada con Éxito</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a class="btn btn-lg btn-success btn-block" href="{{route('verHogares',['id'=>$vivienda->id])}}" >
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Continuar con la carga de Hogares</a>
                        </div>
                    </div>

                    &nbsp;
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                        <a class="btn btn-lg btn-warning btn-block" href="{{route('verListadoVivienda')}}">
                                <i class="fa fa-backward" aria-hidden="true"></i>
                                Volver al listado de viviendas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
