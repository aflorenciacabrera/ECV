@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <p class="card-text">
                    <a  href="{{route('verEncuestaVivienda')}}" role="button" class="btn btn-lg btn-primary" role="button" aria-pressed="true"> Cargar Nueva Vivienda
                        <i><span class="fa fa-plus"></span></i>

                    </a></p>
            </div>
        </div>
        <div class="card text-left">
            <div class="card">

                <div class="card-header">
                    Viviendas Ingresadas por <strong>{{Auth::user()->name}}</strong>
                </div>

                <div class="card-body">

                    <table class="table table-striped table-inverse  table-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Área</th>
                                <th>N° Listado</th>
                                <th>Vivienda</th>
                                <th>Semana</th>
                                <th>Grupo Rotación</th>
                                <th>Manzana</th>
                                <th>Lado</th>
                                <th>Calle</th>
                                <th>Nro</th>
                                <th>Piso</th>
                                <th>Depto o Casa</th>
                                <th>Habitación</th>
                                <th>Tipo Vivienda</th>
                                {{-- <th>Descripción</th> --}}
                                <th>trimestre</th>
                                <th>ano4</th>
                                <th>estado</th>
                                <th>Acción</th>
                                {{-- <th>Cargar Hogar</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($viviendas as $item)
                                <tr>
                                <td>{{$item->codigo_area}}</td>
                                <td>{{$item->numero_listado}}</td>
                                <td>{{$item->numero_vivienda}}</td>
                                <td>{{$item->numero_semana}}</td>
                                <td>{{$item->grupo_rotacion}}</td>
                                <td>{{$item->manz}}</td>
                                <td>{{$item->lado}}</td>
                                <td>{{$item->calle}}</td>
                                <td>{{$item->numero}}</td>
                                <td>{{$item->piso}}</td>
                                <td>{{$item->deptoocasa}}</td>
                                <td>{{$item->habitacion}}</td>
                                <td>{{$item->tipoVivienda}}</td>
                                <td>{{$item->trimestre}}</td>
                                <td>{{$item->ano4}}</td>
                                <td>
                                    @if ($item->estado() == 'ok')
                                        <div class="alert alert-success" role="alert">
                                            Completo
                                        </div>

                                    @else
                                        <div class="alert alert-warning" role="alert">
                                            {{$item->estado()}}
                                        </div>

                                    @endif
                                </td>

                                {{-- <th>Cargar Hogar</th> --}}
                                <td>
                               @if($item->estado() !== 'ok')

                                        {{-- TODO ruta pra ver detalle de area --}}
                                        <a name="" id="" class="btn btn-sm btn-primary btn-warning btn-block" href="{{route('verHogares',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Cargar Hogar" data-placemente="top">Completar Hogares<i class="fa fa-home" aria-hidden="true"></i></a>
                                <a name="" id="" class="btn btn-sm btn-primary btn-block" href="{{route('editarVivienda',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Editar <i class="fa fa-eye" aria-hidden="true"></i></a>
                                @else
                                  <a name="" id="" class="btn btn-sm btn-primary btn-warning btn-block" href="{{route('verHogares',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Cargar Hogar" data-placemente="top">Editar Hogares<i class="fa fa-home" aria-hidden="true"></i></a>
                                <a name="" id="" class="btn btn-sm btn-primary btn-block" href="{{route('editarVivienda',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Editar <i class="fa fa-eye" aria-hidden="true"></i></a>
                               @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </div>

</div>
@endsection
