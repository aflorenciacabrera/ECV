
<div class="card-body">
          <div class="row justify-content-center">
                <div class="display5 text-center col-md-6">
                        <label for="PP06A">6a. En ese negocio/empresa/actividad ¿tiene socios o familiares asociados?</label>
                        <select class="form-control" disabled onchange="update_parte_6()" name="PP06A" id="PP06A">
                                <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
          </div>
          <br>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP06B">6b. ¿Cuántos socios, (familiares o no), son en total (incluyendo a ……………………………)?</label>
                     <input type="number" class="form-control" disabled onchange="update_parte_6()" name="PP06B" id="PP06B" step="1" min="0" max="99" pattern=[0-9]*>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP06C">6c. Por el mes de…………………. ¿Cuánto ganó en su negocio/empresa/actividad?</label>
                    <input type="number" class="form-control" disabled onchange="update_parte_6()" name="PP06C" id="PP06C" step="1" min="0" max="9999999999">
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06C_op" id="PP06C_op">
                                 <option value="">  </option>
                                <option value="8">8. No tuvo ingresos</option>
                                <option value="7">7. No tenía esa ocupación</option>
                        </select>

            </div>

        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP06D">6d. Por el mes………………………… ¿cuánto ganó…………. en su negocio/empresa/actividad considerando sólo la parte que le corresponde a el/ella</label>
                    <small  class="form-text text-muted">(descontando los gastos) </small>
                    <input type="number" class="form-control" disabled onchange="update_parte_6()" name="PP06D" id="PP06D" step="1" min="0" max="9999999999">
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06D_op" id="PP06D_op">
                                 <option value=""> </option>
                                <option value="8">8. No tuvo ingresos</option>
                                <option value="7">7. No tenía esa ocupación</option>
                        </select>

            </div>
             <div class="form-group col-md-6">
                    <label for="PP06E">6e. Ese negocio/empresa/actividad….es una sociedad jurídicamente constituída?</label>
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06E" id="PP06E">
                              <option value="">   </option>
                                <option value="1">1. (S.A., S.R.L., comandita por acciones, etc.)</option>
                                <option value="2">2. … es una sociedad de otra forma legal?</option>
                                <option value="3">3. … o es una sociedad convenida de palabra?</option>
                        </select>
            </div>
        </div>
         <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP06F">6f. ¿Tiene sueldo asignado?</label>
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06F" id="PP06F">
                              <option value="">  </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>

            </div>
             <div class="form-group col-md-6">
                    <label for="PP06G">6g. ¿Cuánto cobró por el mes de ………….….… como sueldo?</label>
                     <input type="number" class="form-control" disabled onchange="update_parte_6()" name="PP06G" id="PP06G" step="1" min="0" max="9999999999">
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06G_op" id="PP06G_op">
                        <option value=""></option>
                        <option value="8">No cobró nada</option>
                        </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP06H">6h. ¿Es una actividad familiar? </label>
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06H"  id="PP06H" >
                              <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <input type="text" class="form-control" disabled onchange="update_parte_6()" name="PP06H_Esp" id="PP06H_Esp" >

            </div>
             <div class="form-group col-md-6">
                    <label for="PP06I">6i. De lo que produce o vende en su negocio/empresa/actividad, ¿retiró algo para consumo propio o de su hogar?</label>
                      <select class="form-control" disabled onchange="update_parte_6()" name="PP06I" id="PP06I">
                              <option value="">  </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>

                        </select>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP06J">6j. Por el mes de………………..,¿Recibió productos o mercaderías como pago por parte de un cliente? </label>
                     <small id="" class="form-text text-muted">(incluye créditos de trueque)</small>
                     <select class="form-control" disabled onchange="update_parte_6()" name="PP06J"  id="PP06J" >
                              <option value="">  </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        {{-- <input type="text" class="form-control" disabled onchange="update_parte_6()" name="PP06H_Esp" id="PP06H_Esp" >   --}}
                   <br>
                <label for="PP06L">6l. ¿A cuántas horas por día corresponde? </label>
                <small id="" class="form-text text-muted">(en un día promedio)</small>
                <input type="number" class="form-control" disabled onchange="update_parte_6()" name="PP06L" id="PP06L" step="1" min="0" max="99">
            </div>
             <div class="form-group col-md-6">
                    <label for="PP06K">6k. Lo ganado corresponde a su trabajo de…. </label>
                      <select class="form-control" disabled onchange="update_parte_6()" name="PP06K" id="PP06K">
                              <option value="">  </option>
                                <option value="1">1. …. Todo el mes trabajando todos los dás de la semana (por lo menos 5 días a la semana)</option>
                                <option value="2">2. … Todo el mes trabajando algunos días a la semana</option>
                                 <option value="3">3. …. Menos de todo el mes</option>
                        </select>
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                        <label for="PP06K_sem">¿Cuántos días por semana?</label> </div>
                                <div class="form-group col-md-6">
                                        <input type="text" class="form-control" disabled onchange="update_parte_6()" name="PP06k_sem" id="PP06K_sem" >
                                 </div>
                                 <div class="form-group col-md-4">
                                        <label for="PP06K_mes">¿Cuántos días por mes?</label> </div>
                                <div class="form-group col-md-6">
                                        <input type="text" class="form-control" disabled onchange="update_parte_6()" name="PP06k_mes" id="PP06K_mes" >
                                </div>
                        </div>
            </div>
        </div>

</div>
<script>

function update_parte_6()
{
console.log("Update_parte_6")
A = getSelectedValue("#PP06A");
B = $("#PP06B").val();
C = $("#PP06C").val();
C_op = getSelectedValue("#PP06C_op");
D = $("#PP06D").val();
D_op = getSelectedValue("#PP06D_op");
E = getSelectedValue("#PP06E");
F = getSelectedValue("#PP06F");
G = $("#PP06G").val();
G_op = getSelectedValue("#PP06G_op");

H = getSelectedValue("#PP06H");
H_Esp = $("#PP06H_Esp").val();
I = getSelectedValue("#PP06I");
J = getSelectedValue("#PP06J");
H_Esp = $("#PP06H_Esp").val();
L = getSelectedValue("#PP06L");
K = getSelectedValue("#PP06K");
k_sem = $("#PP06K_sem").val();
k_mes = $("#PP06K_mes").val();

// activar("#PP06A");

A == 1 ? activar("#PP06B"):desactivar("#PP06B");

A == 2 ? activar("#PP06C"):desactivar("#PP06C");
A == 2 ? activar("#PP06C_op"):desactivar("#PP06C_op");

A == 2 ? setOpcional("#PP06C"):false;
A == 2 ? setOpcional("#PP06C_op"):false;


B? activar("#PP06D"):desactivar("#PP06D");
B? activar("#PP06D_op"):desactivar("#PP06D_op");
B? setOpcional("#PP06D"):false;
B? setOpcional("#PP06D_op"):false;


//
(D || D_op == 8 )? activar("#PP06E"):desactivar("#PP06E");
//TODO pasa al 9

//
(E == 1)? activar("#PP06F"):desactivar("#PP06F");
( C || C_op == 8 || G || G_op == 8 || H >= 1)? activar("#PP06I"):desactivar("#PP06I");
(E == 2 || E == 3) ? activar("#PP06H"):desactivar("#PP06H");

(F == 1)? activar("#PP06G"):desactivar("#PP06G");
(F == 1)? activar("#PP06G_op"):desactivar("#PP06G_op");

(F == 1)? setOpcional("#PP06G"):false;
(F == 1)? setOpcional("#PP06G_op"):false;


(H == 2)? activar("#PP06H_Esp"):desactivar("#PP06H_Esp");
(I >= 1)? activar("#PP06J"):desactivar("#PP06J");
(J >= 1)? activar("#PP06K"):desactivar("#PP06K");
(K == 1 || K == 2 )? activar("#PP06K_sem"):desactivar("#PP06K_sem");
(K == 1 || K == 2 || K == 3)? activar("#PP06L"):desactivar("#PP06L");
(K == 3)? activar("#PP06K_mes"):desactivar("#PP06K_mes");
// (k_mes  || k_sem) & K ?activar("#PP06L"):desactivar("#PP06L");

update_parte_9();


}
</script>
