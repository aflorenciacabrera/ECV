{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-group form-inline">
            <label for="PP10A">10a. ¿Cuánto hace que está buscando trabajo?   &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10A" id="PP10A">
                <option value=""></option>
                <option value=1>1. ...menos de 1 mes?   </option>
                <option value=2>2. ...de 1 a 3 meses?   </option>
                <option value=3>3. ...más de 3 a 6 meses?   </option>
                <option value=4>4. ...más de 6 a 12 meses?   </option>
                <option value=5>5. ...más de 1 año?</option>
            </select>
        </div>
        <label>10b. ¿Por qué razones no encuentra?</label></br>
        <div class="form-group form-inline">
            <label for="PP10B1">1. Recién empezó a buscar  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B1" id="PP10B1">
                <option value=""></option>
                <option value=1>1. Si  </option>
                <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B2">2. Por la edad  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B2" id="PP10B2">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B3">3. Falta de trabajo en su especialidad &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B3" id="PP10B3">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B4">4. No tiene experiencia/capacitación  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B4" id="PP10B4">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B5">5. Le faltan vinculaciones para conseguir trabajo  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B5" id="PP10B5">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B6">6. No hay trabajo  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B6" id="PP10B6">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B7">7. No le alcanza la plata para salir a buscar &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B7" id="PP10B7">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B8">8. Suspendido &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B8" id="PP10B8">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B9">9. Otras razones &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B9" id="PP10B9">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10B10">10. Desconoce por qué no encuentra trabajo (sólo autoinformante)  &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10B10" id="PP10B10">
            <option value=""></option>
                <option value=1>1. Si  </option>
            <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10C">10c. ¿Durante ese tiempo hizo algún trabajo/ changa?   &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10C" id="PP10C">
            <option value=""></option>
                <option value=1>1. Si   </option>
            <option value=2>2. No </option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP10D">10d. ¿Ha trabajado alguna vez?   &nbsp;</label>
            <select class="form-control form-control-sm" name="PP10D" id="PP10D">
            <option value=""></option>
                <option value=1>1. Si   </option>
            <option value=2>2. No</option>
            </select>
        </div>
            <div class="form-group form-inline">
                <label for="PP10E">10e. ¿Cuánto tiempo hace que terminó su último   trabajo/changa...?   &nbsp;</label>
                <select class="form-control form-control-sm" name="PP10E" id="PP10E">
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
{{-- @endsection --}}
