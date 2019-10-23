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
                    exclude: ".excludeThisClass",
                    name: "Pagina 1",
                    filename: "reporte_individual" + new Date().toISOString().replace(/[\-\:\.]/g, ""), //do not include extension
                });
            })


        });
    </script>
</head>

<body>

    <button id="bajar_excel" class="btn btn-success">Descargar Excel &nbsp;<i class="fa fa-file-excel"
            aria-hidden="true"></i></button>
    <table id="reporte" class="table table-light table-sm table-striped">
        <thead>
            <tr>
                <th>CODUSU</th>
                <th>ANO4</th>
                <th>TRIMESTRE</th>
                <th>AREA</th>
                <th>NRO_HOGAR</th>
                <th>COMPONENTE</th>
                <th>CH15</th>
                <th>PP01A</th>
                <th>PP01B</th>
                <th>PP01C</th>
                <th>PP01D</th>
                <th>PP01D_ESP</th>
                <th>PP01E</th>
                <th>PP01F</th>
                <th>PP01G</th>
                <th>PP01H</th>
                <th>PP02A</th>
                <th>PP02B</th>
                <th>PP02C1</th>
                <th>PP02C2</th>
                <th>PP02C3</th>
                <th>PP02C4</th>
                <th>PP02C5</th>
                <th>PP02C6</th>
                <th>PP02C7</th>
                <th>PP02C8</th>
                <th>PP02C8_ESP</th>
                <th>PP02D</th>
                <th>PP02E</th>
                <th>PP02F</th>
                <th>PP02G</th>
                <th>PP02H</th>
                <th>PP02I</th>
                <th>PP03A</th>
                <th>PP03B</th>
                <th>PP03C</th>
                <th>PP03D</th>
                <th>PP03E</th>
                <th>PP03F</th>
                <th>PP03G</th>
                <th>PP03H</th>
                <th>PP03I</th>
                <th>PP03J</th>
                <th>PP03K</th>
                <th>PP04A</th>
                <th>PP04A_ESP</th>
                <th>PP04B</th>
                <th>PP04B1</th>
                <th>PP04B2</th>
                <th>PP04B3_MES</th>
                <th>PP04B3_ANO</th>
                <th>PP04B3_DIA</th>
                <th>PP04B4</th>
                <th>PP04C</th>
                <th>PP04C99</th>
                <th>PP04D</th>
                <th>PP04E</th>
                <th>PP04F</th>
                <th>PP04G</th>
                <th>PP04G_ESP</th>
                <th>PP05A</th>
                <th>PP05B</th>
                <th>PP05B1</th>
                <th>PP05B_MES</th>
                <th>PP05B2_ANO</th>
                <th>PP05B2_DIA</th>
                <th>PP05C_1</th>
                <th>PP05C_2</th>
                <th>PP05C_3</th>
                <th>PP05D</th>
                <th>PP05E</th>
                <th>PP05F</th>
                <th>PP05G</th>
                <th>PP05H</th>
                <th>PP06A</th>
                <th>PP06B</th>
                <th>PP06C</th>
                <th>PP06C1</th>
                <th>PP06C2</th>
                <th>PP06D</th>
                <th>PP06D1</th>
                <th>PP06D2</th>
                <th>PP06E</th>
                <th>PP06F</th>
                <th>PP06G</th>
                <th>PP06G1</th>
                <th>PP06H</th>
                <th>PP06H_ESP</th>
                <th>PP06I</th>
                <th>PP06J</th>
                <th>PP06K</th>
                <th>PP06K_S</th>
                <th>PP06K_M</th>
                <th>PP06L</th>
                <th>PP07A</th>
                <th>PP07B</th>
                <th>PP07B_ESP</th>
                <th>PP07C</th>
                <th>PP07D</th>
                <th>PP07E</th>
                <th>PP07F1</th>
                <th>PP07F2</th>
                <th>PP07F3</th>
                <th>PP07F4</th>
                <th>PP07F5</th>
                <th>PP07F11</th>
                <th>PP07F12</th>
                <th>PP07F13</th>
                <th>PP07G</th>
                <th>PP07G1</th>
                <th>PP07G2</th>
                <th>PP07G3</th>
                <th>PP07G4</th>
                <th>PP07G5</th>
                <th>PP07H</th>
                <th>PP07I</th>
                <th>PP07J</th>
                <th>PP07K</th>
                <th>PP08A</th>
                <th>PP08B</th>
                <th>PP08C</th>
                <th>PP08D</th>
                <th>PP08D2</th>
                <th>PP08D3</th>
                <th>PP08D4</th>
                <th>PP08E</th>
                <th>PP08F1</th>
                <th>PP08F2</th>
                <th>PP08G</th>
                <th>PP08G_S</th>
                <th>PP08G_M</th>
                <th>PP08H</th>
                <th>PP08I</th>
                <th>PP08J1</th>
                <th>PP08J2</th>
                <th>PP08J3</th>
                <th>PP08K</th>
                <th>PP09A</th>
                <th>PP09A_ESP</th>
                <th>PP09B</th>
                <th>PP09B_ESP</th>
                <th>PP09C</th>
                <th>PP10A</th>
                <th>PP10B1</th>
                <th>PP10B2</th>
                <th>PP10B3</th>
                <th>PP10B4</th>
                <th>PP10B5</th>
                <th>PP10B6</th>
                <th>PP10B7</th>
                <th>PP10B8</th>
                <th>PP10B9</th>
                <th>PP10B10</th>
                <th>PP10C</th>
                <th>PP10D</th>
                <th>PP10E</th>
                <th>PP11A</th>
                <th>PP11B</th>
                <th>PP11B1</th>
                <th>PP11B2_MES </th>
                <th>PP11B2_ANO </th>
                <th>PP11B2_DIA </th>
                <th>PP11B3</th>
                <th>PP11C</th>
                <th>PP11C99</th>
                <th>PP11D</th>
                <th>PP11E</th>
                <th>PP11F</th>
                <th>PP11G_ANO</th>
                <th>PP11G_MES</th>
                <th>PP11G_DIA </th>
                <th>PP11H</th>
                <th>PP11I</th>
                <th>PP11J</th>
                <th>PP11K</th>
                <th>PP11K1</th>
                <th>PP11K2</th>
                <th>PP11K3</th>
                <th>PP11L</th>
                <th>PP11L1</th>
                <th>PP11M</th>
                <th>PP11M1</th>
                <th>PP11N</th>
                <th>PP11O</th>
                <th>PP11P</th>
                <th>PP11Q</th>
                <th>PP11R</th>
                <th>PP11S</th>
                <th>PP11T</th>
                <th>PP12A</th>
                <th>PP12B1_DEP</th>
                <th>PP12B1_PROP</th>
                <th>PP12B2_DEP</th>
                <th>PP12B2_PROP</th>
                <th>PP12B3_DEP</th>
                <th>PP12B3_PROP</th>
                <th>PP13A</th>
                {{--    --}}
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
<th>CH01</th>
<th>CH02</th>
<th>CH03</th>
<th>CH04</th>
<th>CH05 </th>
<th>CH06</th>
<th>CH07</th>
<th>CH08</th>
<th>CH08_A</th>
<th>CH08_B</th>
<th>CH08_C</th>
<th>CH08_D</th>
<th>CH09</th>
<th>CH10</th>
<th>CH10E</th>
<th>CH10M</th>
<th>CH10G</th>
<th>CH11</th>
<th>CH14</th>
<th>CH12</th>
<th>CH13</th>
<th>CH15</th>
<th>CH15_Cod </th>
<th>CH16</th>
<th>CH16_Cod </th>
<th>CH24</th>
<th>CH25</th>
<th>V1</th>
<th>V2</th>
{{-- <th>V21</th>
<th>V22</th> --}}
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
<th>V2_M </th>
<th>V21_M</th>
<th>V22_M</th>
<th>V3_M </th>
<th>V4_M </th>
<th>V5_M </th>
<th>V8_M </th>
<th>V9_M</th>
<th>V10_M </th>
<th>V11_M</th>
<th>V12_M</th>
<th>V18_M</th>
<th>V19_AM </th>
<th>AUH</th>
<th>T_Vi</th>
<th>VII1</th>
<th>VII2</th>
<th>VII3</th>
<th>DI</th>
<th>DI_1</th>
<th>AI</th>
<th>AI_1</th>
<th>MI</th>
<th>MI_1</th>
<th>TS</th>
<th>TS_1</th>
<th>TS_2</th>
<th>TV</th>
<th>TV_1</th>
<th>TE</th>
<th>TE_1</th>
<th>TM</th>
<th>TM_1</th>
<th>TSAP</th>
<th>TSAP_1</th>
<th>PM</th>
<th>PM_1</th>
<th>BE</th>
<th>BE_1</th>
<th> NIVEL_ED</th>
<th> ESTADO</th>
<th> CAT_OCUP</th>
<th> CAT_INAC</th>
<th> IMPUTA</th>


                {{--  --}}
                <th>P21</th>
                <th>P47T</th>


                <th>ITF</th>

                <th>IPCF</th>



            </tr>
        </thead>
        <tbody>
            @foreach ($viviendas as $vivienda)
            @if($vivienda->hogares->count() > 0)
            @foreach ($vivienda->hogares as $hogar)
            @foreach ($hogar->individuos as $item)
            <tr>
                <td>{{$item->hogar->codusu()}}</td>
                <td>{{$item->hogar->vivienda->ano4}}</td>
                <td>{{$item->hogar->vivienda->trimestre}}</td>
                <td>{{$item->hogar->vivienda->codigo_area}}</td>
                <td>{{$item->hogar->numero_hogar}}</td>
                <td>{{$item->hogar->individuos->count()}}</td>
                <td>{{$item->hogar->entrevista_realizada}}</td>
                {{-- Tabla indivudos --}}
                <td>{{$item->PP01A}}</td>
                <td>{{$item->PP01B}}</td>
                <td>{{$item->PP01C}}</td>
                <td>{{$item->PP01D}}</td>
                <td>{{$item->PP01D_ESP}}</td>
                <td>{{$item->PP01E}}</td>
                <td>{{$item->PP01F}}</td>
                <td>{{$item->PP01G}}</td>
                <td>{{$item->PP01H}}</td>
                <td>{{$item->PP02A}}</td>
                <td>{{$item->PP02B}}</td>
                <td>{{$item->PP02C1}}</td>
                <td>{{$item->PP02C2}}</td>
                <td>{{$item->PP02C3}}</td>
                <td>{{$item->PP02C4}}</td>
                <td>{{$item->PP02C5}}</td>
                <td>{{$item->PP02C6}}</td>
                <td>{{$item->PP02C7}}</td>
                <td>{{$item->PP02C8}}</td>
                <td>{{$item->PP02C8_ESP}}</td>
                <td>{{$item->PP02D}}</td>
                <td>{{$item->PP02E}}</td>
                <td>{{$item->PP02F}}</td>
                <td>{{$item->PP02G}}</td>
                <td>{{$item->PP02H}}</td>
                <td>{{$item->PP02I}}</td>
                <td>{{$item->PP03A}}</td>
                <td>{{$item->PP03B}}</td>
                <td>{{$item->PP03C}}</td>
                <td>{{$item->PP03D}}</td>
                <td>{{$item->PP03E}}</td>
                <td>{{$item->PP03F}}</td>
                <td>{{$item->PP03G}}</td>
                <td>{{$item->PP03H}}</td>
                <td>{{$item->PP03I}}</td>
                <td>{{$item->PP03J}}</td>
                <td>{{$item->PP03K}}</td>
                <td>{{$item->PP04A}}</td>
                <td>{{$item->PP04A_ESP}}</td>
                <td>{{$item->PP04B}}</td>
                <td>{{$item->PP04B1}}</td>
                <td>{{$item->PP04B2}}</td>
                <td>{{$item->PP04B3_MES}}</td>
                <td>{{$item->PP04B3_ANO}}</td>
                <td>{{$item->PP04B3_DIA}}</td>
                <td>{{$item->PP04B4}}</td>
                <td>{{$item->PP04C}}</td>
                <td>{{$item->PP04C99}}</td>
                <td>{{$item->PP04D}}</td>
                <td>{{$item->PP04E}}</td>
                <td>{{$item->PP04F}}</td>
                <td>{{$item->PP04G}}</td>
                <td>{{$item->PP04G_ESP}}</td>
                <td>{{$item->PP05A}}</td>
                <td>{{$item->PP05B}}</td>
                <td>{{$item->PP05B1}}</td>
                <td>{{$item->PP05B_MES}}</td>
                <td>{{$item->PP05B2_ANO}}</td>
                <td>{{$item->PP05B2_DIA}}</td>
                <td>{{$item->PP05C_1}}</td>
                <td>{{$item->PP05C_2}}</td>
                <td>{{$item->PP05C_3}}</td>
                <td>{{$item->PP05D}}</td>
                <td>{{$item->PP05E}}</td>
                <td>{{$item->PP05F}}</td>
                <td>{{$item->PP05G}}</td>
                <td>{{$item->PP05H}}</td>
                <td>{{$item->PP06A}}</td>
                <td>{{$item->PP06B}}</td>
                <td>{{$item->PP06C}}</td>
                <td>{{$item->PP06C1}}</td>
                <td>{{$item->PP06C2}}</td>
                <td>{{$item->PP06D}}</td>
                <td>{{$item->PP06D1}}</td>
                <td>{{$item->PP06D2}}</td>
                <td>{{$item->PP06E}}</td>
                <td>{{$item->PP06F}}</td>
                <td>{{$item->PP06G}}</td>
                <td>{{$item->PP06G1}}</td>
                <td>{{$item->PP06H}}</td>
                <td>{{$item->PP06H_ESP}}</td>
                <td>{{$item->PP06I}}</td>
                <td>{{$item->PP06J}}</td>
                <td>{{$item->PP06K}}</td>
                <td>{{$item->PP06K_S}}</td>
                <td>{{$item->PP06K_M}}</td>
                <td>{{$item->PP06L}}</td>
                <td>{{$item->PP07A}}</td>
                <td>{{$item->PP07B}}</td>
                <td>{{$item->PP07B_ESP}}</td>
                <td>{{$item->PP07C}}</td>
                <td>{{$item->PP07D}}</td>
                <td>{{$item->PP07E}}</td>
                <td>{{$item->PP07F1}}</td>
                <td>{{$item->PP07F2}}</td>
                <td>{{$item->PP07F3}}</td>
                <td>{{$item->PP07F4}}</td>
                <td>{{$item->PP07F5}}</td>
                <td>{{$item->PP07F11}}</td>
                <td>{{$item->PP07F12}}</td>
                <td>{{$item->PP07F13}}</td>
                <td>{{$item->PP07G}}</td>
                <td>{{$item->PP07G1}}</td>
                <td>{{$item->PP07G2}}</td>
                <td>{{$item->PP07G3}}</td>
                <td>{{$item->PP07G4}}</td>
                <td>{{$item->PP07G5}}</td>
                <td>{{$item->PP07H}}</td>
                <td>{{$item->PP07I}}</td>
                <td>{{$item->PP07J}}</td>
                <td>{{$item->PP07K}}</td>
                <td>{{$item->PP08A}}</td>
                <td>{{$item->PP08B}}</td>
                <td>{{$item->PP08C}}</td>
                <td>{{$item->PP08D}}</td>
                <td>{{$item->PP08D2}}</td>
                <td>{{$item->PP08D3}}</td>
                <td>{{$item->PP08D4}}</td>
                <td>{{$item->PP08E}}</td>
                <td>{{$item->PP08F1}}</td>
                <td>{{$item->PP08F2}}</td>
                <td>{{$item->PP08G}}</td>
                <td>{{$item->PP08G_S}}</td>
                <td>{{$item->PP08G_M}}</td>
                <td>{{$item->PP08H}}</td>
                <td>{{$item->PP08I}}</td>
                <td>{{$item->PP08J1}}</td>
                <td>{{$item->PP08J2}}</td>
                <td>{{$item->PP08J3}}</td>
                <td>{{$item->PP08K}}</td>
                <td>{{$item->PP09A}}</td>
                <td>{{$item->PP09A_ESP}}</td>
                <td>{{$item->PP09B}}</td>
                <td>{{$item->PP09B_ESP}}</td>
                <td>{{$item->PP09C}}</td>
                <td>{{$item->PP10A}}</td>
                <td>{{$item->PP10B1}}</td>
                <td>{{$item->PP10B2}}</td>
                <td>{{$item->PP10B3}}</td>
                <td>{{$item->PP10B4}}</td>
                <td>{{$item->PP10B5}}</td>
                <td>{{$item->PP10B6}}</td>
                <td>{{$item->PP10B7}}</td>
                <td>{{$item->PP10B8}}</td>
                <td>{{$item->PP10B9}}</td>
                <td>{{$item->PP10B10}}</td>
                <td>{{$item->PP10C}}</td>
                <td>{{$item->PP10D}}</td>
                <td>{{$item->PP10E}}</td>
                <td>{{$item->PP11A}}</td>
                <td>{{$item->PP11B}}</td>
                <td>{{$item->PP11B1}}</td>
                <td>{{$item->PP11B2_MES}} </td>
                <td>{{$item->PP11B2_ANO}} </td>
                <td>{{$item->PP11B2_DIA}} </td>
                <td>{{$item->PP11B3}}</td>
                <td>{{$item->PP11C}}</td>
                <td>{{$item->PP11C99}}</td>
                <td>{{$item->PP11D}}</td>
                <td>{{$item->PP11E}}</td>
                <td>{{$item->PP11F}}</td>
                <td>{{$item->PP11G_ANO}}</td>
                <td>{{$item->PP11G_MES}}</td>
                <td>{{$item->PP11G_DIA}} </td>
                <td>{{$item->PP11H}}</td>
                <td>{{$item->PP11I}}</td>
                <td>{{$item->PP11J}}</td>
                <td>{{$item->PP11K}}</td>
                <td>{{$item->PP11K1}}</td>
                <td>{{$item->PP11K2}}</td>
                <td>{{$item->PP11K3}}</td>
                <td>{{$item->PP11L}}</td>
                <td>{{$item->PP11L1}}</td>
                <td>{{$item->PP11M}}</td>
                <td>{{$item->PP11M1}}</td>
                <td>{{$item->PP11N}}</td>
                <td>{{$item->PP11O}}</td>
                <td>{{$item->PP11P}}</td>
                <td>{{$item->PP11Q}}</td>
                <td>{{$item->PP11R}}</td>
                <td>{{$item->PP11S}}</td>
                <td>{{$item->PP11T}}</td>
                <td>{{$item->PP12A}}</td>
                <td>{{$item->PP12B1_DEP}}</td>
                <td>{{$item->PP12B1_PROP}}</td>
                <td>{{$item->PP12B2_DEP}}</td>
                <td>{{$item->PP12B2_PROP}}</td>
                <td>{{$item->PP12B3_DEP}}</td>
                <td>{{$item->PP12B3_PROP}}</td>
                <td>{{$item->PP13A}}</td>

                {{-- tabla hogares ---}}

<td>{{$item->hogar->II1}}</td>
<td>{{$item->hogar->II2}}</td>
<td>{{$item->hogar->II3}}</td>
<td>{{$item->hogar->II3_1}} </td>
<td>{{$item->hogar->II4}}</td>
<td>{{$item->hogar->II4_1}} </td>
<td>{{$item->hogar->II4_2}} </td>
<td>{{$item->hogar->II4_3}}</td>
<td>{{$item->hogar->II5}}</td>
<td>{{$item->hogar->II5_1}} </td>
<td>{{$item->hogar->II6}}</td>
<td>{{$item->hogar->II6_1}} </td>
<td>{{$item->hogar->II7}}</td>
<td>{{$item->hogar->II7_Esp}} </td>
<td>{{$item->hogar->II8}}</td>
<td>{{$item->hogar->II8_Esp}} </td>
<td>{{$item->hogar->II9}}</td>
{{-- seccion 4 --}}
<td>{{$item->caracteristicas->CH01}}</td>
<td>{{$item->caracteristicas->CH02}}</td>
<td>{{$item->caracteristicas->CH03}}</td>
<td>{{$item->caracteristicas->CH04}}</td>
<td>{{$item->caracteristicas->CH05}} </td>
<td>{{$item->caracteristicas->CH06}}</td>
<td>{{$item->caracteristicas->CH07}}</td>
<td>{{$item->caracteristicas->CH08}}</td>
<td>{{$item->caracteristicas->CH08_A}}</td>
<td>{{$item->caracteristicas->CH08_B}}</td>
<td>{{$item->caracteristicas->CH08_C}}</td>
<td>{{$item->caracteristicas->CH08_D}}</td>
<td>{{$item->caracteristicas->CH09}}</td>
<td>{{$item->caracteristicas->CH10}}</td>
<td>{{$item->caracteristicas->CH10_E}}</td>
<td>{{$item->caracteristicas->CH10_M}}</td>
<td>{{$item->caracteristicas->CH10_G}}</td>
<td>{{$item->caracteristicas->CH11}}</td>
<td>{{$item->caracteristicas->CH14}}</td>
<td>{{$item->caracteristicas->CH12}}</td>
<td>{{$item->caracteristicas->CH13}}</td>
<td>{{$item->caracteristicas->CH15}}</td>
<td>{{$item->caracteristicas->CH15_Cod}} </td>
<td>{{$item->caracteristicas->CH16}}</td>
<td>{{$item->caracteristicas->CH16_Cod}} </td>
<td>{{$item->caracteristicas->CH24}}</td>
<td>{{$item->caracteristicas->CH25}}</td>
<td>{{$item->hogar->V1}}</td>
<td>{{$item->hogar->V2}}</td>
{{-- <td>{{$item->hogar->V21}}</td>
<td>{{$item->hogar->V22}}</td> --}}
<td>{{$item->hogar->V3}}</td>
<td>{{$item->hogar->V4}}</td>
<td>{{$item->hogar->V5}}</td>
<td>{{$item->hogar->V6}}</td>
<td>{{$item->hogar->V7}}</td>
<td>{{$item->hogar->V8}}</td>
<td>{{$item->hogar->V9}}</td>
<td>{{$item->hogar->V10}}</td>
<td>{{$item->hogar->V11}}</td>
<td>{{$item->hogar->V12}}</td>
<td>{{$item->hogar->V13}}</td>
<td>{{$item->hogar->V14}}</td>
<td>{{$item->hogar->V15}}</td>
<td>{{$item->hogar->V16}}</td>
<td>{{$item->hogar->V17}}</td>
<td>{{$item->hogar->V18}}</td>
<td>{{$item->hogar->V19_A }}</td>
<td>{{$item->hogar->V19_B}}</td>
{{-- seccion 6 --}}
{{-- ingresos no laboral seccion seis --}}
<td>{{$item->nolaboral->V2_M}} </td>
<td>{{$item->nolaboral->V21_M}}</td>
<td>{{$item->nolaboral->V22_M}}</td>
<td>{{$item->nolaboral->V3_M}} </td>
<td>{{$item->nolaboral->V4_M}} </td>
<td>{{$item->nolaboral->V5_M}} </td>
<td>{{$item->nolaboral->V8_M}} </td>
<td>{{$item->nolaboral->V9_M}}</td>
<td>{{$item->nolaboral->V10_M}} </td>
<td>{{$item->nolaboral->V11_M}}</td>
<td>{{$item->nolaboral->V12_M}}</td>
<td>{{$item->nolaboral->V18_M}}</td>
<td>{{$item->nolaboral->V19_AM}} </td>
<td>{{$item->auh()}}</td>

  <td>{{$item->ingresosNoLaborales()}}</td>
  {{--  --}}
<td>{{$item->hogar->VII1}} </td>
<td>{{$item->hogar->VII2}}</td>
<td>{{$item->hogar->VII3}}</td>


<td>{{$item->hogar->DI}}</td>
<td>{{$item->hogar->DI_1}}</td>
<td>{{$item->hogar->AI}}</td>
<td>{{$item->hogar->AI_1}}</td>
<td>{{$item->hogar->MI}}</td>
<td>{{$item->hogar->MI_1}}</td>
<td>{{$item->hogar->TS}}</td>
<td>{{$item->hogar->TS_1}}</td>
<td>{{$item->hogar->TS_2}}</td>
<td>{{$item->hogar->TV}}</td>
<td>{{$item->hogar->TV_1}}</td>
<td>{{$item->hogar->TE}}</td>
<td>{{$item->hogar->TE_1}}</td>
<td>{{$item->hogar->TM}}</td>
<td>{{$item->hogar->TM_1}}</td>
<td>{{$item->hogar->TSAP}}</td>
<td>{{$item->hogar->TSAP_1}}</td>
<td>{{$item->hogar->PM}}</td>
<td>{{$item->hogar->PM_1}}</td>
<td>{{$item->hogar->BE}}</td>
<td>{{$item->hogar->BE_1}}</td>


{{--  --}}
            <th> {{$item->NIVEL_ED()}}</th>
            <th> {{$item->estado()}}</th>
            <th> {{$item->categoriaOcupacional()}}</th>
            <th> {{$item->categoriaInactivos()}}</th>
<th> </th>

                {{--  --}}

                <td>{{$item->P21()}}</td>
                <td>{{$item->P47T()}}</td>


                <td>{{$item->hogar->itf()}}</td>

                <td>{{$item->hogar->ipcf()}}</td>

            </tr>
            @endforeach
            @endforeach
            @else
            <tr>
            <td>{{$vivienda->codusu()}}</td>
                <td>{{$vivienda->ano4}}</td>
                <td>{{$vivienda->trimestre}}</td>
                <td>{{$vivienda->codigo_area}}</td>
                <td>0</td>
            </tr>
                @endif
            @endforeach
        </tbody>
    </table>

</body>

</html>
