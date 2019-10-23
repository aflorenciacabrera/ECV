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
        <div class="row text-center">
            <div class=" border col-md-6 ">
                <p><strong>Totales</strong></p>
                {{$totales}}
            </div>
            <div class=" border col-md-6">
                <p><strong>Totales Individuales</strong></p>
                {{$total_individuales}}
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-12">
                <p><strong>Efectivas</strong></p>

                {{$efectivas}}/{{$totales}}
                  ({{round(($efectivas / $totales)*100)}}%)

            </div>
        </div>
        <div class="row text-center">
             <div class=" border col-md-3"><p><strong>Con Respuestas</strong></p>
                {{$con_respuesta}}/{{$totales}}
            </div>
            <div class=" border col-md-5"><p><strong>Completas</strong></p>
            {{$completos}}/ {{$con_respuesta}}
            </div>
            <div class=" border col-md-4"><p><strong>Incompletas</strong></p>
            {{$incompletos}}/ {{$con_respuesta}}
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-3">
                <p><strong>Sin Respuesta</strong></p>
                {{$sin_respuesta}}/{{$totales}}
            </div>
            <div class=" border col-md-3"><p><strong>Ausencias</strong></p>
            {{$ausencias}}/{{$sin_respuesta}}
            </div>
            <div class=" border col-md-3"><p><strong>Rechazos</strong></p>
            {{$rechazos}}/{{$sin_respuesta}}
            </div>
            <div class=" border col-md-3"><p><strong>Otros</strong></p>
            {{$otros}}/{{$sin_respuesta}}
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-12">
              <p><strong>No Efectivas</strong></p>
                {{$no_efectivas}}/{{$totales}}
                      ({{round(($no_efectivas / $totales)*100)}}%)
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-3"><p><strong>Deshabitada</strong></p>
            {{$deshabitada}}/{{$no_efectivas}}
            </div>
            <div class=" border col-md-3"><p><strong>Demolida</strong></p>
            {{$demolida}}/{{$no_efectivas}}
            </div>
            <div class=" border col-md-3"><p><strong>Fin de semana</strong></p>
            {{$fin_de_semana}}/{{$no_efectivas}}
            </div>
            <div class=" border col-md-3"><p><strong>Construccion</strong></p>
            {{$construccion}}/{{$no_efectivas}}
            </div>
        </div>
        <div class="row text-center">
            <div class=" border col-md-6"><p><strong>Establecimiento</strong></p>
            {{$establecimiento}}/{{$no_efectivas}}
            </div>
            <div class=" border col-md-6"><p><strong>Variación del listado</strong></p>
            {{$variacion}}/{{$no_efectivas}}
            </div>
        </div>


        </div>
    </div>

</body>

</html>
