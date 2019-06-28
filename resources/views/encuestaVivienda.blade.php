@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                        <label for="" class="d-flex justify-content-center" >Cargar Encuesta de Vivienda  </label>                            
                </div>
                <div class="card-body">
                    {{-- Alert mesaje --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     {{-- <form method="POST" action="{{url('encuesta/Vivienda/crear')}}"> --}}
                    <form method="POST" action="{{route('crearEncuestaVivienda')}}">
                        @csrf
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Sección #1 - I. IDENTIFICACIÓN
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaVivienda.seccion_1')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Sección #2 - II. UBICACIÓN.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_2')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse2P1" aria-expanded="false" aria-controls="collapse2P1">
                                                PRIMERA PARTICIPACIÓN.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2P1" class="collapse " aria-labelledby="heading2P1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.1_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3P1" aria-expanded="false" aria-controls="collapse3P1">
                                            PRIMERA PARTICIPACIÓN - Sección #3  - III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3P1" class="collapse " aria-labelledby="heading3P1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_3_1_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse2P2" aria-expanded="false" aria-controls="collapse2P2">
                                                SEGUNDA PARTICIPACIÓN. 
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2P2" class="collapse " aria-labelledby="heading2P2" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.2_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3P2" aria-expanded="false" aria-controls="collapse3P2">
                                                    SEGUNDA PARTICIPACIÓN - Sección #3  - III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3P2" class="collapse " aria-labelledby="heading3P2" data-parent="#accordionExample">
                                        <div class="card-body">
                                                @include('encuestaVivienda.seccion_3_2_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse2P3" aria-expanded="false" aria-controls="collapse2P3">
                                                   TERCERA PARTICIPACIÓN. 
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2P3" class="collapse " aria-labelledby="heading2P3" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.3_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3P3" aria-expanded="false" aria-controls="collapse3P3">
                                                   TERCERA PARTICIPACIÓN - Sección #3  - III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3P3" class="collapse " aria-labelledby="heading3P3" data-parent="#accordionExample">
                                        <div class="card-body">
                                                @include('encuestaVivienda.seccion_3_3_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapse2P4" aria-expanded="false" aria-controls="collapse2P4">
                                                    CUARTA PARTICIPACIÓN. 
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2P4" class="collapse " aria-labelledby="heading2P4" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.4_participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3P4" aria-expanded="false" aria-controls="collapse3P4">
                                                    CUARTA PARTICIPACIÓN - Sección #3  - III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3P4" class="collapse " aria-labelledby="heading3P4" data-parent="#accordionExample">
                                        <div class="card-body">
                                                @include('encuestaVivienda.seccion_3_4_participacion')
                                        </div>
                                  </div>
                            </div>
                           
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Sección #4 - IV. CARACTERÍSTICA DE LA VIVIENDA.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="collapse " aria-labelledby="heading4" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_4')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Sección #5 - V. CODICIÓN DE RESIDENCIA Y   Sección #6 - VI. CONTROL DE CAMBIOS .
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse5" class="collapse " aria-labelledby="heading5" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_5-6')
                                        </div>
                                  </div>
                            </div>
                           
                            <div class="card-footer text-muted d-flex justify-content-end">
                                <button class="btn btn-success" type="submit">Cargar</button>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
