@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Cargar Encuesta de Vivienda                       
                </div>
                <div class="card-body">
                    {{-- Alert mesaje --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('crearencuestaHogar')}}">
                        @csrf
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
