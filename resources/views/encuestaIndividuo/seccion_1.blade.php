{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">  
  <div class="container-fluid">
        <div class="form-row">
                <div class="form-group col-md-2">
                <label for="Entrev_realiz">Entrevista Realizada</label></div>
                <div class="form-group col-md-2">
                <select class="form-control" name="Entrev_realiz" id="Entrev_realiz"  >
                        <option value=""> </option>
                        <option value="1">Si</option>
                        <option value="2" >No</option>            
                </select>  
                </div>
       </div>
        <div class="pull-right">
           <div class="form-row">
                <div class="form-group col-md-4">
                        <label for="">N° de componente </label>    <label for=""> Respondente</label> 
                </div>
                <div class="form-group col-md-2">
                        <input type="number" class="form-control" step="1" min="0" name="N_compo1" id="N_compo1"> <input type="number" class="form-control" step="1" min="0" name="N_compo2" id="N_compo2"> 
                </div><br>
                <div class="form-group col-md-2">
                        <input type="number" class="form-control" step="1" min="0" name="responde1" id="responde1"> <input type="number" class="form-control" step="1" min="0" name="responde2" id="responde2"> 
                </div>
        </div>
        </div> 
  </div>
       

<br><br><br>
 
        <div class="form-row col-md-12">
            <div class="form-group col-md-2">
                <label for="codigo_area">Código de área</label>
                <input type="number" class="form-control" id="codigo_area" name="codigo_area" aria-describedby="codigo_area" placeholder=" " step="1" min="0" >
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>       
            <div class="form-group col-md-2">
                <label for="numero_listado">Nº en el listado</label>
                <input type="number" class="form-control" id="numero_listado" name="numero_listado" aria-describedby="codigo_area" placeholder=" " step="1" min="0" >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_semana">Semana Nº</label>
                <input type="number" class="form-control" id="numero_semana" name="numero_semana" placeholder="" step="1" min="0" >
            </div>
            <div class="form-group col-md-1">
                    <label for="trimestre">Trimestre</label>
             <input type="number" class="form-control" id="trimestre" name="trimestre" placeholder="" step="1" min="0" max="9" >
            </div>
            <div class="form-group col-md-1">
                   <label for="anio">Año</label>
                 <input type="number" class="form-control" id="ano4" name="ano4" placeholder="" step="1" min="0" max="9999" >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_vivienda">Vivienda Nº</label>
                <input type="number" class="form-control" id="numero_vivienda" name="numero_vivienda" placeholder="" step="1" min="0" >
            </div>
            <div class="form-group col-md-2">
                  <label for="numero_hogar">Hogar Nº</label>
                 <input type="number" class="form-control" id="numero_hogar" name="numero_hogar" placeholder="" step="1" min="0" >
            </div>
        </div>          
</div>
{{--             
@endsection --}}