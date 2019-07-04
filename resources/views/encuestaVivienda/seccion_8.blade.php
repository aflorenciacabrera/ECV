{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="">¿Salió a supervisión?  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="supervision"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                
                        </select>  
                        <hr>
            </div> 
            
        </div>  
         <div class="form-group col-md-6">                
               <label for=""><h3>Primera participación</h3></label>   
                <div class=" col-md-3"> Supervisor Nº </div> 
                <input type="text" class="form-control" name="num_super"> 
               
            </div>  
            <hr>
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
                                        <td><input type="datetime-local" name=""   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name=""  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="" value="" ></td>
                                        </tr>
                                        
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                        <select class="form-control" name=""  >
                                <option value="1">Personal Completa</option>
                                <option value="2">Personal Telefónico</option>
                                <option value="3">Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="exampleInputPassword1">El encuestador entregó...</label>
                        <select class="form-control" name=""  >
                                <option value="7">Ausencia</option>
                                <option value="8" >Rechazo</option> 
                                <option value="9" >Otras causas</option>     
                                 <option value="10" >Mal tomada</option>         
                        </select>

                </div>
        </div>
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="" id="" cols="200" rows="3" ></textarea>                             
                </div>          
            </div> 
            <hr>
 </div> 
{{-- -------------------------------------------------------------------------   --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="">¿Salió a supervisión?  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="supervision"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                
                        </select>  
                        <hr>
            </div> 
            
        </div>  
         <div class="form-group col-md-6">                
               <label for=""><h3>Segunda participación</h3></label>   
                <div class=" col-md-3"> Supervisor Nº </div> 
                <input type="text" class="form-control" name="num_super"> 
               
            </div>  
            <hr>
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
                                        <td><input type="datetime-local" name=""   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name=""  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="" value="" ></td>
                                        </tr>
                                        
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                        <select class="form-control" name=""  >
                                <option value="1">Personal Completa</option>
                                <option value="2">Personal Telefónico</option>
                                <option value="3">Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="exampleInputPassword1">El encuestador entregó...</label>
                        <select class="form-control" name=""  >
                                <option value="7">Ausencia</option>
                                <option value="8" >Rechazo</option> 
                                <option value="9" >Otras causas</option>     
                                 <option value="10" >Mal tomada</option>         
                        </select>

                </div>
        </div>
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="" id="" cols="200" rows="3" ></textarea>                             
                </div>          
            </div> 
            <hr>
 </div> 
{{-- -------------------------------------------------------------------------   --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="">¿Salió a supervisión?  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="supervision"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                
                        </select>  
                        <hr>
            </div> 
            
        </div>  
         <div class="form-group col-md-6">                
               <label for=""><h3>Tercera participación</h3></label>   
                <div class=" col-md-3"> Supervisor Nº </div> 
                <input type="text" class="form-control" name="num_super"> 
               
            </div>  
            <hr>
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
                                        <td><input type="datetime-local" name=""   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name=""  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="" value="" ></td>
                                        </tr>
                                        
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                        <select class="form-control" name=""  >
                                <option value="1">Personal Completa</option>
                                <option value="2">Personal Telefónico</option>
                                <option value="3">Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="exampleInputPassword1">El encuestador entregó...</label>
                        <select class="form-control" name=""  >
                                <option value="7">Ausencia</option>
                                <option value="8" >Rechazo</option> 
                                <option value="9" >Otras causas</option>     
                                 <option value="10" >Mal tomada</option>         
                        </select>

                </div>
        </div>
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="" id="" cols="200" rows="3" ></textarea>                             
                </div>          
            </div> 
            <hr>
 </div> 
{{-- -------------------------------------------------------------------------   --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="">¿Salió a supervisión?  </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="supervision"  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                
                        </select>  
                        <hr>
            </div> 
            
        </div>  
         <div class="form-group col-md-6">                
               <label for=""><h3>Cuarta participación</h3></label>   
                <div class=" col-md-3"> Supervisor Nº </div> 
                <input type="text" class="form-control" name="num_super"> 
               
            </div>  
            <hr>
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
                                        <td><input type="datetime-local" name=""   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name=""  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="" value="" ></td>
                                        </tr>
                                        
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                        <select class="form-control" name=""  >
                                <option value="1">Personal Completa</option>
                                <option value="2">Personal Telefónico</option>
                                <option value="3">Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="exampleInputPassword1">El encuestador entregó...</label>
                        <select class="form-control" name=""  >
                                <option value="7">Ausencia</option>
                                <option value="8" >Rechazo</option> 
                                <option value="9" >Otras causas</option>     
                                 <option value="10" >Mal tomada</option>         
                        </select>

                </div>
        </div>
             <div class="form-group row"> 
                <div class=" form-group col-md-12">
                    <label for="descripcion">OBSERVACIONES:</label>   
                    <textarea   class="form-control"name="" id="" cols="200" rows="3" ></textarea>                             
                </div>          
            </div> 
            <hr>
 </div> 
{{-- -------------------------------------------------------------------------   --}}
{{-- @endsection --}}