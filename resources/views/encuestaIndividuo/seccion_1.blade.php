{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-3">
                    <label for="codigo_area">Código de área:</label>
                    <input type="text" class="form-control" id="" name="codigo_area" aria-describedby="codigo_area" placeholder=" " >
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>       
            <div class="form-group col-md-3">
                    <label for="numero_listado">Nº en el listado:</label>
                    <input type="text" class="form-control" id="" name="numero_listado" placeholder="" >
            </div>
            <div class="form-group col-md-3">
                    <label for="numero_semana">Vivienda Nº:</label>
            <input type="text" class="form-control" id="" name="numero_vivienda" placeholder="" >
            </div>
            <div class="form-group col-md-3">
                    <label for="numero_semana">Semana Nº:</label>
            <input type="text" class="form-control" id="" name="numero_semana" placeholder="" >
            </div>
        </div>   
       
        <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="anio">Grupo Rotación:</label>
                    <input type="text" class="form-control" id="" name="grupo_rotacion" placeholder="" >
                </div>
                <div class="form-group col-md-3">
                        <label for="numero_hogar">Teléfonos:</label>
                    <label for="respondiente">Hogar 1:</label>
                    <input type="text" class="form-control" id="" name="hogar1" placeholder="" >
                    
                </div>
                <div class="form-group col-md-3">
                        <label for="numero_hogar">Teléfonos:</label>
                    
                    <label for="respondiente">Hogar 2:</label>
                    <input type="text" class="form-control" id="" name="hogar2" placeholder="" >
                </div>
        </div>   
       
    </div>
            
{{-- 

@endsection --}}