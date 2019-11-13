@extends('layouts.app')
@section('content')
@if($editar)
<script>
    var editar = true;
    $(document).ready(function(){
        console.log("AUTORELLENAR PARA EDICION")
        individuo = ({!!  $vivienda !!})//paso de laravel a javascript
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
            update();

        }
        else
        {
            console.log(name);
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
            update();
        }
         console.log(name);
    })

    // update validation
    function update()
{
    update_participacion();
    update_seccion_3()
    update_seccion_4();
    actualizar_seccion_5();

}


})
</script>
@else
<script>
editar = false;
</script>
@endif
<script>

rol = "{!! Auth::user()->rol !!}"
console.log("ROL: "+rol);


</script>
<script src="{{asset('js/viviendas.js')}}"></script>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Formulario Vivienda</h3>
        </div>
    </div>
        <form method="POST" id="form"

        @if($editar)
        action="{{route('actualizarVivienda')}}"
        @else
        action="{{route('crearEncuestaVivienda')}}"
        @endif
        >
            @csrf

            @if ($editar)
                <input type="hidden" name="vivienda_id" value="{{$vivienda->id}}">
            @endif
        <div class="bs-stepper ">
            <div class="card ">
                <div class="card-header ">
                    <div class="bs-stepper-header " role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#seccion_1">
                        <button type="button" class="step-trigger" role="tab" aria-controls="seccion_1" id="seccion_1-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">Identificación</br> Ubicación</span>
                        </button>
                    </div>
                    <div class="line"></div>
                        <div class="step" data-target="#seccion_2">
                            <button type="button" class="step-trigger" role="tab" aria-controls="seccion_2" id="seccion_2-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Participacion</span>
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
                                <span class="bs-stepper-circle">5-6</span>
                                <span class="bs-stepper-label">Condición de Residencia </br> Control de Cambios</span>

                            </button>
                        </div>

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
                            <h3 class="card-title">I. Identificación</h3>
                            @include('encuestaVivienda.seccion_1')
                            <h3 class="card-title">II. Ubicación</h3>
                            @include('encuestaVivienda.seccion_2')
                        </div>
                        <div id="seccion_2" class="content" role="tabpanel" aria-labelledby="seccion_2-trigger">
                            {{--  --}}
                            @include('encuestaVivienda.participacion')
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
                <div class="card-footer text-muted fixed-bottom">
                <button class="btn btn-primary btn-lg back" >Atras</button>
                <button class="btn btn-primary btn-lg next" >Siguiente</button>
                </div>
            </div>


        </div>
        </form>


</div>
@endsection
