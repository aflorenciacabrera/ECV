{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
                <div class="form-row">
                    <div class="form-group col-md-4">
                                <label for="codigo_area">1. ¿Existen otras viviendas en esta misma dirección? </label>
                                <small id="codigo_area" class="form-text text-muted">(Verifique si están incluidas en el listado. Revise la hoja de ruta) </small>
                                <select class="form-control" name="p3_otra_viv_direc"  >
                                        <option value="1">Si</option>
                                        <option value="2" >No</option>             
                                </select>                       
                    </div>       
                    <div class="form-group col-md-4">
                            <label for="numero_listado">2. ¿Todas las personas que residen en esta vivienda comparten los gastos de comida y/o de alquiler,
                                        impuestos, servicios, etc.?</label>
                                        <select class="form-control" name="p3_comparten_gastos"  >
                                                        <option value="1">Si</option>
                                                        <option value="2" >No</option>             
                                        </select>
                    </div>
                    <div class="form-group col-md-4">
                                <label for="numero_listado">Indague el número de hogares que residen en esta vivienda.</label>
                                <input type="text" class="form-control" id="" name="p3_N_hogar_viv" placeholder="" >
                                <small id="codigo_area" class="form-text text-muted">Hogar: Persona o grupo de personas, parientes o no, que habitan bajo el mismo techo y comparten los gastos de alimentación y/o otros gastos esenciales para vivir.</small>              
                   </div>
                </div>   
                <div class="form-row">
                                <label for="">3. En este/estos hogar/es hay…</label>
                </div> 
                <div class="form-row">
                        
                        <div class="form-group col-md-4">
                                <label for="anio">1… Servicio doméstico con cama adentro?</label>
                                <select class="form-control" name="p3_domestico_cama_adentro"  >
                                                <option value="1">Si</option>
                                                <option value="2" >No</option>             
                                </select>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="respondiente">2… Pensionistas?</label>
                                <select class="form-control" name="p3_pensionistas"  >
                                                <option value="1">Si</option>
                                                <option value="2" >No</option>             
                                </select>
                            
                        </div>
                </div>   
            </div>
        {{--             
            @endsection --}}