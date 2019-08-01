@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Vivienda ( Área: {{$vivienda->codigo_area}} - Nro Listado: {{$vivienda->numero_listado}} - Vivienda:{{$vivienda->numero_vivienda}})</h4>
                <h4 class="card-title text-center">( Trimestre: {{$vivienda->trimestre}} - Semana: {{$vivienda->numero_semana}} - Año:{{$vivienda->ano4}})</h4>
                    <p class="card-text">
                          <table class="table table-sm table-stripped">
            <thead>
                <tr>
                    <th>Nro de Hogar</th>
                    <th>Nro de Componentes</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vivienda->hogares as $h)
                    <tr>
                    <td scope="row">{{$h->numero_hogar}}</td>
                    <td>{{$h->individuos->count()}}</td>

                    @if($h->estado() != 'ok')
                        <td>
                            <div class="alert alert-warning alert-sm" role="alert">
                                  {{$h->estado()}}
                            </div>
                        </td>
                        <td>
                            @if($h->estado() =="individuo incompleto")
                                <a name="" id="" class="btn btn-primary btn-sm" href="{{route('individuosEnHogar',['id'=>$h->id])}}" role="button">Completar Individuales</a>
                                <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaHogar',['id'=>$h->id])}}"  role="button">Actualizar Hogar</a>
                            @else
                                <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaHogar',['id'=>$h->id])}}" role="button">Completar Formulario</a>
                            @endif
                        </td>
                    @else
                         <td>
                            <div class="alert alert-success alert-sm" role="alert">
                                 Completo
                            </div>
                        </td>
                        <td>

                                <a name="" id="" class="btn btn-primary btn-sm" href="{{route('individuosEnHogar',['id'=>$h->id])}}" role="button">Ver Individuales</a>
                                <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaHogar',['id'=>$h->id])}}"  role="button">Actualizar Hogar</a>


                        </td>
                        @endif

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
