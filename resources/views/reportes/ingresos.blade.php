@extends('layouts.app')

@section('content')
<script>

 $(document).ready(function(){
            $("#bajar_excel").click(function(){
                $("#reporte").table2excel({
                exclude: ".excludeThisClass",
                name: "Pagina 1",
                filename: "reporte_ingresos" + new Date().toISOString().replace(/[\-\:\.]/g, ""), //do not include extension
            });
            })

            //





            //

});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <button id="bajar_excel" class="btn btn-success">Descargar Excel &nbsp;<i class="fa fa-file-excel" aria-hidden="true"></i></button>
            <table id="reporte" class="table table-light table-sm" style="table-layout: fixed; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th>Area</th>
                        <th>Listado</th>
                        <th>Vivienda </th>
                        <th>Hogar</th>
                        <th>Componente</th>
                        <th>Semana</th>
                        <th>Trimestre</th>
                        <th>Año</th>
                        <th>Nombre</th>
                        <th>Ingreso Laboral</th>
                        <th>aeq</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($individuos as $item)
                        <tr>
                            <td>{{$item->codigo_area}}</td>
                            <td>{{$item->numero_listado}}</td>
                            <td>{{$item->numero_vivienda}}</td>
                            <td>{{$item->hogar_id}}</td>
                            <td>{{$item->numero_componente}}</td>
                            <td>{{$item->numero_semana}}</td>
                            <td>{{$item->trimestre}}</td>
                            <td>{{$item->ano4}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>
                                @if(($item->ingresosLaborales()==-9) or ($item->hogarSeccionSeis->ingresosNoLaborales()==-9))
                                    $ -9
                                @else
                                    $ {{$item->ingresosLaborales() + $item->hogarSeccionSeis->ingresosNoLaborales()}}
                                @endif
                            </td>
                            <td>{{$item->getPond()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
