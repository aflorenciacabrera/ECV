
<div class="card-body">      
    <div class="form-row">
        <div class="form-group col-md-6">
                <label for="codigo_area">Código de área</label>
                <input type="text" class="form-control" id="" name="codigo_area" aria-describedby="codigo_area" placeholder=" " >
                {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
        </div>       
        <div class="form-group col-md-6">
                <label for="numero_listado">Nº en el listado</label>
                <input type="text" class="form-control" id="" name="numero_listado" placeholder="" >
        </div>
    </div>   
    <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="numero_semana">Semana Nº</label>
            <input type="text" class="form-control" id="" name="numero_semana" placeholder="" >
            </div>
            <div class="form-group col-md-6">
                    <label for="trimestre">Trimestre</label>
            <input type="text" class="form-control" id="" name="trimestre" placeholder="" >
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="anio">Año</label>
                <input type="text" class="form-control" id="" name="anio" placeholder="" >
            </div>
            <div class="form-group col-md-6">
                <label for="numero_vivienda">Vivienda Nº</label>
                <input type="text" class="form-control" id="" name="numero_vivienda" placeholder="" >
            </div>
    </div>   
    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="numero_hogar">Hogar Nº</label>
                <input type="text" class="form-control" id="" name="numero_hogar" placeholder="" >
            </div>
            <div class="form-group col-md-6">
                <label for="respondiente">Respondiente</label>
                <input type="text" class="form-control" id="" name="respondiente" placeholder="" >
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
                                        <td><input type="datetime-local" name="visitas_fecha_hora_1"   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_2"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_3" value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_4"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_5"  value="" ></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Entrevista Realizada</label>
                    <select class="form-control" name="entrevista_realizada"  >
                        <option value="1">Si</option>
                        <option value="2" >No</option>
                        <option value="3">Salido</option>
                        <option value="10">Mal tomado</option>
                    </select>
                    <br>
                    <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                    <select class="form-control" name="modalidad_aplicacion"  >
                        <option value="1">Personal Completa</option>
                        <option value="2">Personal Telefónico</option>
                        <option value="3">Solo Telefónica</option>
                    </select>
                    <br>
                    <label for="encuestador">Encuestador</label>
                    <input type="text" class="form-control" id="" name="encuestador" placeholder="" >
                    <label for="numero_encuestador">Nº</label>
                    <input type="text" class="form-control" id="" name="numero_encuestador" placeholder="" >
                </div>
    </div>                    
</div>
           