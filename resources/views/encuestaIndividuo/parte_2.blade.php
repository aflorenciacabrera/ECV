{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP02A">2a. Si la semana pasada conseguía un trabajo, ¿podía empezar a trabajar ya ( o a más tardar en dos semanas) </label>
                     <select class="form-control" disabled onchange="update_parte_2()" name="PP02A" id="PP02A">
                               <option value=""> </option>
                                <option value="1">1. Sí, podía</option>
                                <option value="2">2. Sí, pero con ciertas condiciones laborales (horarios, tipo detrabajo, distancia, etc)</option>
                                <option value="3">3. No podía por razones personales momentáneas</option>
                                <option value="4">4. No, porque no desea trabajar</option>
                        </select>

            </div>
             <div class="form-group col-md-6">
                    <label for="PP02B">2b. ¿Durante los útlimos 30 días, estuvo buscando trabajo de alguna manera?</label>
                     <select class="form-control" disabled onchange="update_parte_2()" name="PP02B" id="PP02B"  >
                               <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>

            </div>

        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP02C">2c. ¿De qué manera estuvo buscando trabajo?</label>
                     <select class="form-control" disabled onchange="update_parte_2()" name="PP02C" id="PP02C"  >
                               <option value=""> </option>
                                <option value="1">1. Hizo contactos, entrevistas</option>
                                <option value="2">2. Mandó Curriculum/puso/contestó avisos (diarios, internet)</option>
                                <option value="3">3. Se presentó en establecimientos</option>
                                <option value="4">4. Hizo algo para ponerse por su cuenta</option>
                                <option value="5">5. Puso carteles en negocios, preguntó en el barrio</option>
                                <option value="6">6. Consultó a parientes/amigos </option>
                                <option value="7">7. Se anotó en bolsas, listas, planes de empleo, agencias, contratistas, o alguien le está buscando</option>
                                <option value="8">8. De otra forma activa (especificar)</option>
                        </select>
                        <input type="text" class="form-control" disabled onchange="update_parte_2()" name="PP02C_Esp" id="PP02C_Esp">
            </div>
             <div class="form-group col-md-6">
                    <label for="PP02D">2d. ¿Durante esos 30 días, consultó amigos/ parientes, puso carteles, hizo algo para ponerse por su cuenta?</label>
                        <select class="form-control" disabled onchange="update_parte_2()" name="PP02D" id="PP02D"  >
                                  <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>

            </div>
        </div>
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP02E">2e. ¿durante esos 20 días, no buscó trabajo porque….</label>
                     <select class="form-control" disabled onchange="update_parte_2()" name="PP02E" id="PP02E">
                               <option value=""> </option>
                                <option value="1">1. …. Está suspendido?</option>
                                <option value="2">2. …. Ya tiene trabajo asegurado?</option>
                                <option value="3">3. … se cansó de buscar trabajo?</option>
                                <option value="4">4. … hay poco trabajo en esta época del año?</option>
                                <option value="5">5.  … por otras razones? (especificar)</option>
                                <input type="text" class="form-control" disabled onchange="update_parte_2()" name="PP02E_Esp" id="PP02E_Esp">
                        </select>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP02F">2f. ¿Durante los últimos 30 días, estuvo buscando trabajo de alguna manera?</label>
                        <select class="form-control" disabled onchange="update_parte_2()" name="PP02F" id="PP02F">
                                  <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="PP02G">2g. ¿Puede……… empezar a trabajar ya? (o a más tardar en dos semanas)</label>
                      <select class="form-control" disabled onchange="update_parte_2()" name="PP02G" id="PP02G">
                                <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
            <div class="form-group col-md-6">
                    <label for="PP02H">2h. En los últimos 12 meses ¿buscó trabajo en algún momento? </label>
                     <select class="form-control" disabled onchange="update_parte_2()" name="PP02H" id="PP02H"  >
                               <option value=""> </option>
                                 <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="PP02I">2i. En los últimos 12 meses ¿trabajó en algún momento?</label>
                      <select class="form-control" disabled onchange="update_parte_2()" name="PP02I" id="PP02I"  >
                                <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
            <div class="form-group col-md-6">
                    <label for="PP02Obser">OBSERVACIONES</label>
                      <textarea  type="text" class="form-control" disabled onchange="update_parte_2()" name="PP02Obser" id="PP02Obser" cols="200" rows="2"></textarea>
            </div>
        </div>
</div>
{{-- @endsection --}}
<script>
function update_parte_2(){

    console.log("Update Parte 2")

    p1_d = getSelectedValue("#PP01D");
    p1_e = getSelectedValue("#PP01E");
    p1_g = getSelectedValue("#PP01G");
    p1_h = getSelectedValue("#PP01H");
    (p1_d == 3 || p1_e == 3 || p1_e == 4 || p1_g ==2 || p1_g == 9 || p1_h == 2 || p1_h == 9 || p1_e == 1 || p1_e == 2) ?activar("#PP02Obser",false,false):desactivar("#PP02Obser");
    (p1_d == 3 || p1_e == 3 || p1_e == 4 || p1_g ==2 || p1_g == 9 || p1_h == 2 || p1_h == 9) ?activar("#PP02A"):desactivar("#PP02A");
    (p1_e == 1 || p1_e == 2) ?activar("#PP02F"):desactivar("#PP02F");

    a = getSelectedValue("#PP02A");
    b = getSelectedValue("#PP02B");
    c = getSelectedValue("#PP02C");
    d = getSelectedValue("#PP02D");
    e = getSelectedValue("#PP02E");
    f = getSelectedValue("#PP02F");
    g = getSelectedValue("#PP02G");
    h = getSelectedValue("#PP02H");
    i = getSelectedValue("#PP02I");


    (a == 1 || a == 2)?activar("#PP02B"):desactivar("#PP02B");
    (b == 1)?activar("#PP02C"):desactivar("#PP02C");
    (b == 2)?activar("#PP02D"):desactivar("#PP02D");
    (d == 2)?activar("#PP02E"):desactivar("#PP02E");

    (d == 1 || e == 1 || e == 2 || c >= 1 || g == 1 || i == 1)?activar("#PP10A"):desactivar("#PP10A");//TODO saltar a la 10
    (f == 1)?activar("#PP02G"):desactivar("#PP02G");
    (f == 2 || a == 3 || a == 4 || e == 3 || e == 4 || e == 5)?activar("#PP02H"):desactivar("#PP02H");
    (h == 1 || h == 2 || g == 2)?activar("#PP02I"):desactivar("#PP02I");

    (c == 8)?activar("#PP02C_Esp"):desactivar("#PP02C_Esp");
    (e == 5)?activar("#PP02E_Esp"):desactivar("#PP02E_Esp");

    update_parte_9();



}

</script>
