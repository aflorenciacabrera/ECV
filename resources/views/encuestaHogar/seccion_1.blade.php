
<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-6">
                <label for="codigo_area">Código de área</label>
                <input type="number" class="form-control form-control-sm"  name="codigo_area" id="codigo_area" aria-describedby="codigo_area" placeholder=" " step="1"   disabled>
                {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
        </div>
        <div class="form-group col-md-6">
                <label for="numero_listado">Nº en el listado</label>
                <input type="number" class="form-control form-control-sm"  name="numero_listado" id="numero_listado" aria-describedby="codigo_area" placeholder=" " step="1"   disabled>
        </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="numero_semana">Semana Nº</label>
                <input type="number" class="form-control form-control-sm"  name="numero_semana" id="numero_semana" placeholder="" step="1"   disabled>

            </div>
            <div class="form-group col-md-6">
                    <label for="trimestre">Trimestre</label>
             <input type="number" class="form-control form-control-sm"  name="trimestre" id="trimestre" placeholder="" step="1"   max="9" disabled>
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="anio">Año</label>
                 <input type="number" class="form-control form-control-sm"  name="ano4" id="ano4" placeholder="" step="1"   max="9999" disabled>

            </div>
            <div class="form-group col-md-6">
                <label for="numero_vivienda">Vivienda Nº</label>
                <input type="number" class="form-control form-control-sm"  name="numero_vivienda" id="numero_vivienda" placeholder="" step="1"   disabled>
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="numero_hogar">Hogar Nº</label>
                 <input type="number" class="form-control form-control-sm"  name="numero_hogar" id="numero_hogar" placeholder="" step="1"   disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="respondiente">Respondiente</label>
                <input type="text" class="form-control form-control-sm"  name="respondiente" id="respondiente" placeholder="">
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
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
                                        <td><input type="datetime-local" class="form-control form-control-sm"  min="2019-01-01T00:00" max="2019-12-31T23:59" name="visitas_fecha_hora_1" id="visitas_fecha_hora_1"   value=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" min="2019-01-01T00:00" max="2019-12-31T23:59"  name="visitas_fecha_hora_2" id="visitas_fecha_hora_2"  value=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" min="2019-01-01T00:00" max="2019-12-31T23:59"  name="visitas_fecha_hora_3" id="visitas_fecha_hora_3" value=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" min="2019-01-01T00:00" max="2019-12-31T23:59"  name="visitas_fecha_hora_4" id="visitas_fecha_hora_4"  value=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" min="2019-01-01T00:00" max="2019-12-31T23:59"  name="visitas_fecha_hora_5" id="visitas_fecha_hora_5"  value=""></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Entrevista Realizada</label>
                    <select class="form-control form-control-sm" name="entrevista_realizada" id="entrevista_realizada" required>
                        <option value=""></option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                        <option value="3">3. Salido</option>
                        <option value="10">10. Mal tomado</option>
                    </select>
                    <br>
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                    <select class="form-control form-control-sm" name="modalidad_aplicacion" id="modalidad_aplicacion" >
                        <option value=""></option>
                        <option value="1">1. Personal Completa</option>
                        <option value="2">2. Personal Telefónico</option>
                        <option value="3">3. Solo Telefónica</option>
                    </select>
                    <br>
                    <label for="encuestador">Encuestador</label>
                    <input type="text" class="form-control form-control-sm"  name="encuestador" id="encuestador" placeholder="">
                    <label for="numero_encuestador">Nº</label>
                    <input type="number" class="form-control form-control-sm"  name="numero_encuestador" id="numero_encuestador" placeholder="" step="1"  >
                </div>
    </div>
</div>
