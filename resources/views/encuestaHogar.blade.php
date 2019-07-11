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
    <a name="" id="" class="btn btn-primary" href="{{route('autogenerarVivienda')}}" role="button">GENERAR AUTOMÁTICO</a>
        <form method="POST" action="{{route('crearEncuestaHogar')}}">
            @csrf
        <div class="bs-stepper ">
            <div class="card ">
                <div class="card-header ">
                    <div class="bs-stepper-header " role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#seccion_1">
                        <button type="button" class="step-trigger" role="tab" aria-controls="seccion_1" id="seccion_1-trigger">
                            <span class="bs-stepper-circle">1</span>
                               <span class="bs-stepper-label"></span>
                        </button>
                    </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_2">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_2" id="seccion_2-trigger">
                                <span class="bs-stepper-circle">2</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_3">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_3" id="seccion_3-trigger">
                                <span class="bs-stepper-circle">3</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_4">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_4" id="seccion_4-trigger">
                                <span class="bs-stepper-circle">4</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_5">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_5" id="seccion_5-trigger">
                                <span class="bs-stepper-circle">5</span>
                                   <span class="bs-stepper-label"></span>

                            </button>
                        </div>

                    <div class="line"></div>
                        <div class="step" data-target="#seccion_6">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_6" id="seccion_6-trigger">
                                <span class="bs-stepper-circle">6</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_hogar">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_hogar" id="seccion_hogar-trigger">
                                <span class="bs-stepper-circle">7</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         <div class="line"></div>
                        <div class="step" data-target="#seccion_org">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_org" id="seccion_org-trigger">
                                <span class="bs-stepper-circle">8</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         <div class="line"></div>
                        <div class="step" data-target="#seccion_razones">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_razones" id="seccion_razones-trigger">
                                <span class="bs-stepper-circle">9</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         <div class="line"></div>
                        <div class="step" data-target="#seccion_recuperacion">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_recuperacion" id="seccion_recuperacion-trigger">
                                <span class="bs-stepper-circle">10</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="bs-stepper-content">
                    <!-- your steps content here -->
                        <div id="seccion_1" class="content" role="tabpanel" aria-labelledby="seccion_1-trigger">
                            @include('encuestaHogar.seccion_1')
                        </div>
                        <div id="seccion_2" class="content" role="tabpanel" aria-labelledby="seccion_2-trigger">
                            @include('encuestaHogar.seccion_2')
                        </div>
                        <div id="seccion_3" class="content" role="tabpanel" aria-labelledby="seccion_3-trigger">
                            @include('encuestaHogar.seccion_3')
                        </div>
                        <div id="seccion_4" class="content" role="tabpanel" aria-labelledby="seccion_4-trigger">
                            @include('encuestaHogar.seccion_4')
                        </div>
                        <div id="seccion_5" class="content" role="tabpanel" aria-labelledby="seccion_5-trigger">
                            @include('encuestaHogar.seccion_5')
                        </div>
                        <div id="seccion_6" class="content" role="tabpanel" aria-labelledby="seccion_6-trigger">
                            @include('encuestaHogar.seccion_6')
                        </div>
                        <div id="seccion_hogar" class="content" role="tabpanel" aria-labelledby="seccion_hogar-trigger">
                            @include('encuestaHogar.seccion_hogar_planes')
                        </div>
                         <div id="seccion_org" class="content" role="tabpanel" aria-labelledby="seccion_org-trigger">
                            @include('encuestaHogar.seccion_hogar_planes')
                        </div>
                        <div id="seccion_razones" class="content" role="tabpanel" aria-labelledby="seccion_razones-trigger">
                            @include('encuestaHogar.seccion_razones_no_encuesta')
                        </div>
                        <div id="seccion_recuperacion" class="content" role="tabpanel" aria-labelledby="seccion_recuperacion-trigger">
                            @include('encuestaHogar.seccion_recuperacion_ausencia')
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


</div>
@endsection
