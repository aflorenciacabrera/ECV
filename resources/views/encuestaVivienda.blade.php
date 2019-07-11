@extends('layouts.app')
@section('content')

<script>
$(document).ready(function () {
  var stepper = new Stepper($('.bs-stepper')[0])

  $(".next").click(function(e){
      e.preventDefault();
      stepper.next();
  })

   $(".back").click(function(e){
      e.preventDefault();
      stepper.previous();
  })
})
</script>
<div class="container-fluid">
        <form method="POST" action="{{route('crearEncuestaVivienda')}}">
            @csrf
        <div class="bs-stepper ">
            <div class="card ">
                <div class="card-header ">
                    <div class="bs-stepper-header " role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#seccion_1">
                        <button type="button" class="step-trigger" role="tab" aria-controls="seccion_1" id="seccion_1-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Identificación</span>
                        </button>
                    </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_2">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_2" id="seccion_2-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Ubicación</span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_3">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_3" id="seccion_3-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Identificación de </br> Viviendas y Hogares</span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_4">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_4" id="seccion_4-trigger">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Características de </br> la Vivienda</span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_5">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_5" id="seccion_5-trigger">
                                <span class="bs-stepper-circle">5/6</span>
                                <span class="bs-stepper-label">Condición de Residencia </br> Control de Cambios</span>

                            </button>
                        </div>
                    {{-- <div class="line"></div>
                        <div class="step" data-target="#seccion_6">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_6" id="seccion_6-trigger">
                                <span class="bs-stepper-circle">6</span>
                                <span class="bs-stepper-label">Ubicación</span>
                            </button>
                        </div> --}}
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_7">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_7" id="seccion_7-trigger">
                                <span class="bs-stepper-circle">7</span>
                                <span class="bs-stepper-label">Causas</span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_8">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_8" id="seccion_8-trigger">
                                <span class="bs-stepper-circle">8</span>
                                <span class="bs-stepper-label-">Control de Campo</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="bs-stepper-content">
                    <!-- your steps content here -->
                        <div id="seccion_1" class="content" role="tabpanel" aria-labelledby="seccion_1-trigger">
                            @include('encuestaVivienda.seccion_1')
                        </div>
                        <div id="seccion_2" class="content" role="tabpanel" aria-labelledby="seccion_2-trigger">
                            @include('encuestaVivienda.seccion_2')
                        </div>
                        <div id="seccion_3" class="content" role="tabpanel" aria-labelledby="seccion_3-trigger">
                            @include('encuestaVivienda.seccion_3_participacion')
                        </div>
                        <div id="seccion_4" class="content" role="tabpanel" aria-labelledby="seccion_4-trigger">
                            @include('encuestaVivienda.seccion_4')
                        </div>
                        <div id="seccion_5" class="content" role="tabpanel" aria-labelledby="seccion_5-trigger">
                            @include('encuestaVivienda.seccion_5-6')
                        </div>
                        <div id="seccion_7" class="content" role="tabpanel" aria-labelledby="seccion_7-trigger">
                            @include('encuestaVivienda.seccion_7')
                        </div>
                        <div id="seccion_8" class="content" role="tabpanel" aria-labelledby="seccion_8-trigger">
                            @include('encuestaVivienda.seccion_8')
                            <button type="submit" class="btn btn-success btn-lg">GUARDAR</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                <button class="btn btn-primary btn-lg back" >Atras</button>
                <button class="btn btn-primary btn-lg next" >Siguiente</button>
                </div>
            </div>


        </div>
        </form>


    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                        <label for="" class="d-flex justify-content-center" >Cargar Encuesta de Vivienda  </label>
                </div>
                <div class="card-body">



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
    </div> --}}
</div>
@endsection
