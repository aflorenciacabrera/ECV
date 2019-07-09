@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div class="card text-left">
            <div class="card">
                <div class="card-header">
                    Viviendas Ingresadas por <strong>{{Auth::user()->name}}</strong>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
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
                                <th>Participación</th>
                                <th>Acción</th>
                                {{-- <th>Cargar Hogar</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>99</td>
                                <td>235</td>
                                <td>2</td>
                                <td>4</td>
                                <td>444</td>
                                <td>5</td>
                                <td>Nombre de la Calle</td>
                                <td>139</td>
                                <td>0</td>
                                <td>Casa</td>
                                <td>9</td>
                                <td>B</td>

                                <td>4</td>
                                <td>
                                    {{-- TODO ruta pra ver detalle de area --}}
                                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('verDetalleVivienda',['id'=>1])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Ver Detalle <i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>

                            </tr>
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
