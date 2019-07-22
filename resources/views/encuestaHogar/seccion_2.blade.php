
<div class="card-body">
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="codigo_area">1. ¿Cuántos ambientes/habitaciones tiene este hogar para su uso
                                exclusivo? (excluyendo cocina, baño, pasillos, lavadero, garage)</label>
                        <input type="number" class="form-control form-control-sm" id="" name="II1" aria-describedby="codigo_area" placeholder=" " step="1" min="0" max="99">
                        {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
                </div>
                <div class="form-group col-md-6">
                <br>
                        <label for="numero_listado">2. De ésos, ¿cuántos usan habitualmente para dormir?</label>
                        <input type="number" class="form-control form-control-sm" id="" name="II2" placeholder="" step="1" min="0" max="99">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">3. ¿Utiliza alguno exclusivamente como lugar de trabajo?
                                consultorio, estudio, taller, negocio, etc.)</label>
                                <select class="form-control form-control-sm" name="II3"  >
                                    <option value=""></option>
                                        <option value="1">1.Si</option>
                                        <option value="2">2. No</option>

                                </select>
                </div>
                <div class="form-group col-md-6">
                        <br>
                        <label for="">3.1 ¿Cuántos?</label>
                        <input type="number" class="form-control form-control-sm" id="" name="II3_1" placeholder=""  step="1" min="0" max="9">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="II4" >4. ¿Tiene además….</label>
                        <br>
                        <label for="">Cuarto de
                                cocina?</label>
                        <select class="form-control form-control-sm" name="II4_1"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="anio">Lavadero?</label>
                        <select class="form-control form-control-sm" name="II4_2"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="anio">Garage?</label>
                        <select class="form-control form-control-sm" name="II4_3"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="anio">5. De éstos…. (nombre los "Sí" de preg. 4) </label>
                        <br>
                        <label for=""> usan alguno para dormir?</label>
                        <select class="form-control form-control-sm" name="II5"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <label for="">5.1 ¿Cuántos?</label>
                        <input type="number" class="form-control form-control-sm" id="" name="II5_1" placeholder=""  step="1" min="0" max="99">
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">6. ¿Utiliza alguno de éstos exclusivamente como lugar de trabajo?</label>
                        <select class="form-control form-control-sm" name="II6"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="">6.1 ¿Cuántos?</label>
                        <input type="number" class="form-control form-control-sm" id="" name="II6_1" placeholder=""   step="1" min="0" max="99" >
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">7. Este hogar es….</label>
                        <select class="form-control form-control-sm" name="II7"  >
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
                        <label for="">   </label>
                        <input type="text" class="form-control form-control-sm" id="" name="II7_Esp" placeholder=""  maxlength="45" disabled>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">8. ¿Para cocinar, utiliza principalmente…..</label>
                        <select class="form-control form-control-sm" name="II8"  >
                            <option value=""></option>
                                <option value="1">1. … gas de red?</option>
                                <option value="2">2. …. Gas de tubo/garrafa?</option>
                                <option value="3">3. …. Kersone/leña/carbón?</option>
                                <option value="4">4. …. Otra situación? (especificar)</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="">   </label>
                        <input type="text" class="form-control form-control-sm" id="" name="II8_Esp" placeholder="" maxlength="45" disabled>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="numero_semana">9. ¿El baño es de….</label>
                        <select class="form-control form-control-sm" name="II9"  >
                            <option value=""></option>
                                <option value="1">1. …. Uso exclusivo del hogar?</option>
                                <option value="2">2. …. Compartido con otro/s hogar/es de la misma vivienda?</option>
                                <option value="3">3. ….Compartifo con otra/s vivienda/s?</option>
                                <option value="4">4. …. No tiene baño (sólo para los que en Cuest. De Viv. Bloque IV, pregunta 8 dijeron "NO")</option>
                        </select>
                </div>
        </div>
</div>

