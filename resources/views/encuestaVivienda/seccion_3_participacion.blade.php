{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-12 ">
            <label for="otra_viv_direc">1. ¿Existen otras viviendas en esta misma dirección? </label>

            <select class="form-control form-control-sm" disabled onchange="update_seccion_3()" name="otra_viv_direc"
                id="otra_viv_direc">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
        <div class="form-group col-md-6  text-justify">
            <label for="comparten_gastos ">2. ¿Todas las personas que residen en esta vivienda comparten los gastos de
                comida y/o de alquiler,
                impuestos, servicios, etc.?</label>
            <select class="form-control form-control-sm"  onchange="update_seccion_3()" name="comparten_gastos"
                id="comparten_gastos">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>


        </div>

        <div class="col-md-6 form-group">
            <div>
                <label for="N_hogar_viv">Indague el número de hogares que residen en esta vivienda.</label>
                <input type="number" min="0" step="1" class="form-control form-control-sm" disabled
                    onchange="update_seccion_3()" name="N_hogar_viv" id="N_hogar_viv">
                <small class="form-text text-muted">Hogar: Persona o grupo de personas, parientes o no, que habitan bajo
                    el mismo techo y comparten los gastos de alimentación y/o otros gastos esenciales para
                    vivir.</small>

            </div>
        </div>



        <div class="col-md-12 ">

            <div class="form-group form-inline">
                <label>3. En este/estos hogar/es hay…</label>

            </div>
            <div class="form-group form-inline">
                <label for="domestico_cama_adentro">&nbsp; &nbsp; &nbsp; 1… Servicio doméstico con cama adentro?</label>
                <select class="form-control form-control-sm" disabled onchange="update_seccion_3()"
                    name="domestico_cama_adentro" id="domestico_cama_adentro">
                    <option value=""></option>
                    <option value="1">1. Si</option>
                    <option value="2">2. No</option>
                </select>
            </div>
            <div class="form-group form-inline">
                <label for="pensionistas">&nbsp; &nbsp; &nbsp; 2… Pensionistas?</label>
                <select class="form-control form-control-sm" disabled onchange="update_seccion_3()" name="pensionistas"
                    id="pensionistas">
                    <option value=""></option>
                    <option value="1">1. Si</option>
                    <option value="2">2. No</option>
                </select>
            </div>

        </div>
    </div>
</div>
{{--
    @endsection --}}
<script>
    update_seccion_3()
    function update_seccion_3() {
        // activar("#otra_viv_direc");
        otra_viv_direc = getSelectedValue("#otra_viv_direc");
        comparten_gastos = getSelectedValue("#comparten_gastos");
        nhogar = $("#N_hogar_viv").val();;

        otra_viv_direc ? activar("#comparten_gastos") : desactivar("#comparten_gastos");
        otra_viv_direc == 1 && comparten_gastos == 2 ? activar("#N_hogar_viv") : desactivar("#N_hogar_viv");
        // otra_viv_direc == 1 && comparten_gastos == 2 && nhogar >= 1 ? activar("#domestico_cama_adentro") : desactivar("#domestico_cama_adentro");
        otra_viv_direc ? activar("#domestico_cama_adentro") : desactivar("#domestico_cama_adentro");
        // otra_viv_direc == 1 && comparten_gastos == 2 && nhogar >= 1 ? activar("#pensionistas") : desactivar("#pensionistas");
        otra_viv_direc ? activar("#pensionistas") : desactivar("#pensionistas");
        //
        otra_viv_direc ? activar("#IV1") : desactivar("#IV1");

    }
</script>
