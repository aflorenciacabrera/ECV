{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE NO TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP03A">3a. ¿Cuántos empleos/ocupaciones tiene?</label>

                    <input class="form-control" type="number"  min=0 step=1  disabled onchange="update_parte_3()" name="PP03A" id="PP03A" step="1" min="0" max="99">
            </div>
             <div class="form-group col-md-6">
                     <br>
                    <label for="PP03B">3b. ¿Cuántas horas semanales trabaja habitualmente en todos sus empleos/ocupaciones…</label>
                     <select class="form-control" disabled onchange="update_parte_3()" name="PP03B" id="PP03B">
                                <option value=""> </option>
                                <option value="1">…1.  menos de 35 horas semanales?</option>
                                <option value="2">2. … entre 35 y 45 horas?</option>
                                <option value="3">3. … Más de 45 horas semanales?</option>
                                <option value="4">4. … a veces más y a veces menos</option>
                                <option value="9">9. -Ns/Nr</option>
                        </select>
            </div>
        </div>
        <hr>
        <small id="" class="form-text text-muted"><h5>OCUPADOS QUE TRABAJARON EN LA SEMANA</h5> </small>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP03C">3c. La semana pasada, ¿tenía…</label>
                     <select class="form-control" disabled onchange="update_parte_3()" name="PP03C" id="PP03C"><small id="" class="form-text text-muted"> </small>
                        <option value=""></option>
                        <option value="1">1. … un solo empleo/ocupación/actividad?</option>
                                <option value="2">2. … más de un empleo/ocupación/actividad?</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP03D">3d. ¿Cuántos?</label>
                        <input type="text" class="form-control" disabled onchange="update_parte_3()" name="PP03D" id="PP03D" step="1" min="0" max="99">
            </div>
        </div>
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP03E">3e. En su ocupación…</label>
                    <small class="form-text text-muted"> (la que habitualmente le lleva más horas)</small>
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
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E" disabled onchange="update_parte_3()" name="PP03E_domigo"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?    </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E"  disabled onchange="update_parte_3()" name="PP03E_lunes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E"  disabled onchange="update_parte_3()" name="PP03E_martes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?    </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E"  disabled onchange="update_parte_3()" name="PP03E_miercoles"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E"  disabled onchange="update_parte_3()" name="PP03E_jueves"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes? </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E" disabled onchange="update_parte_3()" name="PP03E_viernes"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?   </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E" disabled onchange="update_parte_3()" name="PP03E_sabado"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03E" max="999"  disabled onchange="update_parte_3()" name="PP03E" id="PP03E"></td>
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
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F" disabled onchange="update_parte_3()" name="PP03F_domingo"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">lunes?    </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F"  disabled onchange="update_parte_3()" name="PP03F_lunes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">martes? </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F"  disabled onchange="update_parte_3()" name="PP03F_martes"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">miercoles?    </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F"  disabled onchange="update_parte_3()" name="PP03F_miercoles"> </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">jueves?   </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F"  disabled onchange="update_parte_3()" name="PP03F_jueves"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">viernes? </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F" disabled onchange="update_parte_3()" name="PP03F_viernes"> </td>
                                        </tr>
                                         <tr>
                                        <th scope="row">sabado?   </th>
                                        <td>  <input type="number"  min=0 step=1 class="form-control PP03F" disabled onchange="update_parte_3()" name="PP03F_sabado"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Total de horas  </th>
                                        <td>  <input type="text"  class="form-control PP03F"  disabled onchange="update_parte_3()" name="PP03F" id="PP03F"></td>
                                        </tr>
                                </tbody>
                        </table>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP03G"> 3g. La semana pasada, ¿Quéria trabajar más horas?</label>
                     <select class="form-control" disabled onchange="update_parte_3()" name="PP03G" id="PP03G">
                               <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>
             <div class="form-group col-md-6">
                    <label for="PP03H">3h. ¿Si hubiera conseguido más horas…</label>
                      <select class="form-control" disabled onchange="update_parte_3()" name="PP03H" id="PP03H">
                                <option value=""> </option>
                                <option value="1">1. … podía trabajarlas esa semana?</option>
                                <option value="2">2. … podía empezar a trabajarlas en dos semanas a más tardar?</option>
                                <option value="3">3. … no podía trabajar más horas?</option>
                                <option value="9">9. NS/Nr</option>
                        </select>

                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>
        </div>
        <hr>
        <small id="" class="form-text text-muted"><h5>PARA TODOS LOS OCUPADOS</h5> </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP03I">3i. En los últimos 30 días, ¿buscó trabajar más horas? </label>
                     <select class="form-control" disabled onchange="update_parte_3()" name="PP03I" id="PP03I">
                               <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                                <option value="9">9. NS/Nr</option>
                        </select>
                    {{-- <small id="" class="form-text text-muted"> </small> --}}
            </div>
             <div class="form-group col-md-6">
                    <label for="PP03J">3j. Aparte de este/os trabajo/s ¿estuvo buscando algún
empleo/ocupación/actividad?</label>
                      <select class="form-control" disabled onchange="update_parte_3()" name="PP03J" id="PP03J" >
                                <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                                <option value="9">9. NS/Nr</option>
                        </select>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="PP03K">3k. ¿Estuvo buscando porque…</label>
                        <select class="form-control" disabled onchange="update_parte_3()" name="PP03K" id="PP03K">
                                  <option value=""> </option>
                                <option value="1">1. … quería cambiar de trabajo?</option>
                                <option value="2">2. … quería agregar al que tiene?</option>
                                <option value="3">3. … se termina el trabajo que tiene?</option>
                                <option value="4">4. estaba sin trabajo?</option>
                                </select>
                </div>
        </div>
</div>
{{-- @endsection --}}
<script>
function update_parte_3()
{
    p1_c = getSelectedValue("#PP01C");
    p1_d = getSelectedValue("#PP01D");
    p1_f = getSelectedValue("#PP01F");
    p1_g = getSelectedValue("#PP01G");
    p1_h = getSelectedValue("#PP01H");


    (p1_g == 1 || p1_f == 1 || p1_f == 2 || p1_f == 3 || p1_h == 1)? activar('#PP03A') :desactivar('#PP03A');
    (p1_c == 1 || p1_d == 1 || p1_d == 2)? activar('#PP03C'):desactivar('#PP03C');

    // (p1_g == 1 || p1_f == 1 || p1_f == 2 || p1_f == 3 || p1_h == 1 || p1_c == 1 || p1_d == 1 || p1_d == 2)? activar('#PP03C'):desactivar('#PP03C');

    // a = getSelectedValue("#PP03A");
    b = getSelectedValue("#PP03B");
    c = getSelectedValue("#PP03C");
    d = getSelectedValue("#PP03D");
    // e = getSelectedValue("#PP03E");
    // f = getSelectedValue("#PP03F");
    g = getSelectedValue("#PP03G");
    h = getSelectedValue("#PP03H");
    i = getSelectedValue("#PP03I");
    j = getSelectedValue("#PP03J");
    k = getSelectedValue("#PP03K");

       ($("#PP03A").val()) ? activar("#PP03B"): desactivar("#PP03B");
       (c == 2 || c == 1) ? activar(".PP03E",false,false): desactivar(".PP03E",false,false);
       (c == 2 || c == 1) ? setRequired("#PP03E"):false;
       (c == 2) ? activar("#PP03D"): desactivar("#PP03D");


       (c == 2) ? activar(".PP03F"): desactivar(".PP03F");
       (c == 2 || c == 1) ? setOpcional(".PP03F"):false;
       (c == 2 || c == 1) ? setRequired("#PP03F"):false;

       (c == 2 || c == 1) || (b == 1 || b == 2 || b == 3 || b == 4 || b == 5 || b == 9) ? activar("#PP03G"): desactivar("#PP03G");

       (g == 1) ? activar("#PP03H"): desactivar("#PP03H");
       (g == 2 || h >= 1) ? activar("#PP03I"): desactivar("#PP03I");
       (i == 1 || i == 2  || i == 9) ? activar("#PP03J"): desactivar("#PP03J");
       (j == 1) ? activar("#PP03K"): desactivar("#PP03K");

    update_parte_4();

}
</script>
