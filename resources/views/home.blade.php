@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">
                   <h3> <p>Encuesta de Calidad de Vida</p></h3>
                        
                </div> --}}

                {{-- <div class="card-body"> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{-- @if(Auth::user()->hasRole('super'))
                        <div>Acceso como Supervisor</div>
                    @else
                        <div>Acceso Encuestador</div>
                    @endif --}}
                    <div class="jumbotron ">
                        <h1 class="display-5 text-center">Menú</h1>
                            <p class="lead"></p>
                            <hr class="my-4">
                        <div class="row justify-content-center">
                            <a href="{{route('verEncuestaVivienda')}}" role="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Encuesta Vivienda</a> &nbsp;
                            <a href="{{route('verEncuestaHogar')}}" role="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Encuesta Hogar</a>&nbsp;
                            <a href="{{route('verEncuestaIndividuo')}}" role="button" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"> Encuesta Individuo</a>
                        </div>
                    </div>
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
