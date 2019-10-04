
<div class="card-body">
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="codigo_area">1. ¿Cuántos ambientes/habitaciones tiene este hogar para su uso
                                exclusivo? (excluyendo cocina, baño, pasillos, lavadero, garage)</label>
                        <input type="number" class="form-control form-control-sm" name="II1" id="II1" aria-describedby="codigo_area" placeholder=" " step="1"   max="99">
                        {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
                </div>
                <div class="form-group col-md-6">
                <br>
                        <label for="numero_listado">2. De ésos, ¿cuántos usan habitualmente para dormir?</label>
                        <input type="number" class="form-control form-control-sm" name="II2" id="II2" placeholder="" step="1"   max="99">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">3. ¿Utiliza alguno exclusivamente como lugar de trabajo?
                                consultorio, estudio, taller, negocio, etc.)</label>
                                <select class="form-control form-control-sm" name="II3" id="II3"  onchange="hogar_seccion_2_3(this.value)">
                                    <option value=""></option>
                                        <option value="1">1.Si</option>
                                        <option value="2">2.No</option>

                                </select>
                </div>
                <div class="form-group col-md-6">
                        <br>
                        <label for="">3.1 ¿Cuántos?</label>
                        <input type="number" disabled class="form-control form-control-sm" name="II3_1" id="II3_1" placeholder=""  step="1"   max="9">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="II4" >4. ¿Tiene además….</label>
                        <br>
                        <label for="">Cuarto de
                                cocina?</label>
                        <select class="form-control form-control-sm" name="II4_1" id="II4_1" onchange="hogar_seccion_2_p4()" >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="anio">Lavadero?</label>
                        <select class="form-control form-control-sm" name="II4_2" id="II4_2" onchange="hogar_seccion_2_p4()" >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="anio">Garage?</label>
                        <select class="form-control form-control-sm" name="II4_3" id="II4_3" onchange="hogar_seccion_2_p4()" >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="II5">5. De éstos…. (nombre los "Sí" de preg. 4) </label>
                        <br>
                        <label for="II5"> usan alguno para dormir?</label>
                        <select disabled class="form-control form-control-sm" name="II5" id="II5" onchange="hogar_seccion_2_p5()" >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="II5_1">5.1 ¿Cuántos?</label>
                        <input disabled type="number" class="form-control form-control-sm" name="II5_1" id="II5_1" placeholder=""  step="1"   max="99">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="II6">6. ¿Utiliza alguno de éstos exclusivamente como lugar de trabajo?</label>
                        <select class="form-control form-control-sm" name="II6" id="II6" onchange="hogar_seccion_2_p6(this.value)" >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="II6_1">6.1 ¿Cuántos?</label>
                        <input type="number" disabled class="form-control form-control-sm" name="II6_1" id="II6_1" placeholder="cuantos?"   step="1"   max="99" >
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">7. Este hogar es….</label>
                        <select class="form-control form-control-sm" name="II7" id="II7" onchange="hogar_seccion_2_p7(this.value)"  >
                            <option value=""></option>
                                <option value="1">1. … propietario de la vivienda y el terreno?</option>
                                <option value="2">2. … propietario de la vivienda solamente?</option>
                                <option value="3">3. ….inquilino/arrendatario de la vivienda?</option>
                                <option value="4">4. … ocupante por pago de impuestos/expensas?</option>
                                <option value="5">5. …ocupante en relación de dependencia?</option>
                                <option value="6">6. … ocupante gratuito (con permiso)?</option>
                                <option value="7">7. … ocupante gratuito (sin permiso)?</option>
                                <option value="8">8. … está en sucesión?</option>
                                <option value="9">9. …. Otra situación? (especificar)</option>
                        </select>

                </div>
                <div class="form-group col-md-6">
                        <label for="II7_Esp">   </label>
                        <input type="text" disabled class="form-control form-control-sm" name="II7_Esp" id="II7_Esp" placeholder="" disabled>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">8. ¿Para cocinar, utiliza principalmente…..</label>
                        <select class="form-control form-control-sm" name="II8" id="II8"  onchange="hogar_seccion_2_p8(this.value)" >
                            <option value=""></option>
                                <option value="1">1. … gas de red?</option>
                                <option value="2">2. …. Gas de tubo/garrafa?</option>
                                <option value="3">3. …. Kersone/leña/carbón?</option>
                                <option value="4">4. …. Otra situación? (especificar)</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="">   </label>
                        <input type="text" disabled class="form-control form-control-sm" name="II8_Esp" id="II8_Esp" placeholder="" disabled>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">9. ¿El baño es de….</label>
                        <select class="form-control form-control-sm" name="II9" id="II9"  >
                            <option value=""></option>
                                <option value="1">1. …. Uso exclusivo del hogar?</option>
                                <option value="2">2. …. Compartido con otro/s hogar/es de la misma vivienda?</option>
                                <option value="3">3. ….Compartifo con otra/s vivienda/s?</option>
                                <option value="4">4. …. No tiene baño (sólo para los que en Cuest. De Viv. Bloque IV, pregunta 8 dijeron "NO")</option>
                        </select>
                </div>
        </div>
</div>

<script>

function  hogar_seccion_2_3(value)
{
    target = $("#II3_1");
    if(value == 1)
    {
        target.removeAttr('disabled')
    }
    else
    {
        target.attr('disabled',true)
    }

}

function hogar_seccion_2_p4()
{
p1 = ($("#II4_1").children("option:selected").val());
p2 = ($("#II4_2").children("option:selected").val());
p3 = ($("#II4_3").children("option:selected").val());

if(p1 == 1 || p2 == 1 || p3 == 1)
{
    //activo el 5
    $("#II5").removeAttr('disabled');
}
else
{
    //sino apago el 5 y el 5_1
    $("#II5").attr('disabled',true);
    $("#II5_1").attr('disabled',true);
}

hogar_seccion_2_p5();

}

function hogar_seccion_2_p5()
{
        p5 = ($("#II5").children("option:selected").val());

    if(p5 == 1 )
    {
        $("#II5_1").removeAttr('disabled');
    }
    else{
        $("#II5_1").attr('disabled',true);
    }
}

function hogar_seccion_2_p6(value){
value == 1 ?  $("#II6_1").removeAttr('disabled') : $("#II6_1").attr('disabled',true)

}
function hogar_seccion_2_p7(value){
value == 9 ?  $("#II7_Esp").removeAttr('disabled') : $("#II7_Esp").attr('disabled',true)

}
function hogar_seccion_2_p8(value){
value == 4 ?  $("#II8_Esp").removeAttr('disabled') : $("#II8_Esp").attr('disabled',true)


}
</script>
