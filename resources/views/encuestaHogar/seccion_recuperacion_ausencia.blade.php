
<div class="card-body">
        <label for="">CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS, RECHAZOS Y OTRAS CAUSAS (hogares)</label>
    <div class="form-row">
            <div class="form-group col-md-5">
                <div class="form-row ">
                        <div class="col-md-5">
                                <label for="supervision">¿Salió a supervisión?</label>
                        </div>
                            <div class="col-md-2" >
                                    <select name="supervision" id="supervision" class="form-control form-control-sm">
                                        <option value=""></option>
                                            <option value="1">1. Si</option>
                                            <option value="2">2. No</option>
                                    </select>
                            </div>
                </div>

            </div>
            <div class="form-group col-md-6">
                <div class="form-row ">
                    <div class="col-md-2">
                        <label for="super_nombre">Supervisor:</label>
                    </div>
                    <div class="col-md-6" >
                        <input type="text" name="super_nombre" id="super_nombre" class="form-control form-control-sm">
                    </div>

                </div>
                <br>
                <div class="form-row ">
                    <div class="col-md-2">
                        <label for="super_num">N°:</label>
                    </div>
                    <div class="col-md-2" >
                        <input type="number"  name="super_num" id="super_num" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="form-row ">
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Visita Nº</th>
                                        <th scope="col">Fecha y Hora</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><input type="datetime-local" class="form-control form-control-sm" name="r_visitas_fecha_hora_1"   value="" ></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><input type="datetime-local" class="form-control form-control-sm" name="r_visitas_fecha_hora_2"  value="" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><input type="datetime-local" class="form-control form-control-sm" name="r_visitas_fecha_hora_3" value="" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td><input type="datetime-local" class="form-control form-control-sm" name="r_visitas_fecha_hora_4"  value="" ></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td><input type="datetime-local" class="form-control form-control-sm" name="r_visitas_fecha_hora_5"  value="" ></td>
                                        </tr>
                                    </tbody>
                            </table>
                    </div>

                </div>

                <div class="form-group col-md-6">
                        <div class="form-row ">
                            <br>
                            <div class="col-md-5">
                                <label for="">El encuestador entregó...</label>
                            </div>
                            <div class="col-md-4" >
                               <select name="entrega" id=""  class="form-control form-control-sm">
                                   <option value=""></option>
                                   <option value="7">7. ...Ausencia</option>
                                   <option value="8">8. ...Rechazo</option>
                                   <option value="9">9. ...Otras causas</option>
                               </select>
                            </div>

                        </div>
                        <div class="form-row ">
                            <div class="col-md-3">
                                <label for="mal_tomado">Mal Tomado:</label>
                            </div>
                            <div class="col-md-2" >
                              <input type="checkbox" name="mal_tomado" id="mal_tomado">
                            </div>
                        </div>
                    </div>
            </div>

</div>
