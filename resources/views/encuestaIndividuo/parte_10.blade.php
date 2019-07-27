{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
    <div class="row">
    <div class="col-md-6">
         <div class="form-group form-inline">
            <label for="PP10A">10a. ¿Cuánto hace que está buscando trabajo?   &nbsp;</label>
            <select class="form-control form-control-sm" onchange="update_parte_10()" disabled name="PP10A" id="PP10A">
                <option value=""></option>
                <option value=1>1. ...menos de 1 mes?   </option>
                <option value=2>2. ...de 1 a 3 meses?   </option>
                <option value=3>3. ...más de 3 a 6 meses?   </option>
                <option value=4>4. ...más de 6 a 12 meses?   </option>
                <option value=5>5. ...más de 1 año?</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
         <label>10b. ¿Por qué razones no encuentra?</label></br>
        <div class="form-group form-row">
            <label for="PP10B1" class=" col-md-9 offset-md-1 col-form-label">1. Recién empezó a buscar  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B1" id="PP10B1">
                <option value=""></option>
                <option value=1>1. Si  </option>
                <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B2" class=" col-md-9 offset-md-1 col-form-label">2. Por la edad  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B2" id="PP10B2">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B3" class=" col-md-9 offset-md-1 col-form-label">3. Falta de trabajo en su especialidad &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B3" id="PP10B3">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B4" class=" col-md-9 offset-md-1 col-form-label">4. No tiene experiencia/capacitación  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B4" id="PP10B4">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B5" class=" col-md-9 offset-md-1 col-form-label">5. Le faltan vinculaciones para conseguir trabajo  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B5" id="PP10B5">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B6" class=" col-md-9 offset-md-1 col-form-label">6. No hay trabajo  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B6" id="PP10B6">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B7" class=" col-md-9 offset-md-1 col-form-label">7. No le alcanza la plata para salir a buscar &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B7" id="PP10B7">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B8" class=" col-md-9 offset-md-1 col-form-label">8. Suspendido &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B8" id="PP10B8">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B9" class=" col-md-9 offset-md-1 col-form-label">9. Otras razones &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B9" id="PP10B9">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-row">
            <label for="PP10B10" class=" col-md-9 offset-md-1 col-form-label">10. Desconoce por qué no encuentra trabajo (sólo autoinformante)  &nbsp;</label>
            <select class="form-control col-md-2 form-control-sm PP10B" onchange="update_parte_10()" disabled name="PP10B10" id="PP10B10">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
<div class="form-group form-inline">
            <label for="PP10C">10c. ¿Durante ese tiempo hizo algún trabajo/ changa?   &nbsp;</label>
            <select class="form-control form-control-sm" onchange="update_parte_10()" disabled name="PP10C" id="PP10C">
            <option value=""></option>
                <option value=1>1. Si   </option>
            <option value=2>2. No </option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10D">10d. ¿Ha trabajado alguna vez?   &nbsp;</label>
            <select class="form-control form-control-sm" onchange="update_parte_10()" disabled name="PP10D" id="PP10D">
            <option value=""></option>
                <option value=1>1. Si   </option>
            <option value=2>2. No</option>
            </select>
        </div>

    </div>
    <div class="col-md-6">

        <div class="form-group form-inline">
                <label for="PP10E">10e. ¿Cuánto tiempo hace que terminó su último   trabajo/changa...?   &nbsp;</label>
                <select class="form-control form-control-sm" onchange="update_parte_10()" disabled name="PP10E" id="PP10E">
                <option value=""></option>
                    <option value=1>1. ...menos de 1 mes?   </option>
                <option value=2>2. ...de 1 a 3 meses?   </option>
                <option value=3>3. ...más de 3 a 6 meses?   </option>
                <option value=4>4. ...más de 6 a 12 meses?   </option>
                <option value=5>5. ...más de 1 a 3 años?   </option>
                <option value=6>6. ...más de 3 años? </option>
                </select>
            </div>
    </div>
    </div>




</div>
{{-- @endsection --}}
<script>
function update_parte_10()
{

    // activar("#PP10A");
    A = getSelectedValue("#PP10A");
    B1 = getSelectedValue("#PP10B1");
    B2 = getSelectedValue("#PP10B2");
    B3 = getSelectedValue("#PP10B3");
    B4 = getSelectedValue("#PP10B4");
    B5 = getSelectedValue("#PP10B5");
    B6 = getSelectedValue("#PP10B6");
    B7 = getSelectedValue("#PP10B7");
    B8 = getSelectedValue("#PP10B8");
    B9 = getSelectedValue("#PP10B9");
    B10 = getSelectedValue("#PP10B10");
    C = getSelectedValue("#PP10C");
    D = getSelectedValue("#PP10D");
    E = getSelectedValue("#PP10E");
      p2_i = getSelectedValue("#PP02I");
      p12A = getSelectedValue("#PP12A");

    A >= 1 ? activar(".PP10B") : desactivar(".PP10B");

    (B1 >= 1 || B2 >= 1 || B3 >= 1 || B4 >= 1 || B5 >= 1 || B6 >= 1 || B7 >= 1 || B8 >= 1 || B9 >= 1 || B10 >= 1)? activar("#PP10C"):desactivar("#PP10C");

    C == 1 || D == 1 ? activar("#PP10E") : desactivar("#PP10E");
    C == 2 ? activar("#PP10D") : desactivar("#PP10D");
    D == 2 || p2_i == 2 || p12A == 2 ? activar("#PP13A") : desactivar("#PP13A");
    (E >= 1 && E <= 5)?activar("#PP11A") : desactivar("#PP11A");


}
</script>
