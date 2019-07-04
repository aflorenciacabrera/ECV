{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            
            <div class="form-group col-md-6">
                   <label for=""><h3>Primera participación</h3>  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="p1_no_entrevista"  >
                                <option value="1">Deshabilitada</option>
                                <option value="2" >Demolida</option> 
                                <option value="3" >Fin de semana</option>  
                                <option value="4" >Construcción</option> 
                                <option value="5" >Vivienda utilizada</option> 
                                <option value="6" >Variaciones en el listado</option>
                                <option value="7" >Ausencia</option>
                                <option value="8" >Rechazo</option>
                                <option value="9" >Otras causas</option>          
                        </select>  
            </div> 
             <div class="form-group col-md-6">                
                        <select class="form-control" name="p1_no_entrevista_1"  >
                                <option value="1">Venta o alquiler</option>
                                <option value="2" >Sucesión o remate</option> 
                                <option value="3" >Deshabilitada en la semana de referencia</option>  
                                <option value="4" >Sin causa conocida</option>                   
                        </select>  
                        <br>
                         <select class="form-control" name="p1_no_entrevista_2"  >
                                <option value="1">Fue demolida</option>
                                <option value="2" >En demolición</option> 
                                <option value="3" >Levantada</option>  
                                <option value="4" >Trasladada</option>                   
                        </select>  
                        <br>
                        <select class="form-control" name="p1_no_entrevista_3"  >
                                <option value="1">de la semana</option>
                                <option value="2" >Viven en otra vivienda la mayor parte del mes</option> 
                                <option value="3" >Viven en otra vivienda la mayor parte del año</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p1_no_entrevista_4"  >
                                <option value="1">Se está construyendo</option>
                                <option value="2" >Construcción paralizada</option> 
                                <option value="3" >Refacción</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p1_no_entrevista_5"  >
                                <option value="1">Conserva la comodidad de vivienda</option>    
                        </select>  
                        <br>
                         <select class="form-control" name="p1_no_entrevista_6"  >
                                <option value="1">No existe lugar físico</option> 
                                <option value="2">No es vivienda</option>   
                        </select> 
                        <br>
                         <select class="form-control" name="p1_no_entrevista_7"  >
                                <option value="1">No se pudo contactar en tres visitas</option>
                                <option value="2" >Por causas circunstanciales</option> 
                                <option value="3" >Viaje</option>  
                                <option value="4" >Vacaciones</option>                   
                        </select>  
                         <br>
                         <select class="form-control" name="p1_no_entrevista_8"  >
                                <option value="1">Negativa rotunda</option>
                                <option value="2" >Rechazo por el portero eléctrico</option> 
                                <option value="3" >Se acordaron entrevistas que no se concretaron</option>                    
                        </select>  
                        <br>
                         <select class="form-control" name="p1_no_entrevista_9"  >
                                <option value="1">Duelo</option>
                                <option value="2" >Alcoholismo, discapacidad, idioma</option> 
                                <option value="3" >Problema de seguridad</option>  
                                <option value="4" >Inaccesible (problemas climáticos u otros)</option>                   
                        </select>  
            </div> 
        </div>   
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">INFORMANTE/OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="p1_observaciones" id="p1_descripcion" cols="200" rows="3" ></textarea>                             
                </div>          
            </div>   
 </div> 
<hr> 
<div class="card-body">      
        <div class="form-row">
            
            <div class="form-group col-md-6">
                   <label for=""><h3>Segunda participación</h3>  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="p2_no_entrevista"  >
                                <option value="1">Deshabilitada</option>
                                <option value="2" >Demolida</option> 
                                <option value="3" >Fin de semana</option>  
                                <option value="4" >Construcción</option> 
                                <option value="5" >Vivienda utilizada</option> 
                                <option value="6" >Variaciones en el listado</option>
                                <option value="7" >Ausencia</option>
                                <option value="8" >Rechazo</option>
                                <option value="9" >Otras causas</option>          
                        </select>  
            </div> 
             <div class="form-group col-md-6">                
                        <select class="form-control" name="p2_no_entrevista_1"  >
                                <option value="1">Venta o alquiler</option>
                                <option value="2" >Sucesión o remate</option> 
                                <option value="3" >Deshabilitada en la semana de referencia</option>  
                                <option value="4" >Sin causa conocida</option>                   
                        </select>  
                        <br>
                         <select class="form-control" name="p2_no_entrevista_2"  >
                                <option value="1">Fue demolida</option>
                                <option value="2" >En demolición</option> 
                                <option value="3" >Levantada</option>  
                                <option value="4" >Trasladada</option>                   
                        </select>  
                        <br>
                        <select class="form-control" name="p2_no_entrevista_3"  >
                                <option value="1">de la semana</option>
                                <option value="2" >Viven en otra vivienda la mayor parte del mes</option> 
                                <option value="3" >Viven en otra vivienda la mayor parte del año</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p2_no_entrevista_4"  >
                                <option value="1">Se está construyendo</option>
                                <option value="2" >Construcción paralizada</option> 
                                <option value="3" >Refacción</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p2_no_entrevista_5"  >
                                <option value="1">Conserva la comodidad de vivienda</option>    
                        </select>  
                        <br>
                         <select class="form-control" name="p2_no_entrevista_6"  >
                                <option value="1">No existe lugar físico</option> 
                                <option value="2">No es vivienda</option>   
                        </select> 
                        <br>
                         <select class="form-control" name="p2_no_entrevista_7"  >
                                <option value="1">No se pudo contactar en tres visitas</option>
                                <option value="2" >Por causas circunstanciales</option> 
                                <option value="3" >Viaje</option>  
                                <option value="4" >Vacaciones</option>                   
                        </select>  
                         <br>
                         <select class="form-control" name="p2_no_entrevista_8"  >
                                <option value="1">Negativa rotunda</option>
                                <option value="2" >Rechazo por el portero eléctrico</option> 
                                <option value="3" >Se acordaron entrevistas que no se concretaron</option>                    
                        </select>  
                        <br>
                         <select class="form-control" name="p2_no_entrevista_9"  >
                                <option value="1">Duelo</option>
                                <option value="2" >Alcoholismo, discapacidad, idioma</option> 
                                <option value="3" >Problema de seguridad</option>  
                                <option value="4" >Inaccesible (problemas climáticos u otros)</option>                   
                        </select>  
            </div> 
        </div>   
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">INFORMANTE/OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="p2_observaciones" id="p2_descripcion" cols="200" rows="3" ></textarea>                             
                </div>          
            </div>   
 </div> 
<hr> 
<div class="card-body">      
        <div class="form-row">
            
            <div class="form-group col-md-6">
                   <label for=""><h3>Tercera participación</h3>  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="p3_no_entrevista"  >
                                <option value="1">Deshabilitada</option>
                                <option value="2" >Demolida</option> 
                                <option value="3" >Fin de semana</option>  
                                <option value="4" >Construcción</option> 
                                <option value="5" >Vivienda utilizada</option> 
                                <option value="6" >Variaciones en el listado</option>
                                <option value="7" >Ausencia</option>
                                <option value="8" >Rechazo</option>
                                <option value="9" >Otras causas</option>          
                        </select>  
            </div> 
             <div class="form-group col-md-6">                
                        <select class="form-control" name="p3_no_entrevista_1"  >
                                <option value="1">Venta o alquiler</option>
                                <option value="2" >Sucesión o remate</option> 
                                <option value="3" >Deshabilitada en la semana de referencia</option>  
                                <option value="4" >Sin causa conocida</option>                   
                        </select>  
                        <br>
                         <select class="form-control" name="p3_no_entrevista_2"  >
                                <option value="1">Fue demolida</option>
                                <option value="2" >En demolición</option> 
                                <option value="3" >Levantada</option>  
                                <option value="4" >Trasladada</option>                   
                        </select>  
                        <br>
                        <select class="form-control" name="p3_no_entrevista_3"  >
                                <option value="1">de la semana</option>
                                <option value="2" >Viven en otra vivienda la mayor parte del mes</option> 
                                <option value="3" >Viven en otra vivienda la mayor parte del año</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p3_no_entrevista_4"  >
                                <option value="1">Se está construyendo</option>
                                <option value="2" >Construcción paralizada</option> 
                                <option value="3" >Refacción</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p3_no_entrevista_5"  >
                                <option value="1">Conserva la comodidad de vivienda</option>    
                        </select>  
                        <br>
                         <select class="form-control" name="p3_no_entrevista_6"  >
                                <option value="1">No existe lugar físico</option> 
                                <option value="2">No es vivienda</option>   
                        </select> 
                        <br>
                         <select class="form-control" name="p3_no_entrevista_7"  >
                                <option value="1">No se pudo contactar en tres visitas</option>
                                <option value="2" >Por causas circunstanciales</option> 
                                <option value="3" >Viaje</option>  
                                <option value="4" >Vacaciones</option>                   
                        </select>  
                         <br>
                         <select class="form-control" name="p3_no_entrevista_8"  >
                                <option value="1">Negativa rotunda</option>
                                <option value="2" >Rechazo por el portero eléctrico</option> 
                                <option value="3" >Se acordaron entrevistas que no se concretaron</option>                    
                        </select>  
                        <br>
                         <select class="form-control" name="p3_no_entrevista_9"  >
                                <option value="1">Duelo</option>
                                <option value="2" >Alcoholismo, discapacidad, idioma</option> 
                                <option value="3" >Problema de seguridad</option>  
                                <option value="4" >Inaccesible (problemas climáticos u otros)</option>                   
                        </select>  
            </div> 
        </div>   
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">INFORMANTE/OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="p3_observaciones" id="p3_descripcion" cols="200" rows="3" ></textarea>                             
                </div>          
            </div>   
 </div> 
<hr> 
<div class="card-body">      
        <div class="form-row">
            
            <div class="form-group col-md-6">
                   <label for=""><h3>Cuarta participación</h3>  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="p4_no_entrevista"  >
                                <option value="1">Deshabilitada</option>
                                <option value="2" >Demolida</option> 
                                <option value="3" >Fin de semana</option>  
                                <option value="4" >Construcción</option> 
                                <option value="5" >Vivienda utilizada</option> 
                                <option value="6" >Variaciones en el listado</option>
                                <option value="7" >Ausencia</option>
                                <option value="8" >Rechazo</option>
                                <option value="9" >Otras causas</option>          
                        </select>  
            </div> 
             <div class="form-group col-md-6">                
                        <select class="form-control" name="p4_no_entrevista_1"  >
                                <option value="1">Venta o alquiler</option>
                                <option value="2" >Sucesión o remate</option> 
                                <option value="3" >Deshabilitada en la semana de referencia</option>  
                                <option value="4" >Sin causa conocida</option>                   
                        </select>  
                        <br>
                         <select class="form-control" name="p4_no_entrevista_2"  >
                                <option value="1">Fue demolida</option>
                                <option value="2" >En demolición</option> 
                                <option value="3" >Levantada</option>  
                                <option value="4" >Trasladada</option>                   
                        </select>  
                        <br>
                        <select class="form-control" name="p4_no_entrevista_3"  >
                                <option value="1">de la semana</option>
                                <option value="2" >Viven en otra vivienda la mayor parte del mes</option> 
                                <option value="3" >Viven en otra vivienda la mayor parte del año</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p4_no_entrevista_4"  >
                                <option value="1">Se está construyendo</option>
                                <option value="2" >Construcción paralizada</option> 
                                <option value="3" >Refacción</option>                            
                        </select>  
                        <br>
                         <select class="form-control" name="p4_no_entrevista_5"  >
                                <option value="1">Conserva la comodidad de vivienda</option>    
                        </select>  
                        <br>
                         <select class="form-control" name="p4_no_entrevista_6"  >
                                <option value="1">No existe lugar físico</option> 
                                <option value="2">No es vivienda</option>   
                        </select> 
                        <br>
                         <select class="form-control" name="p4_no_entrevista_7"  >
                                <option value="1">No se pudo contactar en tres visitas</option>
                                <option value="2" >Por causas circunstanciales</option> 
                                <option value="3" >Viaje</option>  
                                <option value="4" >Vacaciones</option>                   
                        </select>  
                         <br>
                         <select class="form-control" name="p4_no_entrevista_8"  >
                                <option value="1">Negativa rotunda</option>
                                <option value="2" >Rechazo por el portero eléctrico</option> 
                                <option value="3" >Se acordaron entrevistas que no se concretaron</option>                    
                        </select>  
                        <br>
                         <select class="form-control" name="p4_no_entrevista_9"  >
                                <option value="1">Duelo</option>
                                <option value="2" >Alcoholismo, discapacidad, idioma</option> 
                                <option value="3" >Problema de seguridad</option>  
                                <option value="4" >Inaccesible (problemas climáticos u otros)</option>                   
                        </select>  
            </div> 
        </div>   
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">INFORMANTE/OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="p4_observaciones" id="p4_descripcion" cols="200" rows="3" ></textarea>                             
                </div>          
            </div>   
 </div> 
<hr> 
{{-- @endsection --}}