{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">    
                {{-- <hr>
                        <label for="" class="d-flex justify-content-center">CUARTA PARTICIPACIÓN </label>                    
                <hr> --}}
                       
                <div class="form-row">
                        <div class="form-group col-md-2">
                                <label for="codigo_area">Trimestre:</label>
                                <input type="text" class="form-control" id="" name="p4_trimestre" aria-describedby="" placeholder=" " >     
                        </div>       
                        <div class="form-group col-md-2">
                                <label for="numero_listado">Año:</label>
                                <input type="text" class="form-control" id="" name="p4_anio" placeholder="" >
                        </div>
                        <div class="form-group col-md-2">
                                <label for="numero_listado">Semana de referencia:</label>
                                <input type="text" class="form-control" id="" name="p4_sem_referencia" placeholder="" >
                        </div>
                        <div class="form-group col-md-3">
                                <label for="anio">Cantidad de hogares en la vivienda:</label>
                                <input type="text" class="form-control" id="" name="p4_cant_hogar" placeholder="" >
                        </div>
                        <div class="form-group col-md-3">
                                <label for="respondiente">Persona entrevistada:</label>
                                <input type="text" class="form-control" id="" name="p4_p_entrevistada" placeholder="" >
                        </div>
                </div>   
               
                <div class="form-row">
                        <div class="form-group col-md-6">
                                <table class="table table-striped table-bordered">
                                        <thead>
                                                <tr>
                                                <th scope="col">Visita Nº</th>
                                                <th scope="col">Fecha y Hora</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td><input type="datetime-local" name="p4_visitas_fecha_hora_1"   value="" ></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td><input type="datetime-local" name="p4_visitas_fecha_hora_2"  value="" ></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td><input type="datetime-local" name="p4_visitas_fecha_hora_3" value="" ></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">4</th>
                                                <td><input type="datetime-local" name="p4_visitas_fecha_hora_4"  value="" ></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">5</th>
                                                <td><input type="datetime-local" name="p4_visitas_fecha_hora_5"  value="" ></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Entrevista Realizada</label>
                                <select class="form-control" name="p4_entrevista_realizada"  >
                                        <option value="1">Si</option>
                                        <option value="2" >No</option>
                                        <option value="3">Salido</option>
                                        <option value="10">Mal tomado</option>
                                </select>
                                <br>
                                <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                                <select class="form-control" name="p4_modalidad_aplicacion"  >
                                        <option value="1">Personal Completa</option>
                                        <option value="2">Personal Telefónico</option>
                                        <option value="3">Solo Telefónica</option>
                                </select>
                                <br>
                                <label for="encuestador">Encuestador</label>
                                <input type="text" class="form-control" id="" name="p4_encuestador" placeholder="" >
                                <label for="numero_encuestador">Nº</label>
                                <input type="text" class="form-control" id="" name="p4_numero_encuestador" placeholder="" >
                        </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="codigo_area">¿Se hizo acompañamiento?</label>
                                <select id="" class="form-control" id="" name="p4_acompaniamiento">
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                </select>
                        </div>       
                        <div class="form-group col-md-4">
                                <label for="numero_listado">Nombre:</label>
                                <input type="text" class="form-control" id="" name="p4_nombre" placeholder="" >
                        </div>
                        <div class="form-group col-md-4">
                                <label for="numero_listado">N°:</label>
                                <input type="text" class="form-control" id="" name="p4_numero" placeholder="" >
                        </div>
                </div> 
        
        </div>           
        {{-- @endsection --}}