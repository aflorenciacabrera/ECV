@extends('layouts.app')
@section('content')
<div class="card-body">      
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE NO TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">   
            <div class="form-group col-md-6">
                    <label for="PP03A">3a. ¿Cuántos empleos/ocupaciones tiene?</label>
                    <small id="PP03A" class="form-text text-muted"> (En el caso de tener más de un empleo, verifique que no haya trabajado en ninguno durante la semana pasada)</small>
                    <input class="form-control" type="number" name="PP03A" id="PP03A" step="1" min="0" max="99" >    
            </div>                       
             <div class="form-group col-md-6">
                     <br>
                    <label for="PP03B">3b. ¿Cuántas horas semanales trabaja habitualmente en todos sus empleos/ocupaciones…</label>
                     <select class="form-control" name="PP03B" id="PP03B" >
                                <option value=""> </option>
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
                    <label for="PP03C">3c. La semana pasada, ¿tenía…</label>
                     <select class="form-control" name="PP03C" id="PP03C" ><small id="" class="form-text text-muted"> </small>
                                <option value="1">… un solo empleo/ocupación/actividad?</option>
                                <option value="2" >… más de un empleo/ocupación/actividad?</option>             
                        </select>
            </div>    
             <div class="form-group col-md-6">
                    <label for="PP03D">3d. ¿Cuántos?</label>
                        <input type="text" class="form-control" name="PP03D" id="PP03D" step="1" min="0" max="99"> 
            </div>    
        </div>   
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP03E">3e. En su ocupación…</label>                    
                    <small id="PP03E" class="form-text text-muted"> (la que habitualmente le lleva más horas)</small>
                     <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">La semana pasada ¿trabajó el…  </th>
                                        <th scope="col">¿Cuántas horas trabajó el…</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <th scope="row">Domingo? </th>
                                        <td>  <input type="number"  class="form-control" name="PP03E_domigo"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?    </th>
                                        <td>  <input type="number" class="form-control"  name="PP03E_lunes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? </th>
                                        <td>  <input type="number" class="form-control"  name="PP03E_martes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?    </th>
                                        <td>  <input type="number" class="form-control"  name="PP03E_miercoles"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   </th>
                                        <td>  <input type="number" class="form-control"  name="PP03E_jueves"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes? </th>
                                        <td>  <input type="number"  class="form-control" name="PP03E_viernes"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?   </th>
                                        <td>  <input type="number"  class="form-control" name="PP03E_sabado"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="number" class="form-control" max="999"  name="PP03E" id="PP03E" ></td>
                                        </tr>
                                </tbody>
                        </table>
            </div>    
             <div class="form-group col-md-6">
                    <label for="PP03F">3f. En sus otras ocupaciones…</label>
                    <small id="" class="form-text text-muted"> <br></small>
                    <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">La semana pasada ¿trabajó el… </th>
                                        <th scope="col">¿Cuántas horas trabajó el…</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <th scope="row">Domingo? </th>
                                        <td>  <input type="number"  class="form-control" name="PP03F_domingo"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?    </th>
                                        <td>  <input type="number" class="form-control"  name="PP03F_lunes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? </th>
                                        <td>  <input type="number" class="form-control"  name="PP03F_martes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?    </th>
                                        <td>  <input type="number" class="form-control"  name="PP03F_miercoles"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   </th>
                                        <td>  <input type="number" class="form-control"  name="PP03F_jueves"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes? </th>
                                        <td>  <input type="number"  class="form-control" name="PP03F_viernes"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?   </th>
                                        <td>  <input type="number"  class="form-control" name="PP03F_sabado"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="text"  class="form-control"  name="PP03F" id="PP03F"></td>
                                        </tr>
                                </tbody>
                        </table>
            </div>    
        </div>       
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP03G"> 3g. La semana pasada, ¿Quéria trabajar más horas?</label>
                     <select class="form-control" name="PP03G" id="PP03G">
                               <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option>                                
                        </select>
                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="PP03H">3h. ¿Si hubiera conseguido más horas…</label>
                      <select class="form-control" name="PP03H" id="PP03H">
                                <option value=""> </option>
                                <option value="1">… podía trabajarlas esa semana?</option>
                                <option value="2" >… podía empezar a trabajarlas en dos semanas a más tardar?</option>
                                <option value="3">… no podía trabajar más horas?</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                        
                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>           
        </div>      
        <hr>
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE NO TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP03I">3i. En los últimos 30 días, ¿buscó trabajar más horas? </label>
                     <select class="form-control" name="PP03I" id="PP03I">
                               <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>   
             <div class="form-group col-md-6">
                    <label for="PP03J">3j. Aparte de este/os trabajo/s ¿estuvo buscando algún
empleo/ocupación/actividad?</label>
                      <select class="form-control" name="PP03J" id="PP03J"  >
                                <option value=""> </option>
                                <option value="1">Si</option>
                                <option value="2" >No</option> 
                                <option value="9" >NS/Nr</option>             
                        </select>
            </div>           
        </div>     
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="PP03K">3k. ¿Estuvo buscando porque…</label>
                        <select class="form-control" name="PP03K" id="PP03K" >
                                  <option value=""> </option>
                                <option value="1">… quería cambiar de trabajo?</option>
                                <option value="2" >… quería agregar al que tiene?</option>
                                <option value="3">… se termina el trabajo que tiene?</option> 
                                <option value="4" >estaba sin trabajo?</option>             
                                </select>
                </div>              
        </div>  
</div>
@endsection