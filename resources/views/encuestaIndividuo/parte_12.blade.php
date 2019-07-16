{{-- @extends('layouts.app')
@section('content') --}}
Ingresos de Otras Ocupaciones
<div class="card-body">
<div class="row border">
    <div class="col-md-10">
        <div class="form-group form-inline">
        <label>Por el mes de</label>
    <select name="seccion_12_mes" id="" class="form-control form-control-sm">
        <option value=""></option>
        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">Junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosto</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
    </select>
    <label>cobró ingresos por algún trabajo/changa, o por otras ocupación/es?
    </label>
    <label class="text-muted">
        (Incluye ocupacion secundaria y otras ocupaciones previas a la semana de
referencia)
    </label>
    </div>

    </div>
    <div class="col-md-2">
        <div class="form-group form-inline">
            <label for="PP12A">Si/No</label>
            <select name="PP12A" id="PP12A" class="form-control form-control-sm">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
    </div>
</div>
<div class="row border">

<table class="table table-sm table-stripped">
    <thead>
        <tr>
            <th>¿Cuanto Cobro por ...?</th>
            <th>Trabajando para un patrón/negocio o empresa </br> <label class="text-muted">(incluye ayuda en negocio)</br></th>
            <th>Trabajando para su propio negocio/actividad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1. Ocupación secundaria y otras
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B1">$</label>
                   <input type="number" name="PP12B1" id="PP12B1" class="form-control form-control-sm">
               </div>
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B12">$</label>
                   <input type="number" name="PP12B12" id="PP12B12" class="form-control form-control-sm">
                   {{-- TODO Diccionario --}}
               </div>
            </td>
        </tr>
        <tr>
            <td>
                2. Ocupación previa a la semana de referencia </br>
                (del mes de referenecia)
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B2">$</label>
                   <input type="number" name="PP12B2" id="PP12B2" class="form-control form-control-sm">
               </div>
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B22">$</label>
                   <input type="number" name="PP12B22" id="PP12B22" class="form-control form-control-sm">
                   {{-- TODO Diccionario --}}
               </div>
            </td>
        </tr>
        <tr>
            <td>
                3. Otras deudas / retroactivos </br>(por trabajos anteriores al mes de referencia)
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B3">$</label>
                   <input type="number" name="PP12B3" id="PP12B3" class="form-control form-control-sm">
               </div>
            </td>
            <td>
               <div class="form-group form-inline">
                   <label for="PP12B32">$</label>
                   <input type="number" name="PP12B32" id="PP12B32" class="form-control form-control-sm">
                   {{-- TODO Diccionario --}}
               </div>
            </td>
        </tr>
    </tbody>
</table>

</div>


</div>
{{-- @endsection --}}
