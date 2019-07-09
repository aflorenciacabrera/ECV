@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="jumbotron ">
                        <h1 class="display-5 text-center">Menú</h1>
                            <p class="lead"></p>
                            <hr class="my-4">
                        <div class="row">


                        </div>
                        <div class="list-group">
                            <a href="{{route('verListadoVivienda')}}" role="button" class="list-group-item btn-lg list-group-item-action " role="button" aria-pressed="true"> Cargar Nueva Vivienda</a>
                            <a href="{{route('verEncuestaVivienda')}}" role="button" class="list-group-item btn-lg list-group-item-action " role="button" aria-pressed="true"> Ver Viviendas Cargadas</a>
                        </div>
                    </div>

        </div>
    </div>
</div>
@endsection
