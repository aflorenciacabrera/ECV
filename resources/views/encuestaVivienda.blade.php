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
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse2P1" aria-expanded="false" aria-controls="collapse2P1">
                                                 PARTICIPACIÓN.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2P1" class="collapse " aria-labelledby="heading2P1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.participacion')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse3P1" aria-expanded="false" aria-controls="collapse3P1">
                                             PARTICIPACIÓN - Sección #3  - III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES.
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3P1" class="collapse " aria-labelledby="heading3P1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_3_participacion')
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
                           <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Sección #7 - VII. CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse7" class="collapse " aria-labelledby="heading7" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_7')
                                        </div>
                                  </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Sección #8 - VIII. CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS, RECHAZOS Y OTRAS CAUSAS
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse8" class="collapse " aria-labelledby="heading8" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaVivienda.seccion_8')
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
