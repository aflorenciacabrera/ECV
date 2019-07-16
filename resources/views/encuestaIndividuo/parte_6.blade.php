@extends('layouts.app')
@section('content')
<div class="card-body">      
          <div class="row justify-content-center">
                <div class="display5 text-center col-md-6">
                        <label for="">6a. En ese negocio/empresa/actividad ¿tiene socios o familiares asociados?</label>
                        <select class="form-control" name="PP06A" id="PP06A" >
                                <option value=" "> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>             
                        </select>
                </div>
          </div>
          <br>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">6b. ¿Cuántos socios, (familiares o no), son en total (incluyendo a ……………………………)?</label>
                     <input type="number" class="form-control" name="PP04B2" id="PP04B2" step="1" min="0" max="99">
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">6c. Por el mes de…………………. ¿Cuánto ganó en su negocio/empresa/actividad?</label>
                    <input type="number" class="form-control" name="PP06C" id="PP06C" step="1" min="0" max="9999999999">
                     <select class="form-control" name="PP06C_op" id="PP06C_op" >
                                 <option value=" "> </option>
                                <option value="-8">No tuvo ingresos</option>
                                <option value="-7" >No tenía esa ocupación</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
             
        </div> 
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">6d. Por el mes………………………… ¿cuánto ganó…………. en su negocio/empresa/actividad considerando sólo la parte que le corresponde a el/ella</label>
                    <small id="" class="form-text text-muted">(descontando los gastos) </small>
                    <input type="number" class="form-control" name="PP06D" id="PP06D" step="1" min="0" max="9999999999">
                     <select class="form-control" name="PP06D_op" id="PP06D_op" >
                                 <option value=" "> </option>
                                <option value="-8">No tuvo ingresos</option>
                                <option value="-7" >No tenía esa ocupación</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">6e. Ese negocio/empresa/actividad….es una sociedad jurídicamente constituída?</label>
                     <select class="form-control" name="PP06E" id="PP06E" >
                              <option value=" "> </option>
                                <option value="1">(S.A., S.R.L., comandita por acciones, etc.)</option>
                                <option value="2" >… es una sociedad de otra forma legal?</option>
                                <option value="3">… o es una sociedad convenida de palabra?</option>             
                        </select>
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">6f. ¿Tiene sueldo asignado?</label>
                     <select class="form-control" name="PP06F" id="PP06F" >
                              <option value=" "> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>          
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">6g. ¿Cuánto cobró por el mes de ………….….… como sueldo?</label>
                     <input type="number" class="form-control" name="PP06G" id="PP06G" step="1" min="0" max="9999999999">
                     <select class="form-control" name="PP06G_op" id="PP06G_op" >
                                <option value="-8">No cobró nada</option>
                        </select>
            </div>    
        </div>       
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">6h. ¿Es una actividad familiar? </label>
                     <select class="form-control" name="PP06H"  id="PP06H"  >
                              <option value=" "> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>      
                        </select>
                        <input type="text" class="form-control" name="PP06H_Esp" id="PP06H_Esp" maxlength="45">  
                   
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">6i. De lo que produce o vende en su negocio/empresa/actividad, ¿retiró algo para consumo propio o de su hogar?</label>
                      <select class="form-control" name="PP06I" id="PP06I" >
                              <option value=" "> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                         
                        </select>
            </div>           
        </div>            
         <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">6j. Por el mes de………………..,¿Recibió productos o mercaderías como pago por parte de un cliente? </label>
                     <small id="" class="form-text text-muted">(incluye créditos de trueque)</small>
                     <select class="form-control" name="PP06J"  id="PP06J"  >
                              <option value=" "> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>      
                        </select>
                        {{-- <input type="text" class="form-control" name="PP06H_Esp" id="PP06H_Esp" maxlength="45">   --}}
                   <br>
                <label for="">6l. ¿A cuántas horas por día corresponde? </label>  
                <small id="" class="form-text text-muted">(en un día promedio)</small> 
                <input type="number" class="form-control" name="PP06L" id="PP06L" step="1" min="0" max="99">
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">6k. Lo ganado corresponde a su trabajo de…. </label>
                      <select class="form-control" name="PP06K" id="PP06K" >
                              <option value=" "> </option>
                                <option value="1">…. Todo el mes trabajando todos los dás de la semana (por lo menos 5 días a la semana)</option>
                                <option value="2" >… Todo el mes trabajando algunos días a la semana</option> 
                                 <option value="3">…. Menos de todo el mes</option>  
                        </select>
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="">¿Cuántos días por semana?</label> </div>  
                                <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="PP06k_sem" id="PP06K_sem" maxlength="45"> 
                                 </div>  
                                 <div class="form-group col-md-4">
                                        <label for="">¿Cuántos días por mes?</label> </div>  
                                <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="PP06k_mes" id="PP06K_mes" maxlength="45"> 
                                </div>  
                        </div>  
            </div>           
        </div>    
                         
</div>
@endsection