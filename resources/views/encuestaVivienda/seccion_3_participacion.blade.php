{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-4 border">
                        <label for="otra_viv_direc">1. ¿Existen otras viviendas en esta misma dirección? </label>
                        
                        <select class="form-control form-control-sm" name="otra_viv_direc" id="otra_viv_direc" required >
                                <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
            </div>
            <div class="form-group col-md-4 border text-justify">
                    <label for="comparten_gastos ">2. ¿Todas las personas que residen en esta vivienda comparten los gastos de comida y/o de alquiler,
                                impuestos, servicios, etc.?</label>
                                <select class="form-control form-control-sm" name="comparten_gastos" id="comparten_gastos" onchange="mostrarNumeroHogar(this.value)" required>
                                                <option value=""></option>
                                                <option value="1">1. Si</option>
                                                <option value="2">2. No</option>
                                </select>

                             <div class="d-none" id="numero_hogar_vivienda">
                                 <label for="N_hogar_viv">Indague el número de hogares que residen en esta vivienda.</label>
                                 <input type="number" min="0" step="1" class="form-control form-control-sm" id="N_hogar_viv" name="N_hogar_viv" id="N_hogar_viv" >
                                 <small class="form-text text-muted">Hogar: Persona o grupo de personas, parientes o no, que habitan bajo el mismo techo y comparten los gastos de alimentación y/o otros gastos esenciales para vivir.</small>
                            </div>
           </div>



           <div class="col-md-4 border">

            <div class="form-group form-inline">
                        <label>3. En este/estos hogar/es hay…</label>

            </div>
            <div class="form-group form-inline">
                        <label for="domestico_cama_adentro">&nbsp; &nbsp; &nbsp; 1… Servicio doméstico con cama adentro?</label>
                        <select class="form-control form-control-sm" name="domestico_cama_adentro" id="domestico_cama_adentro"  required>
                                        <option value=""></option>
                                        <option value="1">1. Si</option>
                                        <option value="2">2. No</option>
                        </select>
            </div>
            <div class="form-group form-inline">
                        <label for="pensionistas">&nbsp; &nbsp; &nbsp; 2… Pensionistas?</label>
                        <select class="form-control form-control-sm" name="pensionistas" id="pensionistas"  required>
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
function mostrarNumeroHogar(value)
{

   if(value==2)
   {
       $("#numero_hogar_vivienda").removeClass('d-none');
    }
    else
    {
    $("#numero_hogar_vivienda").addClass('d-none');
   }
}
</script>
