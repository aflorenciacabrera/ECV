@extends('layouts.app')
@section('content')

<script src="{{asset('js/individuos.js')}}"></script>
<script>

rol = "{!! Auth::user()->rol !!}"
console.log(rol);


</script>
/<script>
/**
 * Autocompletar mas rapido por JS que por blade un bajon
 * */
$(document).ready(function(){

    individuo = ({!!  $individuo !!})//paso de laravel a javascript
    console.log(individuo);
    //reviso cuando corresponde con el nomnbre
    $('#form input, #form textarea').each(function(e){
        input = $(this);
        name = input.attr('name');
        //ver si el name esta en el hogar
        if(individuo[name])//si existe es porque es true
        {
            //entonce relleno el campo
            input.val(individuo[name])
            updateAll();
        }
        else
        {
            console.log("No existe campo para "+name);
        }
    })
    $('#form select').each(function(e){
        input = $(this);
        name = input.attr('name');
        //ver si el name esta en el hogar
        if(individuo[name])//si existe es porque es true
        {
            //entonce relleno el campo
            input.val(individuo[name])
            updateAll();
        }
        else
        {
              console.log("No existe campo para "+name);
        }
    })


 })
</script>
<script>
// para generar el diccionario borrar nomas
$(document).ready(function(){

    // pa la migracion
    migracion=""

    $("input,textarea,select").each(function(){
        migracion +="$table->text('"+$(this).attr("name")+"')->nullable();"
    })

    $(".form-control").addClass('form-control-sm')

    // console.log(migracion)
})
</script>

<div class="container-fluid">
    <div class="card">
            <div class="card-header text-center">
                <h3>Formulario Individuo</h3>
            <h4>Area: {{$individuo->hogar->codigo_area}} - N° Listado: {{$individuo->hogar->numero_listado}} - Vivienda: {{$individuo->hogar->numero_vivienda}} - Hogar: {{$individuo->hogar->numero_hogar}}</h4>
            <h4>Semana: {{$individuo->hogar->numero_semana}} - Trimestre: {{$individuo->hogar->trimestre}}</h4>
            <h4>Nro Componente: {{$individuo->numero_componente}} -  {{$individuo->nombre}}</h4>
            </div>


           </div>
        <form method="POST" action="{{route('crearEncuestaIndividuo')}}" id="form">
        <input type="hidden" name="individuo_id" value="{{$individuo->id}}">
            @csrf
        <div class="bs-stepper ">
            <div class="card ">
                <div class="card-header ">
                    <div class="bs-stepper-header " role="tablist">
                    <!-- your steps here -->
                        {{-- <div class="line"></div> --}}
                    <div class="step" data-target="#seccion_1">
                        <button type="button" class="step-trigger" role="tab" aria-controls="seccion_1" id="seccion_1-trigger">
                            <span class="bs-stepper-circle">I</span>
                               <span class="bs-stepper-label"></span>
                        </button>
                    </div>
                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_1">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_1" id="parte_1-trigger">
                                <span class="bs-stepper-circle">1</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_2">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_2" id="parte_2-trigger">
                                <span class="bs-stepper-circle">2</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_3">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_3" id="parte_3-trigger">
                                <span class="bs-stepper-circle">3</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_4">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_4" id="parte_4-trigger">
                                <span class="bs-stepper-circle">4</span>
                                   <span class="bs-stepper-label"></span>

                            </button>
                        </div>

                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_5">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_5" id="parte_5-trigger">
                                <span class="bs-stepper-circle">5</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_6">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_6" id="parte_6-trigger">
                                <span class="bs-stepper-circle">6</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_7">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_7" id="parte_7-trigger">
                                <span class="bs-stepper-circle">7</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_8">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_8" id="parte_8-trigger">
                                <span class="bs-stepper-circle">8</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_9">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_9" id="parte_9-trigger">
                                <span class="bs-stepper-circle">9</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_10">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_10" id="parte_10-trigger">
                                <span class="bs-stepper-circle">10</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_11">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_11" id="parte_11-trigger">
                                <span class="bs-stepper-circle">11</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_12">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_12" id="parte_12-trigger">
                                <span class="bs-stepper-circle">12</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                         {{-- <div class="line"></div> --}}
                        <div class="step" data-target="#parte_13">
                            <button type="button" class="step-trigger" role="tab" aria-controls="parte_13" id="parte_13-trigger">
                                <span class="bs-stepper-circle">13</span>
                                   <span class="bs-stepper-label"></span>
                            </button>
                        </div>
                    </div>
    <div class="line"></div>
                </div>
                <div class="card-body">
                    <div class="bs-stepper-content">
                    <!-- your steps content here -->
                        <div id="seccion_1" class="content" role="tabpanel"  data-paso="1" aria-labelledby="seccion_1-trigger">
                            @include('encuestaIndividuo.seccion_1')
                        </div>
                        <div id="parte_1" class="content" role="tabpanel"  data-paso="2" aria-labelledby="parte_1-trigger">
                            @include('encuestaIndividuo.parte_1')
                        </div>
                        <div id="parte_2" class="content" role="tabpanel"  data-paso="3" aria-labelledby="parte_2-trigger">
                            @include('encuestaIndividuo.parte_2')
                        </div>
                        <div id="parte_3" class="content" role="tabpanel"  data-paso="4" aria-labelledby="parte_3-trigger">
                            @include('encuestaIndividuo.parte_3')
                        </div>
                        <div id="parte_4" class="content" role="tabpanel"  data-paso="5" aria-labelledby="parte_4-trigger">
                            @include('encuestaIndividuo.parte_4')
                        </div>
                        <div id="parte_5" class="content" role="tabpanel"  data-paso="6" aria-labelledby="parte_5-trigger">
                            @include('encuestaIndividuo.parte_5')
                        </div>
                         <div id="parte_6" class="content" role="tabpanel"  data-paso="7" aria-labelledby="parte_6-trigger">
                            @include('encuestaIndividuo.parte_6')
                        </div>
                        <div id="parte_7" class="content" role="tabpanel"  data-paso="8" aria-labelledby="parte_7-trigger">
                            @include('encuestaIndividuo.parte_7')
                        </div>
                         <div id="parte_8" class="content" role="tabpanel"  data-paso="9" aria-labelledby="parte_8-trigger">
                            @include('encuestaIndividuo.parte_8')
                        </div>
                         <div id="parte_9" class="content" role="tabpanel"  data-paso="10" aria-labelledby="parte_9-trigger">
                            @include('encuestaIndividuo.parte_9')
                        </div>
                         <div id="parte_10" class="content" role="tabpanel"  data-paso="11" aria-labelledby="parte_10-trigger">
                            @include('encuestaIndividuo.parte_10')
                        </div>
                         <div id="parte_11" class="content" role="tabpanel"  data-paso="12" aria-labelledby="parte_11-trigger">
                            @include('encuestaIndividuo.parte_11')
                        </div>
                         <div id="parte_12" class="content" role="tabpanel"  data-paso="13" aria-labelledby="parte_12-trigger">
                            @include('encuestaIndividuo.parte_12')
                        </div>

                        <div id="parte_13" class="content" role="tabpanel"  data-paso="14" aria-labelledby="sparte_13-trigger">
                            @include('encuestaIndividuo.parte_13')
                            <button type="submit" id="btn_guardar" class="btn btn-success btn-lg">GUARDAR</button>
                        </div>

                    </div>
                </div>
                <div class="card-footer fixed-bottom">
                <button class="btn btn-primary btn-lg back" >Atras</button>
                <button class="btn btn-primary btn-lg next" >Siguiente</button>
                </div>
            </div>


        </div>
        </form>


</div>
@endsection
