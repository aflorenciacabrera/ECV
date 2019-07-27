{{-- @extends('layouts.app')
@section('content') --}}
Ultima Ocupación Changa
<div class="card-body">

    <div class="row border">
        <div class="col-md-6">
            {{-- 11.a --}}
            <div class="form-group ">
                <label for="PP11A"><b>11a.</b> ¿El negocio/empresa/institución/actividad en la que trabajaba era </label>
                <select disabled onchange="update_parte_11()" name="PP11A" id="PP11A"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value="1">1. estatal? </option>
                    <option value="2">2. privada? </option>
                    <option value="3">3. de otro tipo? </option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            {{-- 11.b --}}
            <div class="form-group ">
                <label for="PP11B"><b>11b.</b> ¿El negocio/empresa/institución/actividad en la que trabajaba era </label>
                <input type="text" disabled onchange="update_parte_11()" name="PP11B" id="PP11B"
                    class="form-control form-control-sm">
            </div>
            {{-- 11.b.1 --}}
            <div class="form-group ">
                <label for="PP11B1"><b>11b.1</b> Si prestaba servicios domésticos en hogares particulares, marque
                </label>
                <select disabled onchange="update_parte_11()" name="PP11B1" id="PP11B1"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. Casa de Familia</option>
                </select>
            </div>
            {{-- 11.b.2 --}}
            <label><b>11b.2</b> ¿Cuánto tiempo trabajó allí?</label>
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-4">

                        <label for="PP11B2_ANO"> Años
                        </label><input type="number" min=0 step=1 max="99" disabled onchange="update_parte_11()"
                            name="PP11B2_ANO" class="form-control form-control-sm PP11B2">
                    </div>
                    <div class="col-md-4">

                        <label for="PP11B2_MES">Meses
                        </label><input type="number" min=0 step=1 max="99" disabled onchange="update_parte_11()"
                            name="PP11B2_MES" class="form-control form-control-sm PP11B2">
                    </div>

                    <div class="col-md-4">

                        <label for="PP11B2_DIA">Dias
                        </label><input type="number" min=0 step=1 max="400" disabled onchange="update_parte_11()"
                            name="PP11B2_DIA" class="form-control form-control-sm PP11B2">
                    </div>
                </div>
            </div>
            {{-- 11.b.3 --}}
            <div class="form-group ">
                <label for="PP11B3"><b>11b.3</b> ¿Cómo se llamaba su ocupación? </label>
                <input type="text" disabled onchange="update_parte_11()" name="PP11B3" id="PP11B3"
                    class="form-control form-control-sm">
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="row border">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11C"><b>11c.</b> ¿Cuántas personas, incluído?___________________trabajan allí en total?
                </label>
                <select disabled onchange="update_parte_11()" name="PP11C" id="PP11C"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1 persona </option>
                    <option value=2>2 personas </option>
                    <option value=3>3 personas </option>
                    <option value=4>4 personas </option>
                    <option value=5>5 personas </option>
                    <option value=6>6 a 10 personas </option>
                    <option value=7><b>11 a</b> 25 personas </option>
                    <option value=8>26 a 40 personas </option>
                    <option value=9>41 a 100 personas</option>
                    <option value=10>101 a 200 personas </option>
                    <option value=11>201 a 500 personas</option>
                    <option value=12>más de 500 personas </option>
                    <option value=99>Ns./Nr.</option>
                </select>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11C99" class="text-muted">(si 11c 99.ns/nc)</label>
                <select disabled onchange="update_parte_11()" name="PP11C99" id="PP11C99"
                    class="form-control form-control-sm">
                    <option value=""></option>

                    <option value=1> hasta 5 </option>
                    <option value=2> de 6 a 40 </option>
                    <option value=3> más de 40 </option>
                    <option value=9> Ns./Nr.</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row border">
        <div class="col-md-12">
            {{-- 11.d --}}
            <div class="form-group ">
                <label for="PP11D"><b>11d.</b> ¿Cómo se llamaba la ocupación que tenía? </label>
                <textarea disabled onchange="update_parte_11()" name="PP11D" id="PP11D"
                    class="form-control form-control-sm"></textarea>

            </div>
            {{-- 11.e --}}
            <div class="form-group ">
                <label for="PP11E"><b>11e.</b> ¿Qué tareas realizaba__________________ en ese trabajo?</label>
                <textarea disabled onchange="update_parte_11()" name="PP11E" id="PP11E"
                    class="form-control form-control-sm"></textarea>
            </div>
            {{-- 11.f --}}
            <div class="form-group ">
                <label for="PP11F"><b>11f.</b> ¿Qué herramientas, maquinarias/equipos utilizaba? </label>
                <textarea disabled onchange="update_parte_11()" name="PP11F" id="PP11F"
                    class="form-control form-control-sm 100"></textarea>
            </div>
        </div>
    </div>
    <div class="row border">
        <div class="col-md-6">
            {{-- 11.g --}}
            <div class="form-group ">
                <label><b>11g.</b> ¿Cuántp tiempo seguido estuvo trabajando en ese lugar?</label>
                <div class="row">
                    <div class="col-md-4"> <label for="PP11G_ANO"> Años
                        </label><input type="number" min=0 step=1 max="99" disabled onchange="update_parte_11()"
                            name="PP11G_ANO" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4"> <label for="PP11G_MES">Meses
                        </label><input type="number" min=0 step=1 max="99" disabled onchange="update_parte_11()"
                            name="PP11G_MES" class="form-control form-control-sm"></div>
                    <div class="col-md-4">
                        <label for="PP11G_DIA">Dias
                        </label><input type="number" min=0 step=1 max="400" disabled onchange="update_parte_11()"
                            name="PP11G_DIA" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            {{-- 11.h --}}
            <div class="form-group ">
                <label for="PP11H"><b>11h.</b> ¿Ese trabajo, lo hacía... </label>
                <select disabled onchange="update_parte_11()" name="PP11H" id="PP11H"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. para su propio negocio/ empresa/ actividad? </option>
                    <option value=2>2. para el negocio/ empresa/ actividad de un familiar </option>
                    <option value=3>3. o como obrero o empleado para un patrón / empresa</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            {{-- 11.I --}}
            <div class="form-group ">
                <label for="PP11I"><b>11i.</b> ¿Por ese trabajo le pagaban sueldo?</label>
                <select disabled onchange="update_parte_11()" name="PP11I" id="PP11I"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No</option>
                </select>
            </div>
            {{-- 11-J --}}
            <div class="form-group ">
                <label for="PP11J"><b>11j.</b> ¿Por ese trabajo retiraba dinero?</label>
                {{--TODO Pregunta repetida en PAPEL --}}
                <select disabled onchange="update_parte_11()" name="PP11J" id="PP11J"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No</option>
                </select>
            </div>
            {{-- 11.K --}}
            <div class="form-group ">
                <label for="PP11K"><b>11k.</b> ¿En ese negocio/empresa/actividad, se empleaban personas
                    asalariadas?</label>
                <select disabled onchange="update_parte_11()" name="PP11K" id="PP11K"
                    class="form-control form-control-sm">
                    <option value=""></option>

                    <option value=1>1. si, siempre- </option>
                    <option value=2>2. solo a veces por temporada </option>
                    <option value=3>3. no emplea</option>
                </select>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="row border">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11K1"><b>11k.1</b> ¿En ese trabajo tenía local, maquinarias/equipos/vehículos?</label>

                <select disabled onchange="update_parte_11()" name="PP11K1" id="PP11K1"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No</option>
                </select>
            </div>
            <div class="form-group ">
                <label for="PP11K2"><b>11k.2</b> ¿Ese negocio/empresa/actividad, trabaja habitualmente para…</label>

                <select disabled onchange="update_parte_11()" name="PP11K2" id="PP11K2"
                    class="form-control form-control-sm">
                    <option value=""></option>

                    <option value="6">6. un sólo cliente? (persona, empresa) </option>
                    <option value="7">7. Distintos clientes? (incluye público en general) </option>
                </select>
            </div>
            <div class="form-group ">
                <label for="PP11K3"><b>11k.3</b> ¿Ese cliente era…</label>

                <select disabled onchange="update_parte_11()" name="PP11K3" id="PP11K3"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value="1">1. empresa/institución</option>|
                    <option value="2">2. Familia</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            {{-- 11.L --}}
            <div class="form-group ">
                <label for="PP11L"><b>11l.</b> ¿Cuál fue la razón principal por la que dejó esa actividad?</label>

                <select disabled onchange="update_parte_11()" name="PP11L" id="PP11L"
                    class="form-control form-control-sm">
                    <option value=""></option>
                    <option value=1>1. falta de clientes/clientes que no pagan</option>
                    <option value=2>2. falta de capital/equipamiento</option>
                    <option value=3>3. trabajo estacional</option>
                    <option value=4>4. tenía gastos demasiado altos</option>
                    <option value=5>5. otras causas laborales (especificar)</option>
                    <option value=6>6. jubilación/retiro</option>
                    <option value=7>7. causas personales (matrimonio, embarazo cuidado de hijos o familiar, estudio,
                        enfermedad)</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row border">
        <div class="col-md-12">
            {{-- 11.l.1 --}}
            <div class="form-group ">
                <label for="PP11L1"><b>11l.1</b> ¿Ese trabajo era …</label>

                <select disabled onchange="update_parte_11()" name="PP11L1" id="PP11L1"
                    class="form-control form-control-sm">
                    <option value=""></option>

                    <option value=1>1. ...una changa, trabajo transitorio, por tarea u obra, suplencia, etc? </option>
                    <option value=2>2. ...un trabajo permanente, fijo, estable, de planta, etc.? </option>
                    <option value=3>3. Ns./Nr. </option>
                </select>
            </div>
        </div>

    </div>
    <div class="row border">
        <div class="col-md-6 border">
            <div class="form-group ">
                <label for="PP11M"><b>11m.</b> Ese trabajo era... </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11M"
                    id="PP11M">
                    <option value=""></option>
                    <option value=1>1. ...un plan de empleo? </option>
                    <option value=2>2. ...un período de prueba? </option>
                    <option value=3>3. ...otro tipo de trabajo? </option>
                </select>
            </div>
        </div>
        <div class="col-md-6 border">
            {{--  --}}
            <div class="form-group ">
                <label for="PP11M1"><b>11m.1</b> ¿Ese trabajo, usaba maquinaria/equipos, local, vehículos propios?
                </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11M1"
                    id="PP11M1">
                    <option value=""></option>
                    <option value=1>1.Si </option>
                    <option value=2>2.No</option>
                </select>
            </div>
            {{--  --}}
            <div class="form-group ">
                <label for="PP11N"><b>11n.</b> ¿En ese trabajo le hacían descuento jubilatorio? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11N"
                    id="PP11N">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No </option>
                    <option value=9>9. Ns./Nr. </option>
                </select>
            </div>
        </div>
    </div>
    <div class="row border">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11O"><b>11o.</b> ¿Cuál fue la razón principal por la que dejó ese trabajo? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11O"
                    id="PP11O">
                    <option value=""></option>
                    <option value=1>1. despido/cierre (quiebra/venta/traslado de la empresa reestructuración o recorte
                        de
                        personal/falta de ventas o clientes) </option>
                    <option value=2>2. por retiro voluntario del sector público </option>
                    <option value=3>3. por jubilación </option>
                    <option value=4>4. fin de trabajo temporario/ estacional </option>
                    <option value=5>5. le pagaban poco/no le pagaban </option>
                    <option value=6>6. malas relaciones laborales/malas condiciones de trabajo (insalubre, cambios de
                        horarios,
                        etc.) </option>
                    <option value=7>7. renuncia obligada/pactada </option>
                    <option value=8>8. otras causas laborales (especificar) </option>
                    <option value=9>9. por razones personales (matrimonio, embarazo, cuidado de hijos o familia,
                        estudio,
                        enfermedad) </option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            {{-- --}}
            <div class="form-group ">
                <label for="PP11P"><b>11p.</b> ¿Cerró la empresa? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11P"
                    id="PP11P">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No </option>
                    <option value=9>9. Ns./Nr. </option>
                </select>
            </div>
            {{--  --}}
            <div class="form-group ">
                <label for="PP11Q"><b>11q.</b> ¿Fue la única persona que quedó sin trabajo?</label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11Q"
                    id="PP11Q">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No </option>
                    <option value=9>9. Ns./Nr. </option>
                </select>
            </div>
            {{--  --}}
            <div class="form-group ">
                <label for="PP11R"><b>11r.</b> ¿Le enviaron telegrama? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11R"
                    id="PP11R">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No</option>
                </select>
            </div>
            {{--  --}}
        </div>
    </div>
    <div class="row border">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11S"><b>11s.</b> ¿Le pagaron indemnización? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11S"
                    id="PP11S">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No </option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <label for="PP11T"><b>11t.</b> Está cobrando seguro de desempleo? </label>
                <select class="form-control form-control-sm" disabled onchange="update_parte_11()" name="PP11T"
                    id="PP11T">
                    <option value=""></option>
                    <option value=1>1. Si </option>
                    <option value=2>2. No </option>
                    <option value=9>9. Ns./Nr. </option>
                </select>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
<script>

function update_parte_11(){

    activar("#PP11A");

    A = getSelectedValue("#PP11A");
    B = $("#PP11B").val();
    B1 = getSelectedValue("#PP11B1");
    B2_ANO = $("#PP11B2_ANO").val();
    B2_MES = $("#PP11B2_MES").val();
    B2_DIA = $("#PP11B2_DIA").val();
    B3 = getSelectedValue("#PP11B3");
    C = getSelectedValue("#PP11C");
    C99 = getSelectedValue("#PP11C99");
    D = getSelectedValue("#PP11D");
    E = getSelectedValue("#PP11E");
    F = getSelectedValue("#PP11F");
    G_ANO = getSelectedValue("#PP11G_ANO");
    G_MES = getSelectedValue("#PP11G_MES");
    G_DIA = getSelectedValue("#PP11G_DIA");
    H = getSelectedValue("#PP11H");
    I = getSelectedValue("#PP11I");
    J = getSelectedValue("#PP11J");
    K = getSelectedValue("#PP11K");
    K1 = getSelectedValue("#PP11K1");
    K2 = getSelectedValue("#PP11K2");
    K3 = getSelectedValue("#PP11K3");
    L = getSelectedValue("#PP11L");
    L1 = getSelectedValue("#PP11L1");
    M = getSelectedValue("#PP11M");
    M1 = getSelectedValue("#PP11M1");
    N = getSelectedValue("#PP11N");
    O = getSelectedValue("#PP11O");
    P = getSelectedValue("#PP11P");
    Q = getSelectedValue("#PP11Q");
    R = getSelectedValue("#PP11R");
    S = getSelectedValue("#PP11S");
    T = getSelectedValue("#PP11T");

    A >= 1 ? activar("#PP11B"):desactivar("#PP11B");
    B ? activar("#PP11B1"):desactivar("#PP11B1");
    setOpcional("#PP11B1");
    B1 >= 1? activar(".PP11B2"):desactivar(".PP11B2");
    B1 >= 1? activar("#PP11B3"):desactivar("#PP11B3");
    !B1 && A && B ? activar("#PP11C"):desactivar("#PP11C");
    // B1 >= 1 activar(".PP11B2"):desactivar(".PP11B2");

}
</script>
