{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">   
        <small id="" class="form-text text-muted"><h5>OCUPACIÓN DE MÁS HORAS</h5> </small>   
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for=" PP04A">4a. ¿El negocio/empresa/institución/actividad en la que trabaja es… </label><small id="" class="form-text text-muted">(se refiere al que trabaja más horas semanales) </small>
                <select class="form-control" name="PP04A" id="PP04A" >
                                <option value=" "> </option>
                                <option value="1">… estatal?</option>
                                <option value="2" >… privada?</option> 
                                <option value="3" >… de otro tipo? (especificar)</option>            
                </select>
                <input type="text" class="form-control" name="PP04A_Esp" id="PP04A_Esp" maxlength="45"> 
                <br>
                 <label for="PP04B">4b. ¿A qué se dedica o qué produce ese negocio/empresa/institución?</label>
                                <input type="text" class="form-control" name="PP04B" id="PP04B" maxlength="45"><br>
                        <label for="">4b1. Si presta servicios domésticos en hogares particulares, Marque</label>
                                <select class="form-control" name="PP04B1" id="PP04B1" >
                                        <option value=" "> </option>
                                        <option value="1">Casa de familia</option>             
                                </select><br>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="PP04B2">4b2. ¿En cuántas casas trabaja?</label>
                                        <small id="PP04B2" class="form-text text-muted">(en la casa que tiene más horas)</small>
                                        <input type="number" class="form-control" name="PP04B2" id="PP04B2" step="1" min="0" max="9">
                                </div>    
                                <div class="form-group col-md-6">
                                <label for="">4b3. ¿Cuánto tiempo hace que trabaja allí?</label>
                                <div class="form-row">
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Año</label></div>
                                        <input type="number" class="form-control" name="PP04B3_ANO" id="PP04B3_ANO" step="1" min="0" max="99"></div> 
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Mes</label></div>
                                        <input type="number" class="form-control" name="PP04B3_MES" id="PP04B3_MES" step="1" min="0" max="99"></div> 
                                        <div class="form-group col-md-4">
                                        <div class="text-center"><label for="">Día</label></div>
                                        <input type="number" class="form-control" name="PP04B3_DIA" id="PP04B3_DIA" step="1" min="0" max="99"></div> 
                                </div>  
                                </div>    
                        </div>  
                        
                        
                         <label for="PP04B4">4b4. ¿Cómo se llama su ocupación?</label>
                        <input type="text" class="form-control" name="PP04B4" id="PP04B4" maxlength="45"><br>
                </div>   

             <div class="form-group col-md-6">
                      <label for=" PP04C">4c. ¿Cuántas personas, incluido____________ trabajan allí en total?</label>
                <small id="PP04C" class="form-text text-muted">(sólo si no sabe lea las opciónes y después marque la que corresponda)</small>
                <select class="form-control" name="PP04C" id="PP04C" >
                        <option value=" "> </option>
                        <option value="1">1 persona</option>
                        <option value="2" >2 personas</option>
                        <option value="3" >3 personas</option> 
                        <option value="4" >4 personas</option> 
                        <option value="5" >5 personas</option> 
                        <option value="6" >6 a 10 personas</option> 
                        <option value="7" >11 a 25 personas</option> 
                        <option value="8" >26 a 40 personas</option> 
                        <option value="9" >41 a 100 personas</option> 
                        <option value="10" >101 a 200 personas</option> 
                        <option value="11" >201 a 500 personas</option>
                        <option value="12" >Más de 500 personas</option>  
                        <option value="99" >Ns/Nr</option>             
                </select>
           
                 <select class="form-control" name="PP04C99" id="PP04C99" >
                        <option value=" "> </option>
                        <option value="1">Hasta 5</option>
                        <option value="2" >De 6 a 40</option>
                        <option value="3" >Más de 40</option> 
                        <option value="9" >Ns/Nr</option>          
                </select>
                <br>
                    <label for="PP04D">4d. ¿Cómo se llama la ocupación que hace?</label>
                     <input type="text" class="form-control" name="PP04D" id="PP04D" maxlength="45">  
                     <br>
                     <label for="PP04E">4e. ¿Qué tareas realiza____________________ en ese trabajo?</label>
                     <input type="text" class="form-control" name="PP04E" id="PP04E" maxlength="45">         
                     <br>
                      <label for="PP04F">4f. ¿Qué herramientas, maquinarias / equipos utiliza?</label>
                     <input type="text" class="form-control" name="PP04F" id="PP04F" maxlength="45">      
                     <br>
                     <label for="PP04G">4g. ¿Dónde realiza principalmente sus tareas? </label>
                     <small id="PP04G" class="form-text text-muted">(no lea, escuche la respuesta y marque la que corresponda)</small>
                     <select class="form-control" name="PP04G" id="PP04G" >
                        <option value=" "> </option>
                        <option value="1">-En un local/oficina/establecimiento/negocio/taller/chacra/finca</option>
                        <option value="2">-En un puesto o kiosco fijo callejero</option> 
                        <option value="3">-En vehículos: bicicleta, moto, auto, barco, bote (no inlcuye servicio de transporte)</option>   
                        <option value="4">-En vehículos para transporte de personas y mercaderías - áereo, marítimo, terrestre- (incluye taxis, colectivos, camiones, furgones, transporte de combustible, mudanzas, etc.)</option>
                        <option value="5">-En obras en construcción, de infraestructura, minería o similares</option>  
                        <option value="6">-En esta vivienda (sin lugar exclusivo)</option>  
                        <option value="7">-En la vivienda del socio o del patrón</option>  
                        <option value="8">-En el domicilio/local de los clientes</option>  
                        <option value="9">-En la calle, espacios públicos, ambulante, de casa en casa, puesto móvil callejero</option>  
                        <option value="10">-En otro lugares (especificar)</option>            
                        </select>
                       
                        <input type="text" class="form-control" name="PP04G_Esp" id="PP04G_Esp" maxlength="45">            
            </div>    
         </div>        
        {{-- <div class="form-row">
            <div class="form-group col-md-6">
                    
            </div>           
        </div>                    --}}
</div>
{{-- @endsection --}}