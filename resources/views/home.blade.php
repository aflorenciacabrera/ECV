@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                        
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{-- @if(Auth::user()->hasRole('super'))
                        <div>Acceso como Supervisor</div>
                    @else
                        <div>Acceso Encuestador</div>
                    @endif --}}
                    <div class="jumbotron">
                            <h1 class="display-4">Hello, world!</h1>
                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <hr class="my-4">
                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
                            <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
                          </div>
                    {{-- <input type="datetime-local" name="fechayhora"  step="1"  >
                    Fecha y hora actual: <input type="datetime-local" name="fechahora" step="1"  value=""> --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
