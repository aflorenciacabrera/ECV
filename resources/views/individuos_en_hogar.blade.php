@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <h4 class="card-title text-center">Hogar Nro:{{$hogar->numero_hogar}}</br> ( Área: {{$hogar->vivienda->codigo_area}} - Nro Listado: {{$hogar->vivienda->numero_listado}} - Vivienda:{{$hogar->vivienda->numero_vivienda}} - Manzana:{{$hogar->vivienda->manz}})</h4>
                <h4 class="card-title text-center">
                    ( Trimestre: {{$hogar->vivienda->trimestre}} -
                    Semana: {{$hogar->vivienda->numero_semana}} - Año:{{$hogar->vivienda->ano4}})
                </h4>
                </div>

            </div>

                <p class="card-text">
                    <table class="table table-sm table-stripped">
            <thead>
                <tr>
                    <th>Nro de Componente</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hogar->individuos as $i)
                    <tr>
                    <td scope="row">{{$i->numero_componente}}</td>
                    <td scope="row">{{$i->nombre}}</td>
                    <td scope="row">{{$i->sexo()}}</td>
                    <td scope="row">{{$i->edad()}}</td>
                    <td scope="row">
                    @if($i->edad()<10)
                        Menor de Edad
                    @else
                        @if($i->estado == 1)
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaIndividuo',['id'=>$i->id])}}"  role="button">Actualizar</a>
                        @else
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaIndividuo',['id'=>$i->id])}}" role="button">Completar Formulario</a>
                        @endif
                    @endif
                    </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
                </p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
