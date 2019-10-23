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







    <style>
        .fit {
            white-space: nowrap;
        }
    </style>
    <script>

        $(document).ready(function () {




        });
    </script>
</head>

<body>

    <div class="container-fluid">
        <h4>Indicadores</h4>
        <div class="row text-center">
            <div class=" border col-md-6 ">

                {{$totales}}
                <p><strong>Totales</strong></p>
            </div>
            <div class=" border col-md-6">

                {{$total_individuales}}
                <p><strong>Totales Individuales</strong></p>
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-12">


                {{$efectivas}}/{{$totales}}
                ({{round(($efectivas / $totales)*100)}}%)
                <p><strong>Efectivas</strong></p>

            </div>
        </div>
        <div class="row text-center">
             <div class=" border col-md-3">
                 {{$con_respuesta}}/{{$efectivas}}
                    ({{round(($con_respuesta / $efectivas)*100)}}%)
                 <p><strong>Con Respuestas</strong></p>
            </div>
            <div class=" border col-md-5">
                {{$completos}}/ {{$con_respuesta}}
                <p><strong>Completas</strong></p>
            </div>
            <div class=" border col-md-4">
                {{$incompletos}}/ {{$con_respuesta}}
                <p><strong>Incompletas</strong></p>
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-3">

                {{$sin_respuesta}}/{{$efectivas}}
                ({{round(($sin_respuesta / $efectivas)*100)}}%)
                <p><strong>Sin Respuesta</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$ausencias}}/{{$sin_respuesta}}
                <p><strong>Ausencias</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$rechazos}}/{{$sin_respuesta}}
                <p><strong>Rechazos</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$otros}}/{{$sin_respuesta}}
                <p><strong>Otros</strong></p>
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-12">

                {{$no_efectivas}}/{{$totales}}
                ({{round(($no_efectivas / $totales)*100)}}%)
                <p><strong>No Efectivas</strong></p>
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-3">
                {{$deshabitada}}/{{$no_efectivas}}
                <p><strong>Deshabitada</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$demolida}}/{{$no_efectivas}}
                <p><strong>Demolida</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$fin_de_semana}}/{{$no_efectivas}}
                <p><strong>Fin de semana</strong></p>
            </div>
            <div class=" border col-md-3">
                {{$construccion}}/{{$no_efectivas}}
                <p><strong>Construccion</strong></p>
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-6">
                {{$establecimiento}}/{{$no_efectivas}}
                <p><strong>Establecimiento</strong></p>
            </div>
            <div class=" border col-md-6">
                {{$variacion}}/{{$no_efectivas}}
                <p><strong>Variación del listado</strong></p>
            </div>
        </div>


        </div>
    </div>

</body>

</html>
