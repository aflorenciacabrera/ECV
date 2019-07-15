@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table table-sm table-stripped">
            <thead>
                <tr>
                    <th>Nro de Componente</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hogar->individuos as $i)
                    <tr>
                    <td scope="row">{{$i->nro_componente}}</td>
                    <td scope="row">{{$i->nombre}}</td>
                    @if($i->estado == 1)
                        <td>
                           <div class="alert alert-primary" role="alert">
                                <strong>Completo</strong>
                            </div>
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaIndividuo',['id'=>$i->id])}}"  role="button">Actualizar</a>
                        </td>
                            @else
                        <td>
                             <div class="alert alert-warning" role="alert">
                                <strong>Incompleto</strong>
                            </div>

                            </td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaIndividuo',['id'=>$i->id])}}" role="button">Completar Formulario</a>
                        </td>
                            @endif


                </tr>
                @endforeach

            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
