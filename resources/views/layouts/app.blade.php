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
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
            <div class="container">
                 <a class="navbar-brand"  href="{{ url('/') }}" ><img src="{{asset('img/LOGO_ESTADISTICA_Y_CENSOS_transparente.png')}}" width="130" /></a>
                <div class="col-md-0 offset-lg-3">
                    <a class="navbar-brand"  href="{{ url('/') }}" ><img src="{{asset('img/Logo-_Encuesta_Calidad_de_Vida_Color.png')}}" width="200" /></a>
                 </div>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}                 
                   Encuesta de Calidad de Vida
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                         <div class="btn-group" role="group" aria-label="Basic example">
                           
                                <a class="btn btn-secondary active " role="button" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                          
                            @if (Route::has('register'))
                               
                                    <a class="btn btn-secondary active " role="button" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                               
                            @endif
                        </div>
                        @else
                            {{-- <a  class="nav-link" href="{{route('home')}}" role="button" >
                                INICIO <i class="fa fa-home"></i>
                            </a>
                            <li class="nav-item dropdown">    
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                              <a class="nav-link" href="{{ route('logout') }}">
                                        {{ __('Salir') }} <i class="fa fa-power-off"></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> --}}
                                   
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a id="navbarDropdown" class="btn btn-secondary active  " role="button" href="#" role="button" >
                                    {{ Auth::user()->name }} <i class="fa fa-user"></i>{{--  <span class="caret"></span> --}}
                                </a>                             
                                <a class="btn btn-secondary active" role="button" href="{{route('home')}}">INICIO <i class="fa fa-home"></i></a>

                                 <a class=" btn btn-secondary active" role="button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }} <i class="fa fa-power-off"></i>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
                                    </form>
                                </a>                                   
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
