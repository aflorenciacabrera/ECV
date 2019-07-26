<div class="card-body">
   <div class="row">
       {{-- left --}}
    <div class="col-md-6">
        <div class="form-group form-inline">
        <label for="PP08A">8a. En ese trabajó cobró </label>
        <select onchange="update_parte_8()" disabled name="PP08A" id="PP08A" class="form-control form-control-sm">
            <option value=""></option>
            <option value=1>1. sueldos </option>
            <option value=2>2. salario </option>
            <option value=3>3. horas extras </option>
            <option value=4>4. otras </option>
            <option value=5>5. Ticket </option>
            <option value=6>6. Ninguna</option>
        </select>
        </div>
        {{--  --}}
        <label>8d. Cuanto cobró por ese mes&nbsp;</label>
    <div class="form-group form-inline">
            <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total&nbsp;<label>
            <input type="number" min=0 step=1  class="form-control form-control-sm"  disabled  id="PP08DTOTAL">
        </div>
        <div class="form-group form-inline">
            <label for="PP08D2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pesos&nbsp;<label>
            <input type="number" min=0 step=1  class="form-control form-control-sm PP08D" onchange="update_parte_8()" disabled name="PP08D2" id="PP08D2">
        </div>
        <div class="form-group form-inline">
            <label for="PP08D3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bonos&nbsp;<label>
            <input type="number" min=0 step=1  class="form-control form-control-sm PP08D" onchange="update_parte_8()" disabled name="PP08D3" id="PP08D3">
        </div>
        <div class="form-group form-inline">
            <label for="PP08D4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tickets&nbsp;<label>
            <input type="number" min=0 step=1  class="form-control form-control-sm PP08D" onchange="update_parte_8()" disabled name="PP08D4" id="PP08D4">
        </div>
        {{--  --}}
        <div class="form-group form-inline">
<label for="PP08E">8e. Cobró &nbsp;</label>
<select onchange="update_parte_8()" disabled name="PP08E" id="PP08E" class="form-control form-control-sm">
    <option value=""></option>
    <option value=1>1. Comisión  </option>
    <option value=2>2. Propina </option>
    <option value=3>3. ninguno</option>
</select>
</div>




 <div class="form-group form-inline">
    <label for="PP08G">8g. Ese cobro (o arreglo) corresponde a su trabajo de &nbsp;</label>
    <select onchange="update_parte_8()" disabled name="PP08G" id="PP08G" class="form-control form-control-sm">
        <option value=""></option>
        <option value=1>1. Todo el mes todos los días  </option>
        <option value=2>2. Todo el mes algunos días </option>
        <option value=3>3. menos de todo el mes</option>
    </select>
</div>
<div class="form-group form-inline">
        <label for="PP08G1" >&nbsp;8g.1. ¿Cuantos dias por semana? &nbsp;<label>
            <input type="number" min=0 step=1 max=7 class="form-control form-control-sm PP08G" onchange="update_parte_8()" disabled name="PP08G1" id="PP08G1">

    </div>
    <div class="form-group form-inline">
        <label for="PP08G2" >&nbsp;8g.2. ¿Cuantos dias en el mes? &nbsp;<label>
            <input type="number" min=0 step=1 max=31 class="form-control form-control-sm PP08G" onchange="update_parte_8()" disabled name="PP08G2" id="PP08G2">

    </div>

 <div class="form-group form-inline">
<label for="PP08I">8i. Por ese trabajó cobró &nbsp; </label>
<select onchange="update_parte_8()" disabled name="PP08I" id="PP08I" class="form-control form-control-sm">
    <option value=""></option>
    <option value=1>1. Aguinaldo </option>
    <option value=2>2. Otras bonificaciones </option>
    <option value=3>3. Retroactivo </option>
    <option value=5>5. Ninguno de estos</option>
</select>
</div>
{{--  --}}




 <div class="form-group form-inline">
<label for="PP08K">8k. Su patron o empleador es </label>
<select onchange="update_parte_8()" disabled name="PP08K" id="PP08K" class="form-control form-control-sm">
    <option value=""></option>
    <option value=1>1. contratistas </option>
    <option value=2>2. agencia de empleo </option>
    <option value=3>3. establecimieto </option>
    <option value=4>4. otras personas </option>
    <option value=5>5. Plan de empleo </option>
    <option value=9>9. NS/nR</option>
</select>
</div>
    </div>

    {{-- Right --}}
    <div class="col-md-6">
        <div class="form-group form-inline">
                <label for="PP08B">8b. No cobró ninguna porque </label>
                <select onchange="update_parte_8()" disabled name="PP08B" id="PP08B" class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. Lo está por cobrar </option>
                    <option value=2>2. No sabe cuand lo va a cobrar </option>
                    <option value=3>3. recién empezó </option>
                    <option value=4>4. No los tiene</option>
                </select>
        </div>
        {{--  --}}
        <div class="form-group form-inline">
        <label for="PP08C">8c. Monto arreglado mensual &nbsp;<label>
        <input type="number" min=0 step=1  class="form-control form-control-sm" onchange="update_parte_8()" disabled name="PP08C" id="PP08C">
        </div>
        {{--  --}}
        {{-- 8.f --}}
    <label >8f. ¿Cuánto cobró por ese mes de ..... &nbsp;</label>
    <div class="form-group form-inline">

        <label for="PP08F1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comisión por  venta/producción <label>
            <input type="number" min=0 step=1  class="form-control form-control-sm PP08F" onchange="update_parte_8()" disabled name="PP08F1" id="PP08F1">

    </div>
    <div class="form-group form-inline">
        <label for="PP08F2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propinas<label>
            <input type="number" min=0 step=1  class="form-control form-control-sm PP08F" onchange="update_parte_8()" disabled name="PP08F2" id="PP08F2">

    </div>
    {{--  --}}
     <div class="form-group form-inline">
        <label for="PP08H" >8h. ¿A cuántas horas por día corresponde? &nbsp;<label>
            <input type="number" min=0 step=1 max=24 class="form-control form-control-sm PP08G" onchange="update_parte_8()" disabled name="PP08H" id="PP08H">

    </div>
    {{--  --}}
     <label for="">8j. ¿Cuánto cobró por ese mes de ..(mes)...</label>
    <div class="form-group form-inline">
        <label for="PP08J1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monto aguinaldo&nbsp;<label>
        <input type="number" min=0 step=1  class="form-control form-control-sm PP08J" onchange="update_parte_8()" disabled name="PP08J1" id="PP08J1">
    </div>
    <div class="form-group form-inline">
        <label for="PP08J2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monto otras bonificaciones no habituales &nbsp;<label>
        <input type="number" min=0 step=1  class="form-control form-control-sm PP08J" onchange="update_parte_8()" disabled name="PP08J2" id="PP08J2">
    </div>
    <div class="form-group form-inline">
        <label for="PP08J3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monto retroactivos&nbsp;<label>
        <input type="number" min=0 step=1  class="form-control form-control-sm PP08J" onchange="update_parte_8()" disabled name="PP08J3" id="PP08J3">
    </div>
    {{--  --}}

    </div>
   </div>







    {{--  --}}
</div>

<script>

function update_parte_8()
{
console.log("Update Parte 8")
A = getSelectedValue("#PP08A");
B = getSelectedValue("#PP08B");
C = $("#PP08C").val();
D2 =parseFloat ($("#PP08D2").val());
D3 =parseFloat ($("#PP08D3").val());
D4 =parseFloat ($("#PP08D4").val());
$("#PP08DTOTAL").val((D2?D2:0) + (D3?D3:0) + (D4?D4:0));
E = getSelectedValue("#PP08E");
F1 = $("#PP08F1").val();
F2 = $("#PP08F2").val();
G = getSelectedValue("#PP08G");
G1 = $("#PP08G1").val();
G2 = $("#PP08G2").val();
H = $("#PP08H").val();
I = getSelectedValue("#PP08I");
J1 = $("#PP08J1").val();
J2 = $("#PP08J2").val();
J3 = $("#PP08J3").val();
K = getSelectedValue("#PP08K");

// activar("PP08A");


(A >= 1 && A <= 5) || B == 1? activar(".PP08D"):desactivar(".PP08D");
(A == 6)? activar("#PP08B"):desactivar("#PP08B");
(B == 2 || B == 3)?activar("#PP08C"):desactivar("#PP08C");
((B == 4) || (D2>=0 && D3>=0 && D4>=0) || C)?activar("#PP08E"):desactivar("#PP08E");
//
(E==1 || E == 2)?activar(".PP08F"):desactivar(".PP08F");
(E==3 || F1 || F2 )?activar("#PP08G"):desactivar("#PP08G");

(G == 1 || G == 2 )? activar("#PP08G1"):desactivar("#PP08G1");
(G == 3)? activar("#PP08G2"):desactivar("#PP08G2");
(G1 || G2)?activar("#PP08H"):desactivar("#PP08H");
(H)?activar("#PP08I"):desactivar("#PP08I");
(I ==1 || I == 2 || I == 3)?activar(".PP08J"):desactivar(".PP08J");
(I ==5 || J1 || J2 || J3)?activar("#PP08K"):desactivar("#PP08K");
(K >= 1)?activar("#PP09A"):desactivar("#PP09A");


}


</script>
