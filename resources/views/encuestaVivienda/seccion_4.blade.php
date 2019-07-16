{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
                <label for=""> (SÓLO PARA LA PRIMERA VEZ QUE LA VIVIENDA ES RESPUESTA O FUE MAL TOMADA EN LA PARTICIPACIÓN ANTERIOR)</label>
            <div class="form-group col-md-6">
                <label for="IV1">1. Tipo de vivienda </label>
                <small  class="form-text text-muted">(por observación)</small>
                <select class="form-control form-control-sm" name="IV1" id="IV1" >
                      <option value=""></option>
                        <option value="1">1. Casa</option>
                        <option value="2">2. Departamento</option>
                        <option value="3">3. Pieza en inquilinato</option>
                        <option value="4">4. Pieza en hotel/Pensión</option>
                        <option value="5">5. Lcal no construido para habitación</option>
                        <option value="6">6. Otros (especificar)</option>
                </select>
                <input type="text" class="form-control form-control-sm d-none" name="IV1_Esp" id="IV1_Esp" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="IV2">2. ¿Cuántos ambientes/habitaciones tiene la vivienda en total? </label>
                <small  class="form-text text-muted"> (sin contar baño/s, cocina, pasillo/s, lavadero, garage)</small>
                <input type="number" min=0 step=1 class="form-control form-control-sm" name="IV2" placeholder="" maxlength="45">
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="IV3">3 ¿Los pisos interiores son principalmente de…. </label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV3" id="IV3" >
                              <option value=""></option>
                                <option value="1">1. … Mosaico/baldosa/madera/cerámica/alfombra?</option>
                                <option value="2">2. … Cemento/ladrillo fijo?</option>
                                <option value="3">3. … Ladrillo suelto/ tierra?</option>
                                <option value="4">4. Otro material? (especificar)</option>
                        </select>
                          <input type="text" class="form-control form-control-sm d-none" name="IV3_Esp" id="IV3_Esp" placeholder="" maxlength="45">

                </div>
                <div class="form-group col-md-6">
                        <label for="IV4">4. ¿La cubierta exterior del techo es de….</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV4" id="IV4" >
                              <option value=""></option>
                                <option value="1">1. … Membrana/cubierta asfáltica?</option>
                                <option value="2">2. … Baldosa/losa sin cubierta?</option>
                                <option value="3">3. … Pizarra/teja?</option>
                                <option value="4">4. … Chapa de metal sin cubierta?</option>
                                <option value="5">5. … Chapa de fibrocemento/plástico?</option>
                                <option value="6">6. … Chapa de cartón?</option>
                                <option value="7">7. … Caña/tabla/paja con barro/paja sola?</option>
                                <option value="9">9. … N/s Depto. En Propiedad horizontal</option>
                        </select>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="IV5">5. ¿El techo tiene cielorraso/revestimiento interior? </label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV5" id="IV5"  >
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IVE">6. ¿ Tiene electricidad por red, generador, no tiene</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IVE" id="IVE" >
                              <option value=""></option>
                                <option value="1">1. … Por red?</option>
                                <option value="2">2. … Por generador?</option>
                                <option value="3">3. … No tiene?</option>
                        </select>
                </div>
        </div>
        <div class="form-row">
                 <div class="form-group col-md-6">
                        <label for="IV6">7. ¿ Tiene agua…</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV6" id="IV6" >
                              <option value=""></option>
                                <option value="1">1. … Por cañería dentro de la vivienda?</option>
                                <option value="2">2. … Fuera de la vivienda pero dentro del terreno?</option>
                                <option value="3">3. … Fuera del terreno?</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IV7">8. ¿El agua es de…</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV7" id="IV7" >
                              <option value=""></option>
                                <option value="1">1. … Red pública? (agua corriente)</option>
                                <option value="2">2. … Perforación con bomba a motor?</option>
                                <option value="3">3. … Perforación con bomba manual?</option>
                                <option value="4">4. …Otra fuente? (especificar)</option>
                        </select>
                        <input type="text" class="form-control form-control-sm d-none" name="IV7_Esp" id="IV7_Esp" placeholder="" maxlength="45">
                </div>

        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="IV8">9. ¿Tiene baño/letrina?</label>
                        {{-- <small "form-text text-muted">(a p.12)</small> --}}
                        <select class="form-control form-control-sm" name="IV8" id="IV8" >
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IV9">10. ¿El baño o letrina está….</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV9" id="IV9" >
                              <option value=""></option>
                                <option value="1">1. … Dentro de la vivienda?</option>
                                <option value="2">2. … Fuera de la vivienda pero dentro del terreno?</option>
                                <option value="3">3. …Fuera del terreno?</option>
                        </select>
                        {{-- <input type="text" class="form-control form-control-sm" "" placeholder="">   --}}
                </div>

        </div>
        <div class="form-row">
                 <div class="form-group col-md-6">
                        <label for="IV10">11. ¿El baño tiene…</label>
                        {{-- <small "form-text text-muted">(a p.12)</small> --}}
                        <select class="form-control form-control-sm" name="IV10" id="IV10" >
                              <option value=""></option>
                                <option value="1">1. … Inodoro con botón/mochila/cadena y arrastre de agua?</option>
                                <option value="2">2. … Inodoro sin botón/cadena y con arrastre de agua?</option>
                                <option value="3">3. … Letrina? (sin arrastre de agua)</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IV11">12. ¿El desagüe del baño es…</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV11" id="IV11" >
                              <option value=""></option>
                                <option value="1">1. … A red pública? (cloaca)</option>
                                <option value="2">2. … A cámara séptica y pozo ciego?</option>
                                <option value="3">3. … Solo a pozo ciego?</option>
                                <option value="4">4. … A hoyo/excavación en la tierra?</option>
                        </select>

                </div>

        </div>
        <div class="form-row">
                 <div class=" col-md-6">
                     <label for="">13. ¿La vivienda está ubicada…</label>
                       <div class="form-group form-inline">

                        <label for="IV12_1">&emsp;&emsp;1… Cerca de basural/es? (3 cuadras o menos)&emsp;&emsp;</label>
                        <select class="form-control form-control-sm" name="IV12_1" id="IV12_1" >
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>

                        </select>
                        <label for="IV12_2">&emsp;&emsp;2… En zona inundable? (en los últimos 12 meses)</label>
                        <select class="form-control form-control-sm" name="IV12_2" id="IV12_2" >
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="IV12_3">&emsp;&emsp;3… En villa de emergencia? (por observación)&emsp;&emsp;</label>
                        <select class="form-control form-control-sm" name="IV12_3" id="IV12_3" >
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                       </div>
                 </div>
                        <div class="form-group col-md-6">
                                <label for="">14. Dispone de conexión a internet en la vivienda?</label>
                                {{-- <small "form-text text-muted">(por observación)</small> --}}
                                <select class="form-control form-control-sm" name="IV14" id="IV14" >
                                      <option value=""></option>
                                                <option value="1">1. Si </option>
                                                <option value="2">2. No</option>
                                </select>  <br>
                                 <label for="">15. ¿Qué tipo de conexión dispone?</label>
                                {{-- <small "form-text text-muted">(a p.12)</small> --}}
                                <select class="form-control form-control-sm" name="IV15" id="IV15" >
                                      <option value=""></option>
                                        <option value="1">1. Solo FIJA (4Incluye conexión por WiFi o satelital)</option>
                                        <option value="2">2. Sólo MÓVIL (Conexión por medio de red celular y puede pertenecer a cualquiera de los residentes)</option>
                                        <option value="3">3. Ambas</option>
                                        <option value="4">4. Ns/Nc</option>
                                </select>
                        </div>
                </div>
    </div>
{{-- @endsection --}}


