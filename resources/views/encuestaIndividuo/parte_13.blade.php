{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body border">
       <div class="form-group">
         <label for="">Observaciones</label>
         <textarea class="form-control" name="seccion_13_observaciones" id="" rows="3"></textarea>
       </div>
       <div class="row border">
        <div class="col-md-4 border ">
           <div class="row">
                <div class="col-md-6 form-inline">
                    <label for="seccion_13_encuestador">Encuestador</label>
                    <input type="text" name="seccion_13_encuestador" id="seccion_13_encuestador" class="form-control inline">
            </div>
            <div class="col-md-6 form-inline">
                <label for="seccion_13_encuestador_numero">N°</label>
                    <input type="number" min=0 step=1 name="seccion_13_encuestador_numero" id="seccion_13_encuestador_numero" class="form-control inline">
            </div>
           </div>
        </div>
        <div class="col-md-4">
            <div class="row border">
                <div class="col-md-12 text-center">Visitas</div>
                <div class="col-md-6 text-center">Fecha</div>
                <div class="col-md-6 text-center">Hora</div>
                <div class="col-md-6">
                    <div class="form-group form-inline">
                      <label for="seccion_13_fecha1">1°</label>
                      <input type="date" class="form-control form-control-sm" name="seccion_13_fecha1" id="seccion_13_fecha1">
                    </div>
                </div>
                <div class="col-md-6">
                     <input type="time" class="form-control form-control-sm" name="seccion_13_hora1" id="seccion_13_hora1">
                </div>
                <div class="col-md-6">
                    <div class="form-group form-inline">
                      <label for="seccion_13_fecha2">2°</label>
                      <input type="date" class="form-control form-control-sm" name="seccion_13_fecha2" id="seccion_13_fecha2">
                    </div>
                </div>
                <div class="col-md-6">
                     <input type="time" class="form-control form-control-sm" name="seccion_13_hora2" id="seccion_13_hora2">
                </div>

                <div class="col-md-6">
                    <div class="form-group form-inline">
                      <label for="seccion_13_fecha3">3°</label>
                      <input type="date" class="form-control form-control-sm" name="seccion_13_fecha3" id="seccion_13_fecha3">
                    </div>
                </div>
                <div class="col-md-6">
                     <input type="time" class="form-control form-control-sm" name="seccion_13_hora3" id="seccion_13_hora3">
                </div>


            </div>
        </div>
        <div class="col-md-4 border">
            <div class="form-group">
              <label for="seccion_13_modalidad">Modalidad de Aplicación</label>
              <select class="form-control" name="seccion_13_modalidad" id="">
                <option value=""></option>
                <option value="1">1. Persona Completa</option>
                <option value="2">2. Persona Telefónica</option>
                <option value="3">3. Sólo Telefónica</option>
              </select>
            </div>
        </div>
       </div>

</div>
{{-- @endsection --}}
