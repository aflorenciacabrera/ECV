{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="PP01A">1a. En la semana pasada,_________________ trabajó por lo menos una hora? </label>
                    <small id="" class="form-text text-muted">(sin contar las tareas de su hogar) </small>
                     <select class="form-control"  disabled onchange="update_parte_1()" name="PP01A" id="PP01A">
                               <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP01B">1b. En esa semana, ¿hizo alguna changa, fabricó algo para vender, ayudó a un familiar/amigo en su negocio?</label>
                        <select class="form-control" onchange="update_parte_1()" disabled name="PP01B" id="PP01B" >
                               <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
                    <label for="PP01C">1c. ¿Es un trabajo pago, en dinero o en especie?</label>
                     <select class="form-control" onchange="update_parte_1()" disabled name="PP01C" id="PP01C">
                        <small id="" class="form-text text-muted"> </small>
                                  <option value=""> </option>
                                  <option value="1">1. Si</option>
                                <option value="2">2. No </option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP01D">1d. ¿Trabajó…</label>
                     <select class="form-control" onchange="update_parte_1()" disabled name="PP01D" id="PP01D">
                               <option value=""> </option>
                                <option value="1">1.… con un familiar/amigo en su negocio, taller chacra?</option>
                                <option value="2">2. … como trabajador ad-honorem?(aprendiz, meritorio judicial, etc)</option>
                                <option value="3">3. … de otra forma? (especificar)</option>
                        </select>
                        <input type="text" class="form-control" onchange="update_parte_1()" disabled name="PP01D_Esp" id="PP01D_Esp">
            </div>
        </div>
         <div class="form-row">
           <div class="form-group col-md-6">
                <label for="PP01E">1e. La semana pasada…</label>
                <select class="form-control" onchange="update_parte_1()" disabled name="PP01E" id="PP01E">
                    <small id="" class="form-text text-muted"> </small>
                        <option value=""> </option>
                        <option value="1">1. … no deseaba/no quería trabajar?</option>
                        <option value="2">2. … no podía trabajar por razones personales? (cuidado del hogar, estudios, incapacidad)</option>
                        <option value="3">3. … no tenía/ no conseguía trabajo?</option>
                        <option value="4">4. … no tuvo pedidos/clientes?</option>
                        <option value="5">5. tenía un trabajo/negocio al que no concurrió?</option>
                </select>

            </div>
             <div class="form-group col-md-6">
                <label for="PP01F">1f- ¿No concurrió por….</label>
                <select class="form-control" onchange="update_parte_1()" disabled name="PP01F" id="PP01F">
                        <option value=""> </option>
                        <option value="1">1. … vacaciones, licencia? (enfermedad, matrimonio, embarazo, etc.)</option>
                        <option value="2">2. … causas personales? (viajes, trámites, etc)</option>
                        <option value="3">3. … huelga/conflicto laboral?</option>
                        <option value="4">4. … Suspensión?</option>
                        <option value="5">5. … otras causas laborales? (rotura de equipos, falta de materias primas, mal tiempo)</option>
                </select>
                        {{-- <input type="text" class="form-control" onchange="update_parte_1()" disabled name="PP01F_Esp" id="PP01F_Esp"> --}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="PP01G">1g. ¿Le mantienen el pago durante la suspensión? </label>
                <select class="form-control" onchange="update_parte_1()" disabled name="PP01G" id="PP01G">
                        <option value=""> </option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                        <option value="9">9. NS/Nr</option>
                </select>
            </div>
             <div class="form-group col-md-6">
                    <label for="PP01H">1h. ¿Volverá a ese trabajo a lo sumo en un mes?</label>
                      <select class="form-control" onchange="update_parte_1()" disabled name="PP01H" id="PP01H" >
                                <option value=""> </option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                                <option value="9">9. NS/Nr</option>
                        </select>


            </div>

        </div>
</div>
{{-- @endsection --}}
<script>

function update_parte_1()
{
    console.log("update_parte_1")

    a = getSelectedValue("#PP01A");
    b = getSelectedValue("#PP01B");
    c = getSelectedValue("#PP01C");
    d = getSelectedValue("#PP01D");
    e = getSelectedValue("#PP01E");
    f = getSelectedValue("#PP01F");
    g = getSelectedValue("#PP01G");
    h = getSelectedValue("#PP01H");
    i = getSelectedValue("#PP01I");
    //apago todos antes de empezar
    // desactivar("#PP01B");
    // desactivar("#PP01C");
    // desactivar("#PP01D");
    // desactivar("#PP01E");
    // desactivar("#PP01F");
    // desactivar("#PP01G");
    // desactivar("#PP01H");
    // desactivar("#PP01I");


    (a == 2) ? activar("#PP01B"): desactivar("#PP01B");
    (a == 1 || b==1) ? activar("#PP01C"): desactivar("#PP01C");
    (c == 2) ? activar("#PP01D"): desactivar("#PP01D");
    (d == 3) ? activar("#PP01D_Esp"): desactivar("#PP01D_Esp");
    (b == 2) ? activar("#PP01E"): desactivar("#PP01E");
    (b == 2) ? desactivar("#PP01D"):false;
    (e == 5) ? activar("#PP01F"): desactivar("#PP01F");
    (f == 4) ? activar("#PP01G"): desactivar("#PP01G");
    // (f == 5) ? activar("#PP01F_Esp"): desactivar("#PP01F_Esp");
    (f == 5) ? activar("#PP01H"): desactivar("#PP01H");


    update_parte_2();
    update_parte_3();






}


</script>
