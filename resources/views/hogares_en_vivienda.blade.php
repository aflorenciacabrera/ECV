@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <td></td>
                    @if($h->estado() != 'ok')
                        <td>
                            <div class="alert alert-warning" role="alert">
                                  {{$h->estado()}}
                            </div>
                        </td>
                        <td>
                            @if($h->estado() =="individuo incompleto")
                            <a name="" id="" class="btn btn-primary btn-sm" href="" role="button">Completar Individuales</a>
                            @else
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('verEncuestaHogar',['id'=>$h->id])}}" role="button">Completar Formulario</a>
                            @endif
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
