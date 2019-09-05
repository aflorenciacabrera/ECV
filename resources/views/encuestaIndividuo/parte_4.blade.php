{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <small  class="form-text text-muted"><h5>OCUPACIÓN DE MÁS HORAS</h5> </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for=" PP04A">4a. ¿El negocio/empresa/institución/actividad en la que trabaja es… </label><small  class="form-text text-muted">(se refiere al que trabaja más horas semanales) </small>
                <select class="form-control" disabled onchange="update_parte_4()" name="PP04A" id="PP04A">
                                <option value=""> </option>
                                <option value="1">1.… estatal?</option>
                                <option value="2">2.… privada?</option>
                                <option value="3">3.… de otro tipo? (especificar)</option>
                </select>
                <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04A_Esp" id="PP04A_Esp" maxlength="45">
                <br>
                 <label for="PP04B">4b. ¿A qué se dedica o qué produce ese negocio/empresa/institución?</label>
                                <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04B" id="PP04B" maxlength="45"><br>
                        <label for="">4b1. Si presta servicios domésticos en hogares particulares, Marque</label>
                                <select class="form-control" disabled onchange="update_parte_4()" name="PP04B1" id="PP04B1">
                                        <option value=""> </option>
                                        <option value="1">1.Casa de familia</option>
                                </select><br>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="PP04B2">4b2. ¿En cuántas casas trabaja?</label>
                                        <small  class="form-text text-muted">(en la casa que tiene más horas)</small>
                                        <input type="number" class="form-control" disabled onchange="update_parte_4()" name="PP04B2" id="PP04B2" step="1" min="0" max="9">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="">4b3. ¿Cuánto tiempo hace que trabaja allí?</label>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Año</label></div>
                                        <input type="number" class="form-control PP04B3" disabled onchange="update_parte_4()" name="PP04B3_ANO" id="PP04B3_ANO" step="1" min="0" max="99"></div>
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Mes</label></div>
                                        <input type="number" class="form-control PP04B3" disabled onchange="update_parte_4()" name="PP04B3_MES" id="PP04B3_MES" step="1" min="0" max="99"></div>
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Día</label></div>
                                        <input type="number" class="form-control PP04B3" disabled onchange="update_parte_4()" name="PP04B3_DIA" id="PP04B3_DIA" step="1" min="0" max="99"></div>
                                </div>
                                </div>
                        </div>


                         <label for="PP04B4">4b4. ¿Cómo se llama su ocupación?</label>
                        <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04B4" id="PP04B4" maxlength="45"><br>
                </div>

             <div class="form-group col-md-6">
                      <label for=" PP04C">4c. ¿Cuántas personas, incluido____________ trabajan allí en total?</label>
                <small  class="form-text text-muted">(sólo si no sabe lea las opciónes y después marque la que corresponda)</small>
                <select class="form-control" disabled onchange="update_parte_4()" name="PP04C" id="PP04C">
                        <option value=""> </option>
                        <option value="1">1. 1 persona</option>
                        <option value="2">2. 2 personas</option>
                        <option value="3">3. 3 personas</option>
                        <option value="4">4. 4 personas</option>
                        <option value="5">5. 5 personas</option>
                        <option value="6">6. 6 a 10 personas</option>
                        <option value="7">7. 11 a 25 personas</option>
                        <option value="8">8. 26 a 40 personas</option>
                        <option value="9">9. 41 a 100 personas</option>
                        <option value="10">10. 101 a 200 personas</option>
                        <option value="11">11. 201 a 500 personas</option>
                        <option value="12">12. Más de 500 personas</option>
                        <option value="99">99. Ns/Nr</option>
                </select>

                 <select class="form-control" disabled onchange="update_parte_4()" name="PP04C99" id="PP04C99">
                        <option value=""> </option>
                        <option value="1">1.Hasta 5</option>
                        <option value="2">2.De 6 a 40</option>
                        <option value="3">3.Más de 40</option>
                        <option value="9">9.Ns/Nr</option>
                </select>
                <br>
                    <label for="PP04D">4d. ¿Cómo se llama la ocupación que hace?</label>
                     <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04D" id="PP04D" maxlength="45">
                     <br>
                     <label for="PP04E">4e. ¿Qué tareas realiza____________________ en ese trabajo?</label>
                     <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04E" id="PP04E" maxlength="45">
                     <br>
                      <label for="PP04F">4f. ¿Qué herramientas, maquinarias / equipos utiliza?</label>
                     <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04F" id="PP04F" maxlength="45">
                     <br>
                     <label for="PP04G">4g. ¿Dónde realiza principalmente sus tareas? </label>
                     <small  class="form-text text-muted">(no lea, escuche la respuesta y marque la que corresponda)</small>
                     <select class="form-control" disabled onchange="update_parte_4()" name="PP04G" id="PP04G">
                        <option value=""> </option>
                        <option value="1">1.-En un local/oficina/establecimiento/negocio/taller/chacra/finca</option>
                        <option value="2">2.-En un puesto o kiosco fijo callejero</option>
                        <option value="3">3.-En vehículos: bicicleta, moto, auto, barco, bote (no inlcuye servicio de transporte)</option>
                        <option value="4">4.-En vehículos para transporte de personas y mercaderías - áereo, marítimo, terrestre- (incluye taxis, colectivos, camiones, furgones, transporte de combustible, mudanzas, etc.)</option>
                        <option value="5">5.-En obras en construcción, de infraestructura, minería o similares</option>
                        <option value="6">6.-En esta vivienda (sin lugar exclusivo)</option>
                        <option value="7">7.-En la vivienda del socio o del patrón</option>
                        <option value="8">8.-En el domicilio/local de los clientes</option>
                        <option value="9">9.-En la calle, espacios públicos, ambulante, de casa en casa, puesto móvil callejero</option>
                        <option value="10">10.-En otro lugares (especificar)</option>
                        </select>

                        <input type="text" class="form-control" disabled onchange="update_parte_4()" name="PP04G_Esp" id="PP04G_Esp" maxlength="45">
            </div>
         </div>
        {{-- <div class="form-row">
            <div class="form-group col-md-6">

            </div>
        </div>                    --}}
</div>
<script>

function update_parte_4()
{
      p3_j = getSelectedValue("#PP03J");
      p3_k = getSelectedValue("#PP03K");
      a = getSelectedValue("#PP04A");
      b = $("#PP04B").val();
      b1 = getSelectedValue("#PP04B1");
    //   b2 = getSelectedValue("#PP04B2");
    //   b3 = getSelectedValue("#PP04B3");
      b4 = $("#PP04B4").val();
      c = getSelectedValue("#PP04C");
      c99 = getSelectedValue("#PP04C99");
      g = getSelectedValue("#PP04G");
    PP04B3_ANO = $("#PP04B3_ANO").val();
PP04B3_MES = $("#PP04B3_MES").val();
PP04B3_DIA = $("#PP04B3_DIA").val();

      (p3_j == 2 || p3_j == 9 || p3_k >= 1)?activar("#PP04A"):desactivar("#PP04A");
    //   activar("#PP04A");//para prueba

      (a >= 1)? activar("#PP04B"):desactivar("#PP04B");
      (a == 3)? activar("#PP04A_Esp"):desactivar("#PP04A_Esp");
      (b)?activar("#PP04B1",false):desactivar("#PP04B1");
      (b1 == 1)?activar(".PP04B3",false):desactivar(".PP04B3");

        PP04B3_ANO || PP04B3_DIA ? desactivar("#PP04B3_MES",false):false;
        PP04B3_ANO || PP04B3_MES ? desactivar("#PP04B3_DIA",false):false;
        PP04B3_DIA || PP04B3_MES ? desactivar("#PP04B3_ANO",false):false;


      (b1 == 1)?activar("#PP04B4"):desactivar("#PP04B4");
      (b1 == 1)?activar("#PP04B2"):desactivar("#PP04B2");

      (!(b1 == 1) && b)?activar("#PP04C"):desactivar("#PP04C");

      (c == 99)?activar("#PP04C99"):desactivar("#PP04C99");

      (!(b1 == 1) && c >= 1)?activar("#PP04G"):desactivar("#PP04G");
      (!(b1 == 1) && c >= 1)?activar("#PP04F",false):desactivar("#PP04F");
      (!(b1 == 1) && c >= 1)?activar("#PP04E"):desactivar("#PP04E");
      (!(b1 == 1) && c >= 1)?activar("#PP04D"):desactivar("#PP04D");

      (g == 10)?activar("#PP04G_Esp"):desactivar("#PP04G_Esp");

      //TODO pase a la 5
      (g >= 1)?activar("#PP05A"):desactivar("#PP05A");

      //TODO pase a la 7
    p7_C = getSelectedValue("#PP07C");
    p7_D = getSelectedValue("#PP07D");
    p7_E = getSelectedValue("#PP07E");
      (b4) || (p7_C == 2) || (p7_D >= 1 && p7_E >= 1) ? activar(".PP07F"):desactivar(".PP07F");


}

</script>

