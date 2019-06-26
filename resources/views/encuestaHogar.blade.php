@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <label for="" class="d-flex justify-content-center" >Cargar Encuesta de Hogar  </label>                     
                </div>
                <div class="card-body">
                    {{-- Alert mesaje --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('crearEncuestaHogar')}}">
                        @csrf
                    <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                   Sección #1 - I. IDENTIFICACIÓN
                                  </button>
                                  {{-- @include('shared.errors') --}}
                                </h2>
                            </div>
                              {{-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> --}}
                                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuestaHogar.seccion_1')
                                    {{-- <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a> --}}
                                    {{-- <a href="{{ route('seccion1') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 1</a> --}}
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Sección #2 - II. CARACTERÍSTICAS HABITACIONALES DEL HOGAR (sólo para hogares que responden por primera vez o mal tomado en la
                                    participación anterior)
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuestaHogar.seccion_2')
                                    {{-- <a href="{{ route('seccion2') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 2</a> --}}
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Sección #3 - III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuestaHogar.seccion_3')  
                                  {{-- <a href="{{ route('seccion3') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 3</a> --}}
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                            Sección #4 - IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_4')
                                     {{-- <a href="{{ route('seccion4') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 4</a> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h2 class="mb-0">
                                    <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                        Sección #5 -ESTRATEGIAS DEL HOGAR
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_5')
                                        {{-- <a href="{{ route('seccion5') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 5</a> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h2 class="mb-0">
                                    <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                        Sección #6 -INGRESOS NO LABORALES
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_6')
                                        {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7">
                                    <h2 class="mb-0">
                                    <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                        HOGAR - PLANES Y PROGRAMAS GUBERNAMENTALES
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_hogar_planesyprogramas') 
                                        {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingO">
                                    <h2 class="mb-0">
                                    <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseO" aria-expanded="false" aria-controls="collapseThree">
                                        ORGANIZACIÓN DEL HOGAR
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseO" class="collapse" aria-labelledby="headingO" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_org_hogar') 
                                        {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                    </div>
                                </div>
                            </div>
                           
                            {{-- -------------------------------------------------------- --}}
                            <div class="card">
                                <div class="card-header" id="headingR">
                                    <h2 class="mb-0">
                                    <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseR" aria-expanded="false" aria-controls="collapseThree">
                                        RAZON POR LA CUAL NO SE REALIZÓ LA ENTREVISTA
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseR" class="collapse" aria-labelledby="headingR" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaHogar.seccion_razones_no_encuesta') 
                                        {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header" id="headingC">
                                        <h2 class="mb-0">
                                        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapsec" aria-expanded="false" aria-controls="collapseThree">
                                                CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS, RECHAZOS Y OTRAS CAUSAS (hogares)
                                        </button>
                                        </h2>
                                    </div>
                                    <div id="collapsec" class="collapse" aria-labelledby="headingC" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @include('encuestaHogar.seccion_recuperacion_ausencia') 
                                            {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                        </div>
                                    </div>
                                </div>
                            {{-- ------------------------------------------ --}}
                            <div class="card-footer text-muted d-flex justify-content-end">
                                {{-- <div class="col-sm-11 input-column"></div> --}}
                                  {{-- <a href="{{ url('/planilla/ver/1') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">CANCELAR</a>  </div> --}}
                                {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                                <button class="btn btn-success" type="submit">Cargar</button>  
                            </div>
                         
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
