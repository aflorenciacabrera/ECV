{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP07A">7a. ¿Cuánto tiempo hace que está trabajando en ese empleo en forma continua?</label>
                     <select class="form-control" name="PP07A" id="PP07A">
                                <option value=" ">   </option>
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
                     <select class="form-control" name="PP07B" id="PP07B" >
                                <option value=" ">   </option>
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
                     <input type="text" class="form-control" name="PP07B_Esp" id="PP07B_Esp" maxlength="45">

            </div>

        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP07C">7c. ¿Ese empleo tiene tiempo de finalización?</label>
                     <select class="form-control" name="PP07C" id="PP07C">
                                <option value=" ">   </option>
                                <option value="1">1. Si (incluye changa, trabajo transitorio, por tarea u obra, suplencia, etc.)</option>
                                <option value="2">2. No (inlcuye permanente, fijo, estable, de planta)</option>
                                <option value="9">9. Ns/Nr</option>
                        </select>

            </div>
             <div class="form-group col-md-6">
                    <label for="PP07D">7d. ¿Por cuánto tiempo es ese trabajo?</label>
                     <select class="form-control" name="PP07D" id="PP07D" >
                                <option value=" ">   </option>
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
                     <select class="form-control" name="PP07E" id="PP07E" >
                                <option value=" ">   </option>
                                <option value="1">1. Un plan de empleo?</option>
                                <option value="2">2. Un período de prueba</option>
                                <option value="3">3. Una beca/pasantía/aprendizaje?</option>
                                <option value="4">4. Ninguno de estos</option>
                        </select>

                        <br>

                    <label for=" PP07G">7g. En ese trabajo tiene….</label>
                    <div class="form-row">
                         <div class="form-group col-md-6">
                        <label for=" PP07G1">1.Vacaciones pagas?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07G1" id="PP07G1" >
                               <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G2">2.aguinaldo?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07G2" id="PP07G2" >
                               <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G3">3.días pagos por enfermedad?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07G3" id="PP07G3" >
                               <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G4">4.Obra social?</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07G4" id="PP07G4" >
                               <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>
                         <div class="form-group col-md-6">
                        <label for=" PP07G5">5.No tiene ninguno</label> </div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07G5" id="PP07G5" >
                               <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select> </div>

            </div>
            </div>
             <div class="form-group col-md-6">
                <label for="">7f. ¿En ese trabajo le dan…</label>
                <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="PP07F1">1 el lugar de trabajo?</label></div>
                        <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F1" id="PP07F1">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F2">2 vivienda?</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F2" id="PP07F2">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F3">3 Algún producto o mercadería?</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F3" id="PP07F3">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F4">4 Algún otro beneficio? (automóvil,teléfono celular, pasajes, etc.)</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F4" id="PP07F4">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F5">5 No recibe ninguno</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F5" id="PP07F5">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                        </select></div>
                </div>
                <br>
                 <label for=" PP07F1">7f1. ¿Para realizar su trabajo tiene que utilizar… </label>
                <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="PP07F11">1. Sus propias maquinarias/equipos?</label></div>
                        <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F11" id="PP07F11">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                         <label for="PP07F12">2. Local Propio?</label></div>
                          <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F12" id="PP07F12">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                         <div class="form-group col-md-6">
                        <label for="PP07F13">3. Vehículo propio?</label></div>
                         <div class="form-group col-md-4">
                        <select class="form-control" name="PP07F13" id="PP07F13">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select></div>
                </div>
                </div>
            </div>
        <div class="form-row">
             <div class="form-group col-md-6">
                  <label for="PP07H ">7h.¿Por ese trabajo tiene descuento jubilatorio?</label>
                    <select class="form-control" name="PP07H" id="PP07H">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                   <label for="PP07I ">7i. ¿Aporta por sí mismo a algún sistema jubilatorio?</label>
                    <select class="form-control" name="PP07I" id="PP07I">
                                <option value=" ">   </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
        </div>
        <div class="form-row">

             <div class="form-group col-md-6">
                  <label for="PP07J ">7j. ¿El turno habitual de trabajo es…</label>
                        <select class="form-control" name="PP07J" id="PP07J">
                                <option value=" ">   </option>
                                <option value="1">1. … de día? (mañana/tarde)</option>
                                <option value="2">2. … de noche?</option>
                                <option value="3">3. … de otro tipo? (rotativo, día y noche,guardias con franco)</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                   <label for="PP07K ">7k. ¿Cuándo cobra…</label>
                    <select class="form-control" name="PP07K" id="PP07K">
                                <option value=" ">   </option>
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
