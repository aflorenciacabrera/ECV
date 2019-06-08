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
                    
                    @if(Auth::user()->hasRole('super'))
                        <div>Acceso como Supervisor</div>
                    @else
                        <div>Acceso Encuestador</div>
                    @endif
                    
                    <input type="datetime-local" name="fechayhora"  step="1"  >
                    Fecha y hora actual: <input type="datetime-local" name="fechahora" step="1"  value="">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
