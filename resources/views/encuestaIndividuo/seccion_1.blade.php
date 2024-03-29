{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
  <div class="container-fluid">
        <div class="form-row">
                <div class="form-group col-md-2">
                <label for="Entrev_realiz">Entrevista Realizada</label></div>
                <div class="form-group col-md-2">
                <select class="form-control" name="Entrev_realiz" id="Entrev_realiz" onchange="setEntrevistaRealizada(this.value)"  required>
                        <option value=""> </option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                </select>
                </div>
       </div>
        <div class="pull-right">
           <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="numero_componente">N° de componente </label>
                    <label for="numero_respondente">Respondente</label></br>
                    <label for="nombre_respondente">Nombre</label>
                </div>
                <div class="form-group col-md-4">
                        <input type="number" class="form-control" step="1"   name="numero_componente" id="numero_componente" disabled>
                        <input type="hidden" class="form-control" name="numero_componente" id="numero_componente">
                        <input type="number" class="form-control" step="1"   name="numero_respondente" id="numero_respondente">
                        <input type="text" class="form-control" name="nombre_respondente" id="nombre_respondente">
                </div>
                <br>
        </div>
        </div>
  </div>
<br><br><br>
        <div class="form-row col-md-12">
            <div class="form-group col-md-2">
                <label for="codigo_area">Código de área</label>
                <input type="number" class="form-control" id="codigo_area" disabled name="codigo_area" aria-describedby="codigo_area" placeholder=" " step="1"   >
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>
            <div class="form-group col-md-2">
                <label for="numero_listado">Nº en el listado</label>
                <input type="number" class="form-control" id="numero_listado" disabled name="numero_listado" aria-describedby="codigo_area" placeholder=" " step="1"   >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_semana">Semana Nº</label>
                <input type="number" class="form-control" id="numero_semana" disabled name="numero_semana" placeholder="" step="1"   >
            </div>
            <div class="form-group col-md-1">
                    <label for="trimestre">Trimestre</label>
             <input type="number" class="form-control" id="trimestre" disabled name="trimestre" placeholder="" step="1"   max="9" >
            </div>
            <div class="form-group col-md-1">
                   <label for="anio">Año</label>
                 <input type="number" class="form-control" id="ano4" disabled name="ano4" placeholder="" step="1"   max="9999" >
            </div>
            <div class="form-group col-md-2">
                    <label for="numero_vivienda">Vivienda Nº</label>
                <input type="number" class="form-control" id="numero_vivienda" disabled name="numero_vivienda" placeholder="" step="1"   >
            </div>
            <div class="form-group col-md-2">
                  <label for="numero_hogar">Hogar Nº</label>
                 <input type="number" class="form-control" id="numero_hogar" disabled name="numero_hogar" placeholder="" step="1"   >
            </div>
        </div>
</div>
{{--
@endsection --}}
