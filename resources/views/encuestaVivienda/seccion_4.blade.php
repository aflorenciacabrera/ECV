{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
                <label for=""> (SÓLO PARA LA PRIMERA VEZ QUE LA VIVIENDA ES RESPUESTA O FUE MAL TOMADA EN LA PARTICIPACIÓN ANTERIOR)</label>
            <div class="form-group col-md-6">
                <label for="IV1">1. Tipo de vivienda </label>
                <small  class="form-text text-muted">(por observación)</small>
                <select class="form-control form-control-sm" name="IV1" id="IV1"  disabled onchange='update_seccion_4()'>
                      <option value=""></option>
                        <option value="1">1. Casa</option>
                        <option value="2">2. Departamento</option>
                        <option value="3">3. Pieza en inquilinato</option>
                        <option value="4">4. Pieza en hotel/Pensión</option>
                        <option value="5">5. Lcal no construido para habitación</option>
                        <option value="6">6. Otros (especificar)</option>
                </select>
                <input type="text" class="form-control form-control-sm " disabled name="IV1_Esp" id="IV1_Esp" placeholder="Especificar">
            </div>
            <div class="form-group col-md-6">
                <label for="IV2">2. ¿Cuántos ambientes/habitaciones tiene la vivienda en total? </label>
                <small  class="form-text text-muted"> (sin contar baño/s, cocina, pasillo/s, lavadero, garage)</small>
                <input  type="number" min=0 step=1 class="form-control form-control-sm" name="IV2" id="IV2" maxlength="45"  disabled onchange='update_seccion_4()'>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="IV3">3 ¿Los pisos interiores son principalmente de…. </label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select   class="form-control form-control-sm" name="IV3" id="IV3"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. … Mosaico/baldosa/madera/cerámica/alfombra?</option>
                                <option value="2">2. … Cemento/ladrillo fijo?</option>
                                <option value="3">3. … Ladrillo suelto/ tierra?</option>
                                <option value="4">4. Otro material? (especificar)</option>
                        </select>
                          <input type="text" class="form-control form-control-sm " disabled name="IV3_Esp" id="IV3_Esp"  placeholder="Especificar" maxlength="45" disabled onchange='update_seccion_4()'>

                </div>
                <div class="form-group col-md-6">
                        <label for="IV4">4. ¿La cubierta exterior del techo es de….</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select  class="form-control form-control-sm" name="IV4" id="IV4"  disabled onchange='update_seccion_4()'>
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
                        <select  class="form-control form-control-sm" name="IV5" id="IV5"   disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IVE">6. ¿ Tiene electricidad por red, generador, no tiene</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select   class="form-control form-control-sm" name="IVE" id="IVE"  disabled onchange='update_seccion_4()'>
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
                        <select  class="form-control form-control-sm" name="IV6" id="IV6"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. … Por cañería dentro de la vivienda?</option>
                                <option value="2">2. … Fuera de la vivienda pero dentro del terreno?</option>
                                <option value="3">3. … Fuera del terreno?</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label  for="IV7">8. ¿El agua es de…</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="IV7" id="IV7"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. … Red pública? (agua corriente)</option>
                                <option value="2">2. … Perforación con bomba a motor?</option>
                                <option value="3">3. … Perforación con bomba manual?</option>
                                <option value="4">4. …Otra fuente? (especificar)</option>
                        </select>
                        <input type="text" class="form-control form-control-sm " disabled name="IV7_Esp" id="IV7_Esp" placeholder="Especificar" maxlength="45" disabled onchange='update_seccion_4()'>
                </div>

        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label  for="IV8">9. ¿Tiene baño/letrina?</label>
                        {{-- <small "form-text text-muted">(a p.12)</small> --}}
                        <select  class="form-control form-control-sm" name="IV8" id="IV8"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IV9">10. ¿El baño o letrina está….</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select disabled class="form-control form-control-sm" name="IV9" id="IV9"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. … Dentro de la vivienda?</option>
                                <option value="2">2. … Fuera de la vivienda pero dentro del terreno?</option>
                                <option value="3">3. …Fuera del terreno?</option>
                        </select>

                </div>

        </div>
        <div class="form-row">
                 <div class="form-group col-md-6">
                        <label for="IV10">11. ¿El baño tiene…</label>
                        {{-- <small "form-text text-muted">(a p.12)</small> --}}
                        <select disabled class="form-control form-control-sm" name="IV10" id="IV10"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. … Inodoro con botón/mochila/cadena y arrastre de agua?</option>
                                <option value="2">2. … Inodoro sin botón/cadena y con arrastre de agua?</option>
                                <option value="3">3. … Letrina? (sin arrastre de agua)</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="IV11">12. ¿El desagüe del baño es…</label>
                        {{-- <small "form-text text-muted">(por observación)</small> --}}
                        <select   class="form-control form-control-sm" name="IV11" id="IV11"  disabled onchange='update_seccion_4()'>
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
                        <select   class="form-control form-control-sm" name="IV12_1" id="IV12_1"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>

                        </select>
                        <label for="IV12_2">&emsp;&emsp;2… En zona inundable? (en los últimos 12 meses)</label>
                        <select   class="form-control form-control-sm" name="IV12_2" id="IV12_2"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="IV12_3">&emsp;&emsp;3… En villa de emergencia? (por observación)&emsp;&emsp;</label>
                        <select   class="form-control form-control-sm" name="IV12_3" id="IV12_3"  disabled onchange='update_seccion_4()'>
                              <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                       </div>
                 </div>
                        <div class="form-group col-md-6">
                                <label for="IV14">14. Tiene acceso a internet en la vivienda?</label>
                                {{-- <small "form-text text-muted">(por observación)</small> --}}
                                <select    class="form-control form-control-sm" name="IV14" id="IV14"  disabled onchange='update_seccion_4()'>
                                      <option value=""></option>
                                                <option value="1">1. Si </option>
                                                <option value="2">2. No</option>
                                </select>  <br>
                                 <label for="IV15">15. ¿Qué tipo de conexión dispone?</label>
                                {{-- <small "form-text text-muted">(a p.12)</small> --}}
                                <select   disabled class="form-control form-control-sm" name="IV15" id="IV15"  disabled onchange='update_seccion_4()'>
                                      <option value=""></option>
                                        <option value="1">1. Solo FIJA (Incluye conexión por WiFi o satelital)</option>
                                        <option value="2">2. Sólo MÓVIL (Conexión por medio de red celular y puede pertenecer a cualquiera de los residentes)</option>
                                        <option value="3">3. Ambas</option>
                                        <option value="4">4. Ns/Nc</option>
                                </select>
                        </div>
                </div>
    </div>
{{-- @endsection --}}


<script>
update_seccion_4();
function update_seccion_4()
{

IV1 = getSelectedValue("#IV1");
IV1_Esp = getSelectedValue("#IV1_Esp");
IV2 = $("#IV2").val();
IV3 = getSelectedValue("#IV3");
IV3_Esp = getSelectedValue("#IV3_Esp");
IV4 = getSelectedValue("#IV4");
IV5 = getSelectedValue("#IV5");
IVE = getSelectedValue("#IVE");
IV6 = getSelectedValue("#IV6");
IV7 = getSelectedValue("#IV7");
IV7_Esp = getSelectedValue("#IV7_Esp");
IV8 = getSelectedValue("#IV8");
IV9 = getSelectedValue("#IV9");
IV10 = getSelectedValue("#IV10");
IV11 = getSelectedValue("#IV11");
IV12_1 = getSelectedValue("#IV12_1");
IV12_2 = getSelectedValue("#IV12_2");
IV12_3 = getSelectedValue("#IV12_3");
IV14 = getSelectedValue("#IV14");
IV15 = getSelectedValue("#IV15");

// activar("#IV1");
IV1 ? activar("#IV2"):desactivar("#IV2");
IV1  == 6 ? activar("#IV1_Esp"):desactivar("#IV1_Esp");
IV2 ? activar("#IV3"):desactivar("#IV3");
IV3 ? activar("#IV4"):desactivar("#IV4");
IV3 == 4 ? activar("#IV3_Esp"):desactivar("#IV3_Esp");
IV4 ? activar("#IV5"):desactivar("#IV5");
IV5 ? activar("#IVE"):desactivar("#IVE");
IVE ? activar("#IV6"):desactivar("#IV6");
IV6 ? activar("#IV7"):desactivar("#IV7");
IV7 ? activar("#IV8"):desactivar("#IV8");
IV7 == 4 ? activar("#IV7_Esp"):desactivar("#IV7_Esp");
IV8 == 1 ? activar("#IV9"):desactivar("#IV9");
IV9 ? activar("#IV10"):desactivar("#IV10");
IV8 == 2 || IV10? activar("#IV11"):desactivar("#IV11");
// IV10 ? activar("#IV11"):desactivar("#IV11");
IV11 ? activar("#IV12_1",true,false):desactivar("#IV12_1",true,false);
IV11 ? activar("#IV12_2",true,false):desactivar("#IV12_2",true,false);
IV11 ? activar("#IV12_3",true,false):desactivar("#IV12_3",true,false);
(IV12_1 && IV12_2 && IV12_3)?activar("#IV14"):desactivar("#IV14");
(IV14 == 1)?activar("#IV15"):desactivar("#IV15");
(IV14 == 1)?activar("#V1"):desactivar("#V1");




}
</script>
