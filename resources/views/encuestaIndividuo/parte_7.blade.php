{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP07A">7a. ¿Cuánto tiempo hace que está trabajando en ese empleo en forma continua?</label>
                     <select class="form-control" onchange="update_parte_7()" disabled name="PP07A" id="PP07A">
                                <option value="">   </option>
                                <option value="1">1. Menos de 1 mes</option>
                                <option value="2">2. 1 a 3 meses</option>
                                <option value="3">3. Más de 3 meses y hasta 6 meses</option>
                                <option value="4">4. Más de 6 meses y hasta 12 meses</option>
                                <option value="5">5. Más de 1 año y hasta 5 años</option>
                                <option value="6">6. Más de 5 años</option>
                                <option value="9">9. Ns/Nr</option>
                        </select>
                    {{-- <small id=" " class="form-text text-muted"> </small> --}}
            </div>
             <div class="form-group col-md-6">
                    <label for="PP07B">7b. ¿Cómo consiguió ese trabajo?</label>
                     <select class="form-control" onchange="update_parte_7()" disabled name="PP07B" id="PP07B" >
                                <option value="">   </option>
                                <option value="1">1. Por carteles del barrio/lugares donde se toma gente</option>
                                <option value="2">2. Por un contratista</option>
                                <option value="3">3. Por concurso/inscripción</option>
                                <option value="4">4. Por parientes/amigos/contactos personales/recomendaciones</option>
                                <option value="5">5. Por avisos (diarios/radio/internet)</option>
                                <option value="6">6. Por agencia de empleo/bolsa de trabajo</option>
                                <option value="7">7. Presentándose a la emrpesa/negocio/institución/lugar de trabajo</option>
                                <option value="8">8. De otra forma (especificar)</option>
                                <option value="9">9. Ns/Nr</option>
                     </select>
                     <input type="text" class="form-control" onchange="update_parte_7()" disabled name="PP07B_Esp" id="PP07B_Esp" maxlength="45">

            </div>

        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP07C">7c. ¿Ese empleo tiene tiempo de finalización?</label>
                     <select class="form-control" onchange="update_parte_7()" disabled name="PP07C" id="PP07C">
                                <option value="">   </option>
                                <option value="1">1. Si (incluye changa, trabajo transitorio, por tarea u obra, suplencia, etc.)</option>
                                <option value="2">2. No (inlcuye permanente, fijo, estable, de planta)</option>
                                <option value="9">9. Ns/Nr</option>
                        </select>

            </div>
             <div class="form-group col-md-6">
                    <label for="PP07D">7d. ¿Por cuánto tiempo es ese trabajo?</label>
                     <select class="form-control" onchange="update_parte_7()" disabled name="PP07D" id="PP07D" >
                                <option value="">   </option>
                                <option value="1">1. Solo fue esa vez/sólo cuando lo llaman</option>
                                <option value="2">2. Hasta 3 meses</option>
                                <option value="3">3. Más de 3 meses y hasta 6 meses</option>
                                <option value="4">4. Más de 6 meses y hasta 12 meses</option>
                                <option value="5">5. Más de 1 año</option>
                                <option value="9">9. Ns/Nr</option>

                        </select>
            </div>
        </div>
         <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="PP07E">7e. ¿Ese trabajo es…</label>
                     <select class="form-control" onchange="update_parte_7()" disabled name="PP07E" id="PP07E" >
                                <option value="">   </option>
                                <option value="1">1. Un plan de empleo?</option>
                                <option value="2">2. Un período de prueba</option>
                                <option value="3">3. Una beca/pasantía/aprendizaje?</option>
                                <option value="4">4. Ninguno de estos</option>
                        </select>

                        <br>

                    <label for=" PP07G">7g. En ese trabajo tiene….</label>
                    <div class="form-row">
                         <div class="form-group col-md-6">
                        <label for="PP07G1">1.Vacaciones pagas?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07G" onchange="update_parte_7()" disabled name="PP07G1" id="PP07G1" >
                               <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G2">2.aguinaldo?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07G" onchange="update_parte_7()" disabled name="PP07G2" id="PP07G2" >
                               <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G3">3.días pagos por enfermedad?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07G" onchange="update_parte_7()" disabled name="PP07G3" id="PP07G3" >
                               <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G4">4.Obra social?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07G" onchange="update_parte_7()" disabled name="PP07G4" id="PP07G4" >
                               <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G5">5.No tiene ninguno</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07G" onchange="update_parte_7()" disabled name="PP07G5" id="PP07G5" >
                               <option value="">   </option>
                                <option value="5">5. Si</option>

                        </select> </div>

            </div>
            </div>
             <div class="form-group col-md-6">
                <label for="">7f. ¿En ese trabajo le dan…</label>
                <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="PP07F1">1 el lugar de trabajo?</label></div>
                        <div class="form-group col-md-4">
                        <select class="form-control PP07F" onchange="update_parte_7()" disabled name="PP07F1" id="PP07F1">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F2">2 vivienda?</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control PP07F" onchange="update_parte_7()" disabled name="PP07F2" id="PP07F2">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F3">3 Algún producto o mercadería?</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07F" onchange="update_parte_7()" disabled name="PP07F3" id="PP07F3">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F4">4 Algún otro beneficio? (automóvil,teléfono celular, pasajes, etc.)</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control PP07F" onchange="update_parte_7()" disabled name="PP07F4" id="PP07F4">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F5">5 No recibe ninguno</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07F" onchange="update_parte_7()" disabled name="PP07F5" id="PP07F5">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                        </select></div>
                </div>
                <br>
                 <label for=" PP07F1">7f1. ¿Para realizar su trabajo tiene que utilizar… </label>
                <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="PP07F11">1. Sus propias maquinarias/equipos?</label></div>
                        <div class="form-group col-md-4">
                        <select class="form-control PP07F1" onchange="update_parte_7()" disabled name="PP07F11" id="PP07F11">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F12">2. Local Propio?</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control PP07F1" onchange="update_parte_7()" disabled name="PP07F12" id="PP07F12">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F13">3. Vehículo propio?</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control PP07F1" onchange="update_parte_7()" disabled name="PP07F13" id="PP07F13">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                </div>
                </div>
            </div>
        <div class="form-row">
             <div class="form-group col-md-6">
                  <label for="PP07H ">7h.¿Por ese trabajo tiene descuento jubilatorio?</label>
                    <select class="form-control" onchange="update_parte_7()" disabled name="PP07H" id="PP07H">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                   <label for="PP07I ">7i. ¿Aporta por sí mismo a algún sistema jubilatorio?</label>
                    <select class="form-control" onchange="update_parte_7()" disabled name="PP07I" id="PP07I">
                                <option value="">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
        </div>
        <div class="form-row">

             <div class="form-group col-md-6">
                  <label for="PP07J ">7j. ¿El turno habitual de trabajo es…</label>
                        <select class="form-control" onchange="update_parte_7()" disabled name="PP07J" id="PP07J">
                                <option value="">   </option>
                                <option value="1">1. … de día? (mañana/tarde)</option>
                                <option value="2">2. … de noche?</option>
                                <option value="3">3. … de otro tipo? (rotativo, día y noche,guardias con franco)</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                   <label for="PP07K ">7k. ¿Cuándo cobra…</label>
                    <select class="form-control" onchange="update_parte_7()" disabled name="PP07K" id="PP07K">
                                <option value="">   </option>
                                <option value="1">1. le dan recibo con sello/membrete/firma del empleador?</option>
                                <option value="2">2. le dan un papel/recibo sin nada?</option>
                                <option value="3">3. entrega una factura?</option>
                                <option value="4">4. no le dan ni entrega nada?</option>
                                <option value="5">5. no cobra, es trabajador sin pago/ad-honorem</option>
                        </select>
            </div>
        </div>
</div>
{{-- @endsection --}}
<script>

function update_parte_7()
{
A = getSelectedValue("#PP07A");
B = getSelectedValue("#PP07B");
// B_Esp = getSelectedValue("#PP07B_Esp");
C = getSelectedValue("#PP07C");
D = getSelectedValue("#PP07D");
E = getSelectedValue("#PP07E");
G1 = getSelectedValue("#PP07G1");
G2 = getSelectedValue("#PP07G2");
G3 = getSelectedValue("#PP07G3");
G4 = getSelectedValue("#PP07G4");
G5 = getSelectedValue("#PP07G5");
F1 = getSelectedValue("#PP07F1");
F2 = getSelectedValue("#PP07F2");
F3 = getSelectedValue("#PP07F3");
F4 = getSelectedValue("#PP07F4");
F5 = getSelectedValue("#PP07F5");
F11 = getSelectedValue("#PP07F11");
F12 = getSelectedValue("#PP07F12");
F13 = getSelectedValue("#PP07F13");
H = getSelectedValue("#PP07H");
I = getSelectedValue("#PP07I");
J = getSelectedValue("#PP07J");
K = getSelectedValue("#PP07K");

// activar("#PP07A");


(A >= 1 && A <= 4)? activar("#PP07B"):desactivar("#PP07B");
((A >= 5 && A <= 9) || B )>= 1 ? activar("#PP07C"):desactivar("#PP07C");
(B == 8) ? activar("#PP07B_Esp"):desactivar("#PP07B_Esp");
(C == 1 || C == 9) ? activar("#PP07D"):desactivar("#PP07D");

(D >= 1) ? activar("#PP07E"):desactivar("#PP07E");
//
(F1 >=1 && F2 >=1  && F3 >=1 && F4 >=1)?activar(".PP07F1"):desactivar(".PP07F1");
(F11 >= 1 && F12 >= 1 && F13 >= 1)?activar(".PP07G"):desactivar(".PP07G");

(G1 >= 1 && G2 >= 1 && G3 >= 1 && G4 >= 1)?activar("#PP07H"):desactivar("#PP07H");
(H == 1) || (I == 1 || I == 2)? activar("#PP07J"):desactivar("#PP07J");
(H == 2) ? activar("#PP07I"):desactivar("#PP07I");
(J >= 1)?activar("#PP07K"):desactivar("#PP07K");
//TODO salta a 8
(K >= 1 && K<= 4)? activar(".PP08A",false,false):desactivar(".PP08A");
//TODO salta a 9
update_parte_9();
update_parte_4();

setOpcional("#PP07G5");
setOpcional("#PP07F5");


}

</script>
