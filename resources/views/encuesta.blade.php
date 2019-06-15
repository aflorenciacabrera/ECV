@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Cargar Encuesta                        
                </div>
                <div class="card-body">
                    {{-- Alert mesaje --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('crearencuesta')}}">
                        @csrf
                    <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                   Sección #1 - I. IDENTIFICACIÓN
                                  </button>
                                  {{-- @include('shared.errors') --}}
                                </h2>
                            </div>
                              {{-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> --}}
                                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuesta.seccion_1')
                                    {{-- <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a> --}}
                                    {{-- <a href="{{ route('seccion1') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 1</a> --}}
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Sección #2 - II. CARACTERÍSTICAS HABITACIONALES DEL HOGAR (sólo para hogares que responden por primera vez o mal tomado en la
                                    participación anterior)
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuesta.seccion_2')
                                    {{-- <a href="{{ route('seccion2') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 2</a> --}}
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Sección #3 - III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
                                  </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('encuesta.seccion_3')  
                                  {{-- <a href="{{ route('seccion3') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 3</a> --}}
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Sección #4 - IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuesta.seccion_4')
                                     {{-- <a href="{{ route('seccion4') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 4</a> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Sección #5 -ESTRATEGIAS DEL HOGAR
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuesta.seccion_5')
                                        {{-- <a href="{{ route('seccion5') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 5</a> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Sección #6 -INGRESOS NO LABORALES
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuesta.seccion_6')
                                        {{-- <a href="{{ route('seccion6') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sección 6</a> --}}
                                    </div>
                                </div>
                            </div>
                            @include('encuesta.seccion_hogar_planesyprogramas')
                            <div class="card-footer text-muted d-flex justify-content-end">
                                <div class="col-sm-11 input-column"></div>
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
