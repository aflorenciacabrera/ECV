{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE NO TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">   
            <div class="form-group col-md-6">
                    <label for="codigo_area">3a. ¿Cuántos empleos/ocupaciones tiene?</label>
                    <small id="codigo_area" class="form-text text-muted"> (En el caso de tener más de un empleo, verifique que no haya trabajado en ninguno durante la semana pasada)</small>
                    <input class="form-control" name="" >    
            </div>                       
             <div class="form-group col-md-6">
                     <br>
                    <label for="codigo_area">3b. ¿Cuántas horas semanales trabaja habitualmente en todos sus empleos/ocupaciones…</label>
                     <select class="form-control" name=""  >
                                <option value="1">… menos de 35 horas semanales?</option>
                                <option value="2" >… entre 35 y 45 horas?</option> 
                                <option value="3" >… Más de 45 horas semanales?</option>   
                                <option value="4" >… a veces más y a veces menos</option>   
                                <option value="9" >-Ns/Nr</option>                                          
                        </select>                      
            </div>           
        </div> 
        <hr>
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">3c. La semana pasada, ¿tenía…</label>
                     <select class="form-control" name=""  ><small id="" class="form-text text-muted"> </small>
                                <option value="1">… un solo empleo/ocupación/actividad?</option>
                                <option value="2" >… más de un empleo/ocupación/actividad?</option>             
                        </select>
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">3d. ¿Cuántos?</label>
                        <input type="text" class="form-control" name=""> 
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="codigo_area">3e. En su ocupación…</label>                    
                    <small id="codigo_area" class="form-text text-muted"> (la que habitualmente le lleva más horas)</small>
                     <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">La semana pasada ¿trabajó el…  <small id="codigo_area" class="form-text text-muted">(marque con cruz)</small></th>
                                        <th scope="col">¿Cuántas horas trabajó el…</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <th scope="row">domingo?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? <input type="text" name=""></th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes?  <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?  <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                </tbody>
                        </table>
            </div>    
             <div class="form-group col-md-6">
                    <label for="codigo_area">3f. En sus otras ocupaciones…</label>
                    <small id="codigo_area" class="form-text text-muted"> <br></small>
                    <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">La semana pasada ¿trabajó el…  <small id="codigo_area" class="form-text text-muted">(marque con cruz)</small></th>
                                        <th scope="col">¿Cuántas horas trabajó el…</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <th scope="row">domingo?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? <input type="text" name=""></th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes?  <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?  <input type="text"  name=""> </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="text"  name=""></td>
                                        </tr>
                                </tbody>
                        </table>
            </div>    
        </div>       
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area"> 3g. La semana pasada, ¿Quéria trabajar más horas?</label>
                     <select class="form-control" name=""  >
                                <option value="1">Si</option>
                                <option value="2" >No</option>                                
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">3h. ¿Si hubiera conseguido más horas…</label>
                      <select class="form-control" name=""  >
                                <option value="1">… podía trabajarlas esa semana?</option>
                                <option value="2" >… podía empezar a trabajarlas en dos semanas a más tardar?</option>
                                <option value="3">… no podía trabajar más horas?</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                        
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>           
        </div>      
        <hr>
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE NO TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="codigo_area">3i. En los últimos 30 días, ¿buscó trabajar más horas? </label>
                     <select class="form-control" name=""  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="codigo_area">3j. Aparte de este/os trabajo/s ¿estuvo buscando algún
empleo/ocupación/actividad?</label>
                      <select class="form-control" name=""  >
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
            </div>           
        </div>     
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="codigo_area">3k. ¿Estuvo buscando porque…</label>
                        <select class="form-control" name=""  >
                                        <option value="1">… quería cambiar de trabajo?</option>
                                        <option value="2" >… quería agregar al que tiene?</option>
                                        <option value="3">… se termina el trabajo que tiene?</option> 
                                        <option value="4" >estaba sin trabajo?</option>             
                                </select>
                </div>              
        </div>  
</div>
{{-- @endsection --}}