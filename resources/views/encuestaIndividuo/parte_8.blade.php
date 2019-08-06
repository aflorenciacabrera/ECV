<div class="card-body">
   <div class="row">
       {{-- left --}}
    <div class="col-md-6">
        <div class="form-group">
        <label for="PP08A">8a. En ese trabajó cobró </label>



         <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_1" name="PP08A_1" value="1">1. sueldos
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_2" name="PP08A_2" value="2">2. salario
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_3" name="PP08A_3"  value="3">3. horas extras
                    </div>
                </div>
            </div>
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_4" name="PP08A_4" value="4">4. otras
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_5" name="PP08A_5" value="5">5. Ticket
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08A" disabled onchange="update_parte_8()" id="PP08A_6" name="PP08A_6"  value="6">6. Ninguna
                    </div>
                </div>
            </div>
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
        <div class="form-group ">
            <label for="PP08E">8e.Por el mes de _____¿Cobró &nbsp;</label>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08E" disabled onchange="update_parte_8()" id="PP08E_1" name="PP08E_1" value="1">1. Comision por venta/produccion?
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08E" disabled onchange="update_parte_8()" id="PP08E_2" name="PP08E_2" value="2">2. Propinas?
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" class="PP08E" disabled onchange="update_parte_8()"id="PP08E_3"  name="PP08E_3"  value="3">3. Ninguna
                    </div>
                </div>
            </div>

            {{--  --}}
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
// A = getSelectedValue("#PP08A");
A_1 = $("#PP08A_1").is(':checked');
A_2 = $("#PP08A_2").is(':checked');
A_3 = $("#PP08A_3").is(':checked');
A_4 = $("#PP08A_4").is(':checked');
A_5 = $("#PP08A_5").is(':checked');
A_6 = $("#PP08A_6").is(':checked');

B = getSelectedValue("#PP08B");
C = $("#PP08C").val();
D2 =parseFloat ($("#PP08D2").val());
D3 =parseFloat ($("#PP08D3").val());
D4 =parseFloat ($("#PP08D4").val());
$("#PP08DTOTAL").val((D2?D2:0) + (D3?D3:0) + (D4?D4:0));
// E = getSelectedValue("#PP08E");
E_1 = $("#PP08E_1").is(':checked');
E_2 = $("#PP08E_2").is(':checked');
E_3 = $("#PP08E_3").is(':checked');

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

// activar(".PP08A",false,false);


(A_1 || A_2 || A_3 || A_4 || A_5) || B == 1? activar(".PP08D",true,false):desactivar(".PP08D");
(A_6)? activar("#PP08B",true,false):desactivar("#PP08B");
if(A_6)
{
        $("#PP08A_1").prop('checked', false);
        $("#PP08A_2").prop('checked', false);
        $("#PP08A_3").prop('checked', false);
        $("#PP08A_4").prop('checked', false);
        $("#PP08A_5").prop('checked', false);
        desactivar(".PP08D");
}
(B == 2 || B == 3)?activar("#PP08C",true,false):desactivar("#PP08C");
((B == 4) || (D2>=0 && D3>=0 && D4>=0) || C)?activar(".PP08E",false,false):desactivar(".PP08E");
//
(E_1 || E_2)?activar(".PP08F",true,false):desactivar(".PP08F");
(E_3 || F1 || F2 )?activar("#PP08G",true,false):desactivar("#PP08G");
if(E_3)
{
        $("#PP08E_1").prop('checked', false);
        $("#PP08E_2").prop('checked', false);

}

(G == 1 || G == 2 )? activar("#PP08G1",true,false):desactivar("#PP08G1");
(G == 3)? activar("#PP08G2",true,false):desactivar("#PP08G2");
(G1 || G2)?activar("#PP08H",true,false):desactivar("#PP08H");
(H)?activar("#PP08I",true,false):desactivar("#PP08I");
(I ==1 || I == 2 || I == 3)?activar(".PP08J",true,false):desactivar(".PP08J");
(I ==5 || J1 || J2 || J3)?activar("#PP08K",true,false):desactivar("#PP08K");

update_parte_9();


}


</script>
