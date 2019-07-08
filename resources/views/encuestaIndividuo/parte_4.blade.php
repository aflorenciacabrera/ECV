@extends('layouts.app')
@section('content')
<div class="card-body">   
        <small id="" class="form-text text-muted"><h5>OCUPACIÓN DE MÁS HORAS</h5> </small>   
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codigo_area">4a. ¿El negocio/empresa/institución/actividad en la que trabaja es… </label><small id="" class="form-text text-muted">(se refiere al que trabaja más horas semanales) </small>
                <select class="form-control" name=""  >
                                <option value="1">… estatal?</option>
                                <option value="2" >… privada?</option> 
                                 <option value="3" >… de otro tipo? (especificar)</option>            
                </select>
                <input type="text" class="form-control" name=""> 
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">4b. ¿A qué se dedica o qué produce ese negocio/empresa/institución?</label>
                    <input type="text" class="form-control" name=""> 
            </div>           
             
        </div> 
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">1c. ¿Es un trabajo pago, en dinero o en especie?</label>
                     <select class="form-control" name=""  ><small id="" class="form-text text-muted"> </small>
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">1d. ¿Trabajó…</label>
                     <select class="form-control" name=""  >
                                <option value="1">… con un familiar/amigo en su negocio, taller chacra?</option>
                                <option value="2" >… como trabajador ad-honorem?(aprendiz, meritorio judicial, etc)</option>
                                <option value="3">… de otra forma? (especificar)</option>             
                        </select>
                        <input type="text" class="form-control" name=""> 
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">1e. La semana pasada…</label>
                     <select class="form-control" name=""  ><small id="" class="form-text text-muted"> </small>
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
                     <select class="form-control" name=""  >
                                <option value="1">… vacaciones, licencia? (enfermedad, matrimonio, embarazo, etc.)</option>
                                <option value="2" >… causas personales? (viajes, trámites, etc)</option>
                                <option value="3">… huelga/conflicto laboral?</option>    
                                <option value="4">… Suspensión?</option>  
                                <option value="5">… otras causas laborales? (rotura de equipos, falta de materias primas, mal tiempo)</option>           
                        </select>
                        <input type="text" class="form-control" name=""> 
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
        </div>       
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">1g. ¿Le mantienen el pago durante la suspensión? </label>
                     <select class="form-control" name=""  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="3" >NS/Nr</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">1h. ¿Volverá a ese trabajo a lo sumo en un mes?</label>
                      <select class="form-control" name=""  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="3" >NS/Nr</option>             
                        </select>
                        
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
             
        </div>                   
</div>
@endsection