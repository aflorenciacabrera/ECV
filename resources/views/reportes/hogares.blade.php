<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ECV</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- STEPPER PLUGIN --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js" defer></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" defer></script>



    <style>
        .fit {
            white-space: nowrap;
        }
    </style>
    <script>

        $(document).ready(function () {


            // $("#reporte").DataTable();

            $("#bajar_excel").click(function () {
                $("#reporte").table2excel({
                    exclude: ".excludeitemClass",
                    name: "Pagina 1",
                    filename: "reporte_hogar" + new Date().toISOString().replace(/[\-\:\.]/g, ""), //do not include extension
                });
            })


        });
    </script>
</head>

<body>

    <button id="bajar_excel" class="btn btn-success">Descargar Excel &nbsp;<i class="fa fa-file-excel"
            aria-hidden="true"></i></button>
    <table id="reporte" class="table table-sm table-striped">
        <thead>
            <tr>
                <th>CODUSU</th>
                <th>ANO4</th>
                <th>TRIMESTRE</th>
                <th>AREA</th>
                <th>FRACCION</th>
                <th>RADIO</th>
                <th>ID_AREA_CENSAL</th>
                <th>NRO_HOGAR</th>
                <th>CH15</th>
                {{-- datos vivienda --}}
                <th>IV1</th>
<th>IV1_Esp</th>
<th>IV2</th>
<th>IV3</th>
<th>IV3_Esp </th>
<th>IV4</th>
<th>IV5</th>
<th>IVE</th>
<th>IV6</th>
<th>IV7</th>
<th>IV7_Esp</th>
<th>IV8</th>
<th>IV9</th>
<th>IV10</th>
<th>IV11</th>
<th>IV12_1</th>
<th>IV12_2</th>
<th>IV12_3</th>
<th>IV14</th>
<th>IV15</th>

<th>CAUSAS</th>
<th>DESHABILITADA</th>
<th>DEMOLIDA</th>
<th>CONSTRUCCIÓN</th>
<th>FIN_DE_SEMANA</th>
<th>CONSTRUCCION</th>
<th>ESTABLECIMIENTO</th>
<th>VARIACION</th>
<th>AUSENCIA</th>
<th>RECHAZO</th>
<th>OTRO</th>
                {{-- datos hogar --}}
<th>II1</th>
<th>II2</th>
<th>II3</th>
<th>II3_1 </th>
<th>II4</th>
<th>II4_1 </th>
<th>II4_2 </th>
<th>II4_3</th>
<th>II5</th>
<th>II5_1 </th>
<th>II6</th>
<th>II6_1 </th>
<th>II7</th>
<th>II7_Esp </th>
<th>II8</th>
<th>II8_Esp </th>
<th>II9</th>
{{--  --}}
<th>DI_1</th>
<th>DI</th>
<th>AI_1</th>
<th>AI</th>
<th>MI_1</th>
<th>MI</th>
<th>TS_1</th>
<th>TS</th>
<th>TE_1</th>
<th>TE</th>
<th>TV</th>
<th>TM_1</th>
<th>TM</th>
<th>PM_1</th>
<th>PM</th>
<th>TSAP_1</th>
<th>TSAP</th>
<th>BE_1</th>
<th>BE</th>
<th>AUH</th>
{{--  --}}
<th>V1</th>
<th>V2</th>
<th>V21</th>
<th>V22</th>
<th>V3</th>
<th>V4</th>
<th>V5</th>
<th>V6</th>
<th>V7</th>
<th>V8</th>
<th>V9</th>
<th>V10</th>
<th>V11</th>
<th>V12</th>
<th>V13</th>
<th>V14</th>
<th>V15</th>
<th>V16</th>
<th>V17</th>
<th>V18</th>
<th>V19_A </th>
<th>V19_B</th>

<td>IX_TOT</td>
<td>IX_MEN10</td>
<td>IX_MAYEQ10</td>

<th>AUH</th>
<th>ITF</th>
<th>IPCF</th>

<th>VII1</th>
<th>VII2</th>
<th>VII3</th>




            </tr>
        </thead>
        <tbody>
            @foreach ($viviendas as $vivienda)
            @if($vivienda->hogares->count() > 0)
            @foreach ($vivienda->hogares as $item)
            <tr>
                <td>{{$item->codusu()}}</td>
                <td>{{$item->vivienda->ano4}}</td>
                <td>{{$item->vivienda->trimestre}}</td>
                <td>{{$item->vivienda->codigo_area}}</td>
                <td>{{$item->vivienda->area->fraccion}}</td>
                <td>{{$item->vivienda->area->radio}}</td>
                <td>{{$item->vivienda->area->id_area_censal}}</td>
                <td>{{$item->numero_hogar}}</td>
                <td>{{$item->entrevista_realizada}}</td>
                {{--  --}}
                <td>{{$item->vivienda->IV1}}</td>
<td>{{$item->vivienda->IV1_Esp}}</td>
<td>{{$item->vivienda->IV2}}</td>
<td>{{$item->vivienda->IV3}}</td>
<td>{{$item->vivienda->IV3_Esp}} </td>
<td>{{$item->vivienda->IV4}}</td>
<td>{{$item->vivienda->IV5}}</td>
<td>{{$item->vivienda->IVE}}</td>
<td>{{$item->vivienda->IV6}}</td>
<td>{{$item->vivienda->IV7}}</td>
<td>{{$item->vivienda->IV7_Esp}}</td>
<td>{{$item->vivienda->IV8}}</td>
<td>{{$item->vivienda->IV9}}</td>
<td>{{$item->vivienda->IV10}}</td>
<td>{{$item->vivienda->IV11}}</td>
<td>{{$item->vivienda->IV12_1}}</td>
<td>{{$item->vivienda->IV12_2}}</td>
<td>{{$item->vivienda->IV12_3}}</td>
<td>{{$item->vivienda->IV14}}</td>
<td>{{$item->vivienda->IV15}}</td>

<td>{{$item->vivienda->CAUSAS}}</td>
<td>{{$item->vivienda->DESHABILITADA}}</td>
<td>{{$item->vivienda->DEMOLIDA}}</td>
<td>{{$item->vivienda->CONSTRUCCIÓN}}</td>
<td>{{$item->vivienda->FIN_DE_SEMANA}}</td>
<td>{{$item->vivienda->CONSTRUCCION}}</td>
<td>{{$item->vivienda->ESTABLECIMIENTO}}</td>
<td>{{$item->vivienda->VARIACION}}</td>
<td>{{$item->vivienda->AUSENCIA_PARTICIPACION}}</td>
<td>{{$item->vivienda->RECHAZO}}</td>
<td>{{$item->vivienda->OTRO}}</td>
{{-- datos hogar --}}
<td>{{$item->II1}}</td>
<td>{{$item->II2}}</td>
<td>{{$item->II3}}</td>
<td>{{$item->II3_1}} </td>
<td>{{$item->II4}}</td>
<td>{{$item->II4_1}} </td>
<td>{{$item->II4_2}} </td>
<td>{{$item->II4_3}}</td>
<td>{{$item->II5}}</td>
<td>{{$item->II5_1}} </td>
<td>{{$item->II6}}</td>
<td>{{$item->II6_1}} </td>
<td>{{$item->II7}}</td>
<td>{{$item->II7_Esp}} </td>
<td>{{$item->II8}}</td>
<td>{{$item->II8_Esp}} </td>
<td>{{$item->II9}}</td>
{{-- Planes sociales --}}
<th>{{$item->DI_1}}</th>
<th>{{$item->DI}}</th>
<th>{{$item->AI_1}}</th>
<th>{{$item->AI}}</th>
<th>{{$item->MI_1}}</th>
<th>{{$item->MI}}</th>
<th>{{$item->TS_1}}</th>
<th>{{$item->TS}}</th>
<th>{{$item->TE_1}}</th>
<th>{{$item->TE}}</th>
<th>{{$item->TV}}</th>
<th>{{$item->TM_1}}</th>
<th>{{$item->TM}}</th>
<th>{{$item->PM_1}}</th>
<th>{{$item->PM}}</th>
<th>{{$item->TSAP_1}}</th>
<th>{{$item->TSAP}}</th>
<th>{{$item->BE_1}}</th>
<th>{{$item->BE}}</th>
<th>{{$item->AUH}}</th>
{{--  --}}
<td>{{$item->V1}}</td>
<td>{{$item->V2}}</td>
<td>{{$item->V21}}</td>
<td>{{$item->V22}}</td>
<td>{{$item->V3}}</td>
<td>{{$item->V4}}</td>
<td>{{$item->V5}}</td>
<td>{{$item->V6}}</td>
<td>{{$item->V7}}</td>
<td>{{$item->V8}}</td>
<td>{{$item->V9}}</td>
<td>{{$item->V10}}</td>
<td>{{$item->V11}}</td>
<td>{{$item->V12}}</td>
<td>{{$item->V13}}</td>
<td>{{$item->V14}}</td>
<td>{{$item->V15}}</td>
<td>{{$item->V16}}</td>
<td>{{$item->V17}}</td>
<td>{{$item->V18}}</td>
<td>{{$item->V19_A}} </td>
<td>{{$item->V19_B}}</td>
{{--  --}}
<td>{{$item->totalMiembros()}}</td>
<td>{{$item->totalMenores()}}</td>
<td>{{$item->totalMayores()}}</td>
            {{-- } --}}
<td>{{$item->auh()}}</td>
<td>{{$item->itf()}}</td>
<td>{{$item->ipcf()}}</td>
{{--  --}}
<td>{{$item->VII1}}</td>
<td>{{$item->VII2}}</td>
<td>{{$item->VII3}}</td>


            </tr>
            @endforeach
            @else

                 <tr>
                <td>{{$vivienda->codusu()}}</td>
                <td>{{$vivienda->ano4}}</td>
                <td>{{$vivienda->trimestre}}</td>
                <td>{{$vivienda->codigo_area}}</td>
                <td>{{$vivienda->area->fraccion}}</td>
                <td>{{$vivienda->area->radio}}</td>
                <td>{{$vivienda->area->id_area_censal}}</td>
                <td></td>
                <td>{{$vivienda->entrevista_realizada}}</td>
                {{--  --}}
                <td>{{$vivienda->IV1}}</td>
<td>{{$vivienda->IV1_Esp}}</td>
<td>{{$vivienda->IV2}}</td>
<td>{{$vivienda->IV3}}</td>
<td>{{$vivienda->IV3_Esp}} </td>
<td>{{$vivienda->IV4}}</td>
<td>{{$vivienda->IV5}}</td>
<td>{{$vivienda->IVE}}</td>
<td>{{$vivienda->IV6}}</td>
<td>{{$vivienda->IV7}}</td>
<td>{{$vivienda->IV7_Esp}}</td>
<td>{{$vivienda->IV8}}</td>
<td>{{$vivienda->IV9}}</td>
<td>{{$vivienda->IV10}}</td>
<td>{{$vivienda->IV11}}</td>
<td>{{$vivienda->IV12_1}}</td>
<td>{{$vivienda->IV12_2}}</td>
<td>{{$vivienda->IV12_3}}</td>
<td>{{$vivienda->IV14}}</td>
<td>{{$vivienda->IV15}}</td>


<td>{{$vivienda->CAUSAS}}</td>
<td>{{$vivienda->DESHABILITADA}}</td>
<td>{{$vivienda->DEMOLIDA}}</td>
<td>{{$vivienda->CONSTRUCCIÓN}}</td>
<td>{{$vivienda->FIN_DE_SEMANA}}</td>
<td>{{$vivienda->CONSTRUCCION}}</td>
<td>{{$vivienda->ESTABLECIMIENTO}}</td>
<td>{{$vivienda->VARIACION}}</td>
<td>{{$vivienda->AUSENCIA_PARTICIPACION}}</td>
<td>{{$vivienda->RECHAZO}}</td>
<td>{{$vivienda->OTRO}}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</body>

</html>
