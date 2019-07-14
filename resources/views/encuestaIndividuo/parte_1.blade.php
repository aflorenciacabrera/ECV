{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">1a. En la semana pasada, <input type="text" class=" col-md-3" name="nombre"> trabajó por lo menos una hora? </label><small id="" class="form-text text-muted">(sin contar las tareas de su hogar) </small>
                     <select class="form-control" name="PP01A" id="PP01A" >
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">1b. En esa semana, ¿hizo alguna changa, fabricó algo para vender, ayudó a un familiar/amigo en su negocio?</label>
                     <select class="form-control" name="PP01B" id="PP01B"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>
                        
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
             
        </div> 
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">1c. ¿Es un trabajo pago, en dinero o en especie?</label>
                     <select class="form-control" name="PP01C" id="PP01C" ><small id="" class="form-text text-muted"> </small>
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">1d. ¿Trabajó…</label>
                     <select class="form-control" name="PP01D" id="PP01D" >
                                <option value="1">… con un familiar/amigo en su negocio, taller chacra?</option>
                                <option value="2" >… como trabajador ad-honorem?(aprendiz, meritorio judicial, etc)</option>
                                <option value="3">… de otra forma? (especificar)</option>             
                        </select>
                        <input type="text" class="form-control" name="PP01D_Esp" id="PP01D_Esp"> 
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">1e. La semana pasada…</label>
                     <select class="form-control" name="PP01E" id="PP01E"><small id="" class="form-text text-muted"> </small>
                                <option value="1">… no deseaba/no quería trabajar?</option>
                                <option value="2" >… no podía trabajar por razones personales? (cuidado del hogar, estudios, incapacidad)</option>
                                <option value="3" >… no tenía/ no conseguía trabajo?</option>
                                <option value="4" >… no tuvo pedidos/clientes?</option>
                                <option value="5" >tenía un trabajo/negocio al que no concurrió?</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">1f- ¿No concurrió por….</label>
                     <select class="form-control" name="PP01F" id="PP01F" >
                                <option value="1">… vacaciones, licencia? (enfermedad, matrimonio, embarazo, etc.)</option>
                                <option value="2" >… causas personales? (viajes, trámites, etc)</option>
                                <option value="3">… huelga/conflicto laboral?</option>    
                                <option value="4">… Suspensión?</option>  
                                <option value="5">… otras causas laborales? (rotura de equipos, falta de materias primas, mal tiempo)</option>           
                        </select>
                        <input type="text" class="form-control" name="PP01F_Esp" id="PP01F_Esp"> 
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
        </div>       
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">1g. ¿Le mantienen el pago durante la suspensión? </label>
                     <select class="form-control" name="PP01G" id="PP01G" >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">1h. ¿Volverá a ese trabajo a lo sumo en un mes?</label>
                      <select class="form-control" name="PP01H" id="PP01H"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                        
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
             
        </div>                   
</div>
{{-- @endsection --}}