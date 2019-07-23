@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                        <label for="" class="d-flex justify-content-center" >Cargar Encuesta de Individual  </label>
                </div>
                <div class="card-body">
                    {{-- Alert mesaje --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     {{-- <form method="POST" action="{{url('encuesta/Vivienda/crear')}}"> --}}
                    <form method="POST" action="{{route('crearEncuestaIndividuo')}}">
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
                                        @include('encuestaIndividuo.seccion_1')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep1" aria-expanded="false" aria-controls="collapsep1">
                                        <h3>1 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep1" class="collapse " aria-labelledby="headingp1" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_1')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep2" aria-expanded="false" aria-controls="collapsep2">
                                        <h3>2 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep2" class="collapse " aria-labelledby="headingp2" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_2')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep3" aria-expanded="false" aria-controls="collapsep3">
                                        <h3>3 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep3" class="collapse " aria-labelledby="headingp3" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_3')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep4" aria-expanded="false" aria-controls="collapsep4">
                                        <h3>4 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep4" class="collapse " aria-labelledby="headingp4" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_4')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep5" aria-expanded="false" aria-controls="collapsep5">
                                        <h3>5 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep5" class="collapse " aria-labelledby="headingp5" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_5')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep6" aria-expanded="false" aria-controls="collapsep6">
                                        <h3>6 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep6" class="collapse " aria-labelledby="headingp6" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_6')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep7" aria-expanded="false" aria-controls="collapsep7">
                                        <h3>7 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep7" class="collapse " aria-labelledby="headingp7" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_7')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep8" aria-expanded="false" aria-controls="collapsep8">
                                        <h3>8 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep8" class="collapse " aria-labelledby="headingp8" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_8')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep9" aria-expanded="false" aria-controls="collapsep9">
                                        <h3>9 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep9" class="collapse " aria-labelledby="headingp9" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_9')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep10" aria-expanded="false" aria-controls="collapsep10">
                                        <h3>10 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep10" class="collapse " aria-labelledby="headingp10" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_10')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep11" aria-expanded="false" aria-controls="collapsep11">
                                        <h3>11 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep11" class="collapse " aria-labelledby="headingp11" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_11')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep12" aria-expanded="false" aria-controls="collapsep12">
                                        <h3>12 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep12" class="collapse " aria-labelledby="headingp12" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_12')
                                    </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapsep13" aria-expanded="false" aria-controls="collapsep13">
                                        <h3>13 _____________________________________________________________________</h3>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsep13" class="collapse " aria-labelledby="headingp13" data-parent="#accordionExample">
                                    <div class="card-body">
                                        @include('encuestaIndividuo.parte_13')
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
