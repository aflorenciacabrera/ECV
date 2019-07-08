{{-- @extends('layouts.app')
@section('content') --}}
  <div class="container-fluid">
          <div class="pull-right">
           <div class="form-row">
         
                <div class="form-group col-md-4">
                        <label for="">N° de componente </label>    <label for=""> Respondente</label> 
                </div>
                <div class="form-group col-md-2">
                        <input type="text" class="form-control"> <input type="text" class="form-control"> 
                </div><br>
                <div class="form-group col-md-2">
                        <input type="text" class="form-control"> <input type="text" class="form-control"> 
                </div>
        </div>
        </div>
  </div>
       

<br><br><br>
<div class="card-body">   
        <div class="form-row col-md-12">
            <div class="form-group col-md-2">
                    <label for="codigo_area">Código de área:</label>
                    <input type="number" class="form-control" id="" name="codigo_area" aria-describedby="codigo_area" placeholder=" " step="1" min="0" >
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>       
            <div class="form-group col-md-2">
                    <label for="numero_listado">Nº en el listado:</label>
                    <input type="number" class="form-control" id="" name="numero_listado" placeholder="" step="1" min="0"  >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_semana">Semana Nº:</label>
            <input type="number" class="form-control" id="" name="numero_semana" placeholder="" step="1" min="0" >
            </div>
            <div class="form-group col-md-1">
                    <label for="numero_semana">Trimestre:</label>
            <input type="text" class="form-control" id="" name="trimestre" placeholder="" >
            </div>
            <div class="form-group col-md-1">
                    <label for="numero_semana">Año:</label>
            <input type="number" class="form-control" id="" name="anio" placeholder="" step="1" min="0" max="9999" >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_semana">Vivienda N°:</label>
            <input type="number" class="form-control" id="" name="numero_vivienda" placeholder="" step="1" min="0" max="" >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_semana">Hogar N°:</label>
            <input type="number" class="form-control" id="" name="numero_hogar" placeholder="" step="1" min="0" max="" >
            </div>
        </div>          
</div>
{{--             
@endsection --}}