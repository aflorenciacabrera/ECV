{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP05A">5a. ¿Ese trabajo, lo hace… </label>
                         <select class="form-control" name="PP05A" id="PP05A" >
                                <option value=""> </option>
                                <option value="1">… para su propio negocio/ empresa/ actividad?</option>
                                <option value="2" >… para el negocio/ empresa/ actividad de un familiar?</option>  
                                <option value="3">… o como obrero o empleado para un patrón / empresa institución? (incluye agencia de empleo) </option>           
                        </select>
                        <br>
                 <label for=" ">5c. ¿En ese negocio/empresa/actividad, tiene…</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="PP05C_1">1… maquinarias/equipos?</label>
                        </div>
                        <div class="form-group col-md-4">
                                <select class="form-control" name="PP05C_1" id="PP05C_1">
                                        <option value=" " ></option>
                                        <option value="1" >Propio (del negocio)</option>     
                                        <option value="2" >Prestado/ Alquilado</option>    
                                        <option value="3" >Notiene</option>          
                                </select>
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="PP05C_2">2… local? (incluye kiosco, puesto fijo)</label>
                        </div>
                        <div class="form-group col-md-4">
                                <select class="form-control" name="PP05C_2" id="PP05C_2">
                                        <option value=" " ></option>
                                        <option value="1" >Propio (del negocio)</option>     
                                        <option value="2" >Prestado/ Alquilado</option>    
                                        <option value="3" >Notiene</option>                
                                </select>
                        </div>
                     </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="PP05C_3">3… vehículo?</label>
                        </div>
                        <div class="form-group col-md-4">
                                <select class="form-control" name="PP05C_3" id="PP05C_3">
                                <option value=" " ></option>
                                <option value="1" >Propio (del negocio)</option>     
                                <option value="2" >Prestado/ Alquilado</option>    
                                <option value="3" >Notiene</option>                 
                                </select>
                        </div>
                </div>
                      
            </div>   
             <div class="form-group col-md-6">
                <label for="PP05B">5b. ¿Por ese trabajo le pagan sueldo (en dinero o en especie)?</label>
                <select class="form-control" name="PP05B" id="PP05B">
                        <option value=""> </option>
                        <option value="1">Si</option>
                        <option value="2" >No</option>             
                </select>  
                <br>
                <label for="PP05B1">5b1. ¿Por ese trabajo…</label>
                <select class="form-control" name="PP05B1" id="PP05B1">
                        <option value=""> </option>
                        <option value="1">… retira dinero?</option>
                        <option value="2" >… retira sólo mercaderías?</option>  
                        <option value="3" >… no retira nada?</option>           
                </select> 
                <br>
                <label for="">5b2. ¿Cuánto tiempo hace que trabaja en ese empleo en forma continua?</label>
                 <div class="form-row">
                                <div class="form-group col-md-4">
                                <div class="text-center"><label for="PP05B2_ANO">Año</label></div>
                                <input type="number" class="form-control" name="PP05B2_ANO" id="PP05B2_ANO" step="1" min="0" max="99"></div> 
                                <div class="form-group col-md-4">
                                <div class="text-center"><label for="PP05B_MES">Mes</label></div>
                                <input type="number" class="form-control" name="PP05B_MES" id="PP05B_MES" step="1" min="0" max="99"></div> 
                                <div class="form-group col-md-4">
                                <div class="text-center"><label for="PP05B2_DIA">Día</label></div>
                                <input type="number" class="form-control" name="PP05B2_DIA" id="PP05B2_DIA" step="1" min="0" max="99"></div> 
                        </div>  
            </div>           
        </div> 
        <div class="form-row">
           <div class="form-group col-md-6">
                <label for="PP05D">5d. ¿En ese negocio/empresa/actividad, se emplean personas asalariadas?</label>
                <select class="form-control" name="PP05D" id="PP05D" >
                        <option value=" " ></option>
                        <option value="1">Sí, siempre</option>
                        <option value="2" >Sólo a veces por temporada</option>
                        <option value="3">No emplea/ no contrata personal</option>             
                </select>
            </div>    
        
             <div class="form-group col-md-6">
                    <label for="PP05E">5e. ¿Para la actividad del negocio, en los últimos 3 meses, tuvo que gastar en la compra de materias primas/mercaderías/productos, pagar servicios u otros gastos?</label>
                     <select class="form-control" name="PP05E" id="PP05E" >
                        <option value=" " ></option>
                        <option value="1">Si</option>
                        <option value="2">No</option>             
                        </select>
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP05F">5f. ¿Ese negocio/empresa/actividad, trabaja habitualmente para…</label>
                     <select class="form-control" name="PP05F" id="PP05F"  >
                                <option value=" " ></option>
                                <option value="6">… un solo cliente? (persona, empresa)</option>
                                <option value="7" >distintos clientes? (incluye público en general)</option>         
                        </select>
                   
            </div>    
             <div class="form-group col-md-6">
                    <label for="PP05G">5g. ¿Ese cliente es… </label>
                     <select class="form-control" name="PP05G" id="PP05G"  >
                                <option value=" " ></option>
                                <option value="1">… una empresa/negocio/institución?</option>
                                <option value="2" >… una familia/hogar?</option>       
                        </select>
            </div>   
             <div class="form-group col-md-6">
                    <label for="PP05H">5h. ¿Durante cuánto tiempo ha estado trabajando en ese empleo en forma continua?</label>
                    <small id="PP05H" class="form-text text-muted"> (Con interrupciones laborales no mayores de 15 días) (no lea, escuche y marque la que corresponda)</small>
                        <select class="form-control" name="PP05H" id="PP05H"  >
                                <option value=" " ></option>
                                <option value="1">Menos de 1 mes</option>
                                <option value="2" >De 1 a 3 meses</option> 
                                <option value="3" >Más de 3 meses y menos de 6 meses</option>  
                                <option value="4" >Más de 6 meses y menos de 1 año</option> 
                                <option value="5" >Más de 1 año y menos de 5 años</option> 
                                <option value="6" >Más de 5 años</option> 
                                <option value="9" >NS/Nr</option>         
                        </select>
            </div>           
        </div>                     
</div>
{{-- @endsection --}}