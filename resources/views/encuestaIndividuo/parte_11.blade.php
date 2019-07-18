{{-- @extends('layouts.app')
@section('content') --}}
Ultima Ocupación Changa
<div class="card-body">

    {{-- 11.a --}}
        <div class="form-group form-inline">
            <label for="PP11A">11a. ¿El negocio/empresa/institución/actividad en la que trabajaba era &nbsp;</label>
            <select name="PP11A" id="PP11A" class="form-control form-control-sm">
                <option value=""></option>
                <option value="1">1. estatal? </option>
                <option value="2">2. privada? </option>
                <option value="3">3. de otro tipo? </option>
            </select>
        </div>
        {{-- 11.b --}}
        <div class="form-group form-inline">
            <label for="PP11B">11b. ¿El negocio/empresa/institución/actividad en la que trabajaba era &nbsp;</label>
            <input type="text" name="PP11B" id="PP11B" class="form-control form-control-sm">
        </div>
        {{-- 11.b.1 --}}
        <div class="form-group form-inline">
            <label for="PP11B1">11b.1 Si prestaba servicios domésticos en hogares particulares, marque &nbsp;</label>
            <select name="PP11B1" id="PP11B1" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. Casa de Familia</option>
            </select>
        </div>
        {{-- 11.b.2 --}}
        <div class="form-group form-inline">
                <label>11b.2 ¿Cuánto tiempo trabajó allí?</label> &nbsp; &nbsp; &nbsp;
                    <label for="PP11B2_ANO">&nbsp; Años &nbsp;
                    </label><input type="number" min=0 step=1 max="99" name="PP11B2_ANO" class="form-control form-control-sm">

                    <label for="PP11B2_MES">&nbsp;Meses&nbsp;
                    </label><input type="number" min=0 step=1 max="99"        name="PP11B2_MES" class="form-control form-control-sm">


                    <label for="PP11B2_DIA">&nbsp;Dias&nbsp;
                    </label><input type="number" min=0 step=1 max="400" name="PP11B2_DIA" class="form-control form-control-sm">
        </div>
        {{-- 11.b.3 --}}
         <div class="form-group form-inline">
            <label for="PP11B3">11b.3 ¿Cómo se llamaba su ocupación? &nbsp;</label>
            <input type="text" name="PP11B3" id="PP11B3" class="form-control form-control-sm">
        </div>
        {{-- 11.c --}}
         <div class="form-group form-inline">
            <label for="PP11C">11c. ¿Cuántas personas, incluído?___________________trabajan allí en total? &nbsp;</label>
            <select name="PP11C" id="PP11C" class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1 persona  </option>
                    <option value=2>2 personas  </option>
                    <option value=3>3 personas  </option>
                    <option value=4>4 personas  </option>
                    <option value=5>5 personas  </option>
                    <option value=6>6 a 10 personas  </option>
                    <option value=7>11 a 25 personas  </option>
                    <option value=8>26 a 40 personas  </option>
                    <option value=9>41 a 100 personas</option>
                    <option value=10>101 a 200 personas </option>
                    <option value=11>201 a 500 personas</option>
                    <option value=12>más de 500 personas </option>
                    <option value=99>Ns./Nr.</option>
            </select> &nbsp;
            {{-- para los que no responden --}}
             <select name="PP11C99" id="PP11C99" class="form-control form-control-sm">
                <option value=""></option>

                <option value=1>  hasta 5   </option>
                <option value=2> de 6 a 40   </option>
                <option value=3> más de 40   </option>
                <option value=9> Ns./Nr.</option>
            </select>
        </div>
        {{-- 11.d --}}
         <div class="form-group form-inline">
            <label for="PP11D">11d. ¿Cómo se llamaba la ocupación que tenía? &nbsp;</label>
            <input type="text" name="PP11D" id="PP11D" class="form-control form-control-sm">
        </div>
        {{-- 11.e --}}
         <div class="form-group form-inline">
            <label for="PP11E">11e. ¿Qué tareas realizaba__________________ en ese trabajo?&nbsp;</label>
            <input type="text" name="PP11E" id="PP11E" class="form-control form-control-sm">
        </div>
        {{-- 11.f --}}
         <div class="form-group form-inline">
            <label for="PP11F">11f. ¿Qué herramientas, maquinarias/equipos utilizaba? &nbsp;</label>
            <input type="text" name="PP11F" id="PP11F" class="form-control form-control-sm 100">
        </div>
        {{-- 11.g --}}
        <div class="form-group form-inline">
                <label>11g. ¿Cuántp tiempo seguido estuvo trabajando en ese lugar?</label> &nbsp; &nbsp; &nbsp;
                    <label for="PP11G_ANO">&nbsp; Años &nbsp;
                    </label><input type="number" min=0 step=1 max="99" name="PP11G_ANO" class="form-control form-control-sm">

                    <label for="PP11G_MES">&nbsp;Meses&nbsp;
                    </label><input type="number" min=0 step=1 max="99" name="PP11G_MES" class="form-control form-control-sm">


                    <label for="PP11G_DIA">&nbsp;Dias&nbsp;
                    </label><input type="number" min=0 step=1 max="400" name="PP11G_DIA" class="form-control form-control-sm">
        </div>
        {{-- 11.h --}}
         <div class="form-group form-inline">
            <label for="PP11H">11h.  ¿Ese trabajo, lo hacía... &nbsp;</label>
            <select name="PP11H" id="PP11H" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. para su propio negocio/ empresa/ actividad? </option>
                <option value=2>2. para el negocio/ empresa/ actividad de un familiar   </option>
                <option value=3>3. o como obrero o empleado para un patrón / empresa</option>
            </select>
        </div>
        {{-- 11.I --}}
        <div class="form-group form-inline">
            <label for="PP11I">11i. ¿Por ese trabajo le pagaban sueldo?&nbsp;</label>
            <select name="PP11I" id="PP11I" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. Si </option>
                <option value=2>2. No</option>
            </select>
        </div>
        {{-- 11-J --}}
        <div class="form-group form-inline">
            <label for="PP11J" class="text-danger">11j. ¿Por ese trabajo le pagaban sueldo?&nbsp;</label>
            {{--TODO Pregunta repetida en PAPEL --}}
            <select name="PP11J" id="PP11J" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. Si </option>
                <option value=2>2. No</option>
            </select>
        </div>
        {{-- 11.K --}}
        <div class="form-group form-inline">
            <label for="PP11K">11k. ¿En ese negocio/empresa/actividad, se empleaban personas asalariadas?&nbsp;</label>
            <select name="PP11K" id="PP11K" class="form-control form-control-sm">
                <option value=""></option>

                <option value=1>1. si, siempre- </option>
                <option value=2>2. solo a veces por temporada </option>
                <option value=3>3. no emplea</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP11K1" >11k.1 ¿En ese trabajo tenía local, maquinarias/equipos/vehículos?&nbsp;</label>

            <select name="PP11K1" id="PP11K1" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. Si </option>
                <option value=2>2. No</option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP11K2" >11k.2 ¿Ese negocio/empresa/actividad, trabaja habitualmente para…&nbsp;</label>

            <select name="PP11K2" id="PP11K2" class="form-control form-control-sm">
                <option value=""></option>

               <option value="6">6. un sólo cliente? (persona, empresa)   </option>
               <option value="7">7. Distintos clientes? (incluye público en general) </option>
            </select>
        </div>
        <div class="form-group form-inline">
            <label for="PP11K3" >11k.3 ¿Ese cliente era…&nbsp;</label>

            <select name="PP11K3" id="PP11K3" class="form-control form-control-sm">
                <option value=""></option>
                <option value="1">1. empresa/institución</option>|
                <option value="2">2. Familia</option>
            </select>
        </div>
        {{-- 11.L --}}
         <div class="form-group form-inline">
            <label for="PP11L" >11l. ¿Cuál fue la razón principal por la que dejó esa actividad?&nbsp;</label>

            <select name="PP11L" id="PP11L" class="form-control form-control-sm">
                <option value=""></option>
                <option value=1>1. falta de clientes/clientes que no  pagan</option>
                <option value=2>2. falta de capital/equipamiento</option>
                <option value=3>3. trabajo estacional</option>
                <option value=4>4. tenía gastos demasiado altos</option>
                <option value=5>5. otras causas laborales (especificar)</option>
                <option value=6>6. jubilación/retiro</option>
                <option value=7>7. causas personales (matrimonio, embarazo    cuidado de hijos o familiar, estudio,    enfermedad)</option>
            </select>
        </div>
        {{-- 11.l.1 --}}
         <div class="form-group form-inline">
            <label for="PP11L1" >11l.1 ¿Ese trabajo era …&nbsp;</label>

            <select name="PP11L1" id="PP11L1" class="form-control form-control-sm">
                <option value=""></option>

                <option value=1>1. ...una changa, trabajo transitorio, por tarea   u obra, suplencia, etc?   </option>
                <option value=2>2. ...un trabajo permanente, fijo, estable, de   planta, etc.?   </option>
                <option value=3>3. Ns./Nr. </option>
            </select>
        </div>
        {{--  --}}
        {{--  --}}

    <div class="form-group form-inline">
        <label for="PP11M">11m. Ese trabajo era...  &nbsp; </label>
        <select class="form-control form-control-sm" name="PP11M" id="PP11M">
            <option value=""></option>
            <option value=1>1. ...un plan de empleo?   </option>
            <option value=2>2. ...un período de prueba?   </option>
            <option value=3>3. ...otro tipo de trabajo? </option>
        </select>
    </div>
    {{--  --}}
    <div class="form-group form-inline">
        <label for="PP11M1">11m.1 ¿Ese trabajo, usaba maquinaria/equipos, local, vehículos propios?  &nbsp; </label>
            <select class="form-control form-control-sm" name="PP11M1" id="PP11M1">
                <option value=""></option>
                <option value=1>1.Si   </option>
                <option value=2>2.No</option>
            </select>
    </div>
{{--  --}}
<div class="form-group form-inline">
        <label for="PP11N">11n. ¿En ese trabajo le hacían descuento jubilatorio? &nbsp;  </label>
        <select class="form-control form-control-sm" name="PP11N" id="PP11N">
            <option value=""></option>
            <option value=1>1. Si   </option>
            <option value=2>2. No   </option>
            <option value=9>9. Ns./Nr. </option>
        </select>
 </div>
 {{--  --}}
 <div class="form-group form-inline">
 <label for="PP11O">11o. ¿Cuál fue la razón principal por la que dejó ese trabajo? &nbsp;  </label>
<select class="form-control form-control-sm" name="PP11O" id="PP11O">
<option value=""></option>
<option value=1>1. despido/cierre (quiebra/venta/traslado de la     empresa  reestructuración o   recorte de     personal/falta de ventas o clientes)    </option>
<option value=2>2. por retiro voluntario del sector  público    </option>
<option value=3>3. por jubilación    </option>
<option value=4>4. fin de trabajo temporario/ estacional    </option>
<option value=5>5. le pagaban poco/no le pagaban    </option>
<option value=6>6. malas relaciones laborales/malas condiciones     de trabajo (insalubre, cambios de horarios,     etc.)    </option>
<option value=7>7. renuncia obligada/pactada    </option>
<option value=8>8. otras causas laborales (especificar)    </option>
<option value=9>9. por razones personales (matrimonio, embarazo,     cuidado de hijos o familia, estudio,     enfermedad) </option>
</select>
</div>
{{--  --}}
<div class="form-group form-inline">
    <label for="PP11P">11p. ¿Cerró la empresa? &nbsp;</label>
    <select class="form-control form-control-sm" name="PP11P" id="PP11P">
        <option value=""></option>
        <option value=1>1. Si    </option>
        <option value=2>2. No    </option>
        <option value=9>9. Ns./Nr. </option>
    </select>
</div>
{{--  --}}
<div class="form-group form-inline">
    <label for="PP11Q">11q. ¿Fue la única persona que quedó sin trabajo?&nbsp;</label>
    <select class="form-control form-control-sm" name="PP11Q" id="PP11Q">
        <option value=""></option>
        <option value=1>1. Si    </option>
        <option value=2>2. No    </option>
        <option value=9>9. Ns./Nr. </option>
    </select>
</div>
{{--  --}}
<div class="form-group form-inline">
    <label for="PP11R">11r. ¿Le enviaron telegrama?  &nbsp;  </label>
    <select class="form-control form-control-sm" name="PP11R" id="PP11R">
        <option value=""></option>
        <option value=1>1. Si    </option>
        <option value=2>2. No</option>
    </select>
</div>
{{--  --}}
<div class="form-group form-inline">
    <label for="PP11S">11s. ¿Le pagaron indemnización? &nbsp;   </label>
    <select class="form-control form-control-sm" name="PP11S" id="PP11S">
        <option value=""></option>
        <option value=1>1. Si    </option>
        <option value=2>2. No </option>
    </select>
</div>
{{--  --}}
<div class="form-group form-inline">
    <label for="PP11T">11t. Está cobrando seguro de desempleo?   &nbsp; </label>
    <select class="form-control form-control-sm" name="PP11T" id="PP11T">
        <option value=""></option>
        <option value=1>1. Si    </option>
        <option value=2>2. No    </option>
        <option value=9>9. Ns./Nr. </option>
    </select>
</div>
        {{--  --}}
        {{--  --}}
</div>

{{-- @endsection --}}
