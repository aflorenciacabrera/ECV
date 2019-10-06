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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- STEPPER PLUGIN --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js" defer></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" defer></script>



    <style>
    .fit{
         white-space: nowrap;
    }

    </style>
    <script>

 $(document).ready(function(){


        // $("#reporte").DataTable();

            $("#bajar_excel").click(function(){
                $("#reporte").table2excel({
                exclude: ".excludeThisClass",
                name: "Pagina 1",
                filename: "reporte_ingresos" + new Date().toISOString().replace(/[\-\:\.]/g, ""), //do not include extension
            });
            })


});
</script>
</head>
    <body>

     <button id="bajar_excel" class="btn btn-success">Descargar Excel &nbsp;<i class="fa fa-file-excel" aria-hidden="true"></i></button>
            <table id="reporte" class="table table-light table-sm table-striped">
                <thead>
                    <tr>
                        <th>CODUSU</th>
                        <th>ANO4</th>
                        <th>TRIMESTRE</th>
                        <th>NRO_HOGAR</th>
                        <th>COMPONENTE</th>
                        <th>H15</th>
                        <th>REGION</th>
                        <th>MAS_500</th>
                        <th>AGLOMERADO</th>
                        <th>PONDERA</th>
                        <th>CH03</th>
                        <th>CH04</th>
                        <th>CH05</th>
                        <th>CH06</th>
                        <th>CH07</th>
                        <th>CH08</th>
                        <th>CH09</th>
                        <th>CH10</th>
                        <th>CH11</th>
                        <th>CH12</th>
                        <th>CH13</th>
                        <th>CH14</th>
                        <th>CH15</th>
                        <th>CH15_COD</th>
                        <th>CH16</th>
                        <th>CH16_COD</th>
                        <th>NIVEL_ED</th>
                        <th>ESTADO</th>
                        <th>CAT_OCUP</th>
                        <th>CAT_INAC</th>
                        <th>IMPUTA</th>
                        <th>PP02C1</th>
                        <th>PP02C2</th>
                        <th>PP02C3</th>
                        <th>PP02C4</th>
                        <th>PP02C5</th>
                        <th>PP02C6</th>
                        <th>PP02C7</th>
                        <th>PP02C8</th>
                        <th>PP02E</th>
                        <th>PP02H</th>
                        <th>PP02I</th>
                        <th>PP03C</th>
                        <th>PP03D</th>
                        <th>PP3E_TOT</th>
                        <th>PP3F_TOT</th>
                        <th>PP03G</th>
                        <th>PP03H</th>
                        <th>PP03I</th>
                        <th>PP03J</th>
                        <th>INTENSI</th>
                        <th>PP04A</th>
                        <th>PP04B_COD</th>
                        <th>PP04B1</th>
                        <th>PP04B2</th>
                        <th>PP04B3_MES</th>
                        <th>PP04B3_ANO</th>
                        <th>PP04B3_DIA</th>
                        <th>PP04C</th>
                        <th>PP04C99</th>
                        <th>PP04D_COD</th>
                        <th>PP04G</th>
                        <th>PP05B2_MES</th>
                        <th>PP05B2_ANO</th>
                        <th>PP05B2_DIA</th>
                        <th>PP05C_1</th>
                        <th>PP05C_2</th>
                        <th>PP05C_3</th>
                        <th>PP05E</th>
                        <th>PP05F</th>
                        <th>PP05H</th>
                        <th>PP06A</th>
                        <th>PP06C</th>
                        <th>PP06D</th>
                        <th>PP06E</th>
                        <th>PP06H</th>
                        <th>PP07A</th>
                        <th>PP07C</th>
                        <th>PP07D</th>
                        <th>PP07E</th>
                        <th>PP07F1</th>
                        <th>PP07F2</th>
                        <th>PP07F3</th>
                        <th>PP07F4</th>
                        <th>PP07F5</th>
                        <th>PP07G1</th>
                        <th>PP07G2</th>
                        <th>PP07G3</th>
                        <th>PP07G4</th>
                        <th>PP07G_59</th>
                        <th>PP07H</th>
                        <th>PP07I</th>
                        <th>PP07J</th>
                        <th>PP07K</th>
                        <th>PP08D1</th>
                        <th>PP08D4</th>
                        <th>PP08F1</th>
                        <th>PP08F2</th>
                        <th>PP08J1</th>
                        <th>PP08J2</th>
                        <th>PP08J3</th>
                        <th>PP09A</th>
                        <th>PP09A_ESP</th>
                        <th>PP09B</th>
                        <th>PP09C</th>
                        <th>PP09C_ESP</th>
                        <th>PP10A</th>
                        <th>PP10C</th>
                        <th>PP10D</th>
                        <th>PP10E</th>
                        <th>PP11A</th>
                        <th>PP11B_COD</th>
                        <th>PP11B1</th>
                        <th>PP11B2_MES</th>
                        <th>PP11B2_ANO</th>
                        <th>PP11B2_DIA</th>
                        <th>PP11C</th>
                        <th>PP11C99</th>
                        <th>PP11D_COD</th>
                        <th>PP11G_ANO</th>
                        <th>PP11G_MES</th>
                        <th>PP11G_DIA</th>
                        <th>PP11L</th>
                        <th>PP11L1</th>
                        <th>PP11M</th>
                        <th>PP11N</th>
                        <th>PP11O</th>
                        <th>PP11P</th>
                        <th>PP11Q</th>
                        <th>PP11R</th>
                        <th>PP11S</th>
                        <th>PP11T</th>
                        <th>P21</th>
                        <th>P47T</th>
                        <th>V2_M</th>
                        <th>V3_M</th>
                        <th>V4_M</th>
                        <th>V5_M</th>
                        <th>V8_M</th>
                        <th>V9_M</th>
                        <th>V10_M</th>
                        <th>V11_M</th>
                        <th>V12_M</th>
                        <th>V18_M</th>
                        <th>V19_AM</th>
                        <th>V21_M</th>
                        <th>T_VI</th>
                        <th>ITF</th>

                        <th>IPCF</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($individuos as $item)
                        <tr>
                        <td>{{$item->hogar->codusu()}}</td>
                        <td>{{$item->hogar->vivienda->ano4}}</td>
                         <td>{{$item->hogar->vivienda->trimestre}}</td>
                         <td>{{$item->hogar->numero_hogar}}</td>
                         <td>{{$item->numero_componente}}</td>
                        <td>{{$item->hogar->entrevista_realizada}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$item->caracteristicas->CH03}}</td>
                        <td>{{$item->caracteristicas->CH04}}</td>
                        <td>{{$item->caracteristicas->CH05}}</td>
                        <td>{{$item->caracteristicas->CH06}}</td>
                        <td>{{$item->caracteristicas->CH07}}</td>
                        <td>{{$item->caracteristicas->CH08}}</td>
                        <td>{{$item->caracteristicas->CH09}}</td>
                        <td>{{$item->caracteristicas->CH10}}</td>
                        <td>{{$item->caracteristicas->CH11}}</td>
                        <td>{{$item->caracteristicas->CH12}}</td>
                        <td>{{$item->caracteristicas->CH13}}</td>
                        <td>{{$item->caracteristicas->CH14}}</td>
                        <td>{{$item->caracteristicas->CH15}}</td>
                        <td>{{$item->caracteristicas->CH15_COD}}</td>
                        <td>{{$item->caracteristicas->CH16}}</td>
                        <td>{{$item->caracteristicas->CH16_COD}}</td>
                        <td>NIVEL_ED</td>
                        <td>ESTADO</td>
                        <td>CAT_OCUP</td>
                        <td>CAT_INAC</td>
                        <td>IMPUTA</td>
                        <td>{{$item->PP02C1}}</td>
                        <td>{{$item->PP02C2}}</td>
                        <td>{{$item->PP02C3}}</td>
                        <td>{{$item->PP02C4}}</td>
                        <td>{{$item->PP02C5}}</td>
                        <td>{{$item->PP02C6}}</td>
                        <td>{{$item->PP02C7}}</td>
                        <td>{{$item->PP02C8}}</td>
                        <td>{{$item->PP02E}}</td>
                        <td>{{$item->PP02H}}</td>
                        <td>{{$item->PP02I}}</td>
                        <td>{{$item->PP03C}}</td>
                        <td>{{$item->PP03D}}</td>
                        <td>{{$item->PP3E_TOT}}</td>
                        <td>{{$item->PP3F_TOT}}</td>
                        <td>{{$item->PP03G}}</td>
                        <td>{{$item->PP03H}}</td>
                        <td>{{$item->PP03I}}</td>
                        <td>{{$item->PP03J}}</td>
                        <td>INTENSI</td>
                        <td>{{$item->PP04A}}</td>
                        <td>{{$item->PP04B_COD}}</td>
                        <td>{{$item->PP04B1}}</td>
                        <td>{{$item->PP04B2}}</td>
                        <td>{{$item->PP04B3_MES}}</td>
                        <td>{{$item->PP04B3_ANO}}</td>
                        <td>{{$item->PP04B3_DIA}}</td>
                        <td>{{$item->PP04C}}</td>
                        <td>{{$item->PP04C99}}</td>
                        <td>{{$item->PP04D_COD}}</td>
                        <td>{{$item->PP04G}}</td>
                        <td>{{$item->PP05B2_MES}}</td>
                        <td>{{$item->PP05B2_ANO}}</td>
                        <td>{{$item->PP05B2_DIA}}</td>
                        <td>{{$item->PP05C_1}}</td>
                        <td>{{$item->PP05C_2}}</td>
                        <td>{{$item->PP05C_3}}</td>
                        <td>{{$item->PP05E}}</td>
                        <td>{{$item->PP05F}}</td>
                        <td>{{$item->PP05H}}</td>
                        <td>{{$item->PP06A}}</td>
                        <td>{{$item->PP06C}}</td>
                        <td>{{$item->PP06D}}</td>
                        <td>{{$item->PP06E}}</td>
                        <td>{{$item->PP06H}}</td>
                        <td>{{$item->PP07A}}</td>
                        <td>{{$item->PP07C}}</td>
                        <td>{{$item->PP07D}}</td>
                        <td>{{$item->PP07E}}</td>
                        <td>{{$item->PP07F1}}</td>
                        <td>{{$item->PP07F2}}</td>
                        <td>{{$item->PP07F3}}</td>
                        <td>{{$item->PP07F4}}</td>
                        <td>{{$item->PP07F5}}</td>
                        <td>{{$item->PP07G1}}</td>
                        <td>{{$item->PP07G2}}</td>
                        <td>{{$item->PP07G3}}</td>
                        <td>{{$item->PP07G4}}</td>
                        <td>{{$item->PP07G_59}}</td>
                        <td>{{$item->PP07H}}</td>
                        <td>{{$item->PP07I}}</td>
                        <td>{{$item->PP07J}}</td>
                        <td>{{$item->PP07K}}</td>
                        <td>{{$item->PP08D1}}</td>
                        <td>{{$item->PP08D4}}</td>
                        <td>{{$item->PP08F1}}</td>
                        <td>{{$item->PP08F2}}</td>
                        <td>{{$item->PP08J1}}</td>
                        <td>{{$item->PP08J2}}</td>
                        <td>{{$item->PP08J3}}</td>
                        <td>{{$item->PP09A}}</td>
                        <td>{{$item->PP09A_ESP}}</td>
                        <td>{{$item->PP09B}}</td>
                        <td>{{$item->PP09C}}</td>
                        <td>{{$item->PP09C_ESP}}</td>
                        <td>{{$item->PP10A}}</td>
                        <td>{{$item->PP10C}}</td>
                        <td>{{$item->PP10D}}</td>
                        <td>{{$item->PP10E}}</td>
                        <td>{{$item->PP11A}}</td>
                        <td>{{$item->PP11B_COD}}</td>
                        <td>{{$item->PP11B1}}</td>
                        <td>{{$item->PP11B2_MES}}</td>
                        <td>{{$item->PP11B2_ANO}}</td>
                        <td>{{$item->PP11B2_DIA}}</td>
                        <td>{{$item->PP11C}}</td>
                        <td>{{$item->PP11C99}}</td>
                        <td>{{$item->PP11D_COD}}</td>
                        <td>{{$item->PP11G_ANO}}</td>
                        <td>{{$item->PP11G_MES}}</td>
                        <td>{{$item->PP11G_DIA}}</td>
                        <td>{{$item->PP11L}}</td>
                        <td>{{$item->PP11L1}}</td>
                        <td>{{$item->PP11M}}</td>
                        <td>{{$item->PP11N}}</td>
                        <td>{{$item->PP11O}}</td>
                        <td>{{$item->PP11P}}</td>
                        <td>{{$item->PP11Q}}</td>
                        <td>{{$item->PP11R}}</td>
                        <td>{{$item->PP11S}}</td>
                        <td>{{$item->PP11T}}</td>
                        <td>{{$item->P21()}}</td>
                        <td>{{$item->P47T()}}</td>
                        <td>{{$item->nolaboral->V2_M}}</td>
                        <td>{{$item->nolaboral->V3_M}}</td>
                        <td>{{$item->nolaboral->V4_M}}</td>
                        <td>{{$item->nolaboral->V5_M}}</td>
                        <td>{{$item->nolaboral->V8_M}}</td>
                        <td>{{$item->nolaboral->V9_M}}</td>
                        <td>{{$item->nolaboral->V10_M}}</td>
                        <td>{{$item->nolaboral->V11_M}}</td>
                        <td>{{$item->nolaboral->V12_M}}</td>
                        <td>{{$item->nolaboral->V18_M}}</td>
                        <td>{{$item->nolaboral->V19_AM}}</td>
                        <th>{{$item->nolaboral->V21_M}}</th>
                        <td>{{$item->ingresosNoLaborales()}}</td>
                        <td>{{$item->hogar->itf()}}</td>

                        <td>{{$item->hogar->ipcf()}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

</body>
</html>








