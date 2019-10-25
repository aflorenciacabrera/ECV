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
    <form method="POST" action="{{route('recupero')}}">
          @csrf
            <div class="row">
                 <div class="col-md-1">
            ano4
            <input type="number" name="ano4" class="form-control" value=2019 required>
        </div>
                 <div class="col-md-1">
            trimestre
            <input type="number" name="trimestre" class="form-control" value=3 required>
        </div>
       
        <div class="col-md-1">
            codigo_area
            <input type="number" name="codigo_area" class="form-control" required>
        </div>
        <div class="col-md-1">
            numero_listado
            <input type="number" name="numero_listado" class="form-control" required>
        </div>   
        <div class="col-md-1">
            manz
            <input type="number" name="manz" class="form-control" required>
        </div>
        <div class="col-md-1">
            lado
            <input type="number" name="lado" class="form-control" required>
        </div>
         <div class="col-md-1">
            numero_vivienda
            <input type="number" name="numero_vivienda" class="form-control" value=1 required>
        </div>
        <div class="col-md-1">
            numero_hogar
            <input type="number" name="numero_hogar" class="form-control" value=1 required>
        </div>
         <div class="col-md-1">
            <br>
            <input type="submit" class="btn btn-success" value="Buscar">
        </div>
            
            </div>

        </form>
    </div>

</body>
</html>