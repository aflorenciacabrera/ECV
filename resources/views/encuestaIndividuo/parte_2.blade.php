{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">2a. Si la semana pasada conseguía un trabajo, ¿podía empezar a trabajar ya ( o a más tardar en dos semanas) (no lea escuche la respuesta y marque la que corresponda)</label>
                     <select class="form-control" name="PP02A" id="PP02A">
                               <option value=""> </option>
                                <option value="1">Sí, podía</option>
                                <option value="2" >Sí, pero con ciertas condiciones laborales (horarios, tipo detrabajo, distancia, etc)</option>  
                                <option value="3">No podía por razones personales momentáneas</option>
                                <option value="4">No, porque no desea trabajar</option>           
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">2b. ¿Durante los útlimos 30 días, estuvo buscando trabajo de alguna manera?</label>
                     <select class="form-control" name="PP02B" id="PP02B"  >
                               <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>                        
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
             
        </div> 
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">2c. ¿De qué manera estuvo buscando trabajo?</label>
                     <select class="form-control" name="PP02C" id="PP02C"  >
                               <option value=""> </option>
                                <option value="1">Hizo contactos, entrevistas</option>
                                <option value="2" >Mandó Curriculum/puso/contestó avisos (diarios, internet)</option> 
                                <option value="3" >Se presentó en establecimientos</option>
                                <option value="4" >Hizo algo para ponerse por su cuenta</option>
                                <option value="5" >Puso carteles en negocios, preguntó en el barrio</option>
                                <option value="6" >Consultó a parientes/amigos </option>
                                <option value="7" >Se anotó en bolsas, listas, planes de empleo, agencias, contratistas, o alguien le está buscando</option>
                                <option value="8" >De otra forma activa (especificar)</option>   
                        </select>
                        <input type="text" class="form-control" name="PP02C_Esp" id="PP02C_Esp">     
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">2d. ¿Durante esos 30 días, consultó amigos/ parientes, puso carteles, hizo algo para ponerse por su cuenta?</label>
                        <select class="form-control" name="PP02D" id="PP02D"  >
                                  <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2">No</option>                                           
                        </select>
                        <input type="text" class="form-control" name="PP02D_Esp" id="PP02D_Esp">                   
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">2e. ¿durante esos 20 días, no buscó trabajo porque….</label>
                     <select class="form-control" name="PP02E" id="PP02E" >
                               <option value=""> </option>
                                <option value="1" >…. Está suspendido?</option>
                                <option value="2" >…. Ya tiene trabajo asegurado?</option>
                                <option value="3" >… se cansó de buscar trabajo?</option>
                                <option value="4" >… hay poco trabajo en esta época del año?</option> 
                                <option value="5" > … por otras razones? (especificar)</option>   
                                <input type="text" class="form-control" name="PP02E_Esp" id="PP02E_Esp">          
                        </select>                  
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">2f. ¿Durante los últimos 30 días, estuvo buscando trabajo de alguna manera?</label>
                        <select class="form-control" name="PP02F" id="PP02F" >
                                  <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>      
                        </select>                  
            </div>    
        </div>       
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="codigo_area">2g. ¿Puede……… empezar a trabajar ya? (o a más tardar en dos semanas)</label>
                      <select class="form-control" name="PP02G" id="PP02G" >
                                <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>            
                        </select>                       
            </div>  
            <div class="form-group col-md-6">
                    <label for="codigo_area">2h. En los últimos 12 meses ¿buscó trabajo en algún momento? </label>
                     <select class="form-control" name="PP02H" id="PP02H"  >
                               <option value=""> </option>
                                 <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>                  
            </div>                                  
        </div>               
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="codigo_area">2i. En los últimos 12 meses ¿trabajó en algún momento?</label>
                      <select class="form-control" name="PP02I" id="PP02I"  >
                                <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>            
                        </select>                       
            </div>  
            <div class="form-group col-md-6">
                    <label for="codigo_area">OBSERVACIONES</label>
                      <textarea  type="text" class="form-control" name="PP02Obser" id="PP02Obser" cols="200" rows="2" ></textarea>                    
            </div>                                  
        </div>       
</div>
{{-- @endsection --}}