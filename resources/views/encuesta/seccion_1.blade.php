{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Sección I - Identificación      
                </div> --}}

                <div class="card-body">
                    <form method="POST" action="{{route('crearencuesta')}}">
                    
                            @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="codigo_area">Código de área</label>
                                <input type="text" class="form-control" id="codigo_area" name="codigo_area" aria-describedby="codigo_area" placeholder=" " required>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="numero_listado">Nº en el listado</label>
                                <input type="text" class="form-control" id="numero_listado" name="numero_listado" placeholder="">
                        </div>
                    </div>
                   
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="numero_semana">Semana Nº</label>
                            <input type="text" class="form-control" id="numero_semana" name="numero_semana" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="trimestre">Trimestre</label>
                            <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="anio">Año</label>
                            <input type="text" class="form-control" id="anio" name="anio" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="numero_vivienda">Vivienda Nº</label>
                            <input type="text" class="form-control" id="numero_vivienda" name="numero_vivienda" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="numero_hogar">Hogar Nº</label>
                            <input type="text" class="form-control" id="numero_hogar" name="numero_hogar" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="respondiente">Respondiente</label>
                            <input type="text" class="form-control" id="respondiente" name="respondiente" placeholder="">
                        </div>
                        <table class="table table-striped ">
                                <thead>
                                  <tr>
                                    <th scope="col">Visita Nº</th>
                                    <th scope="col">Fecha y Hora</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                         <td><input type="datetime-local" name="visitas_fecha_hora_1"   value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_2"  value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_3" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_4"  value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><input type="datetime-local" name="visitas_fecha_hora_5"  value=""></td>
                                    </tr>
                                </tbody>
                              </table>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Entrevista Realizada</label>
                                <select class="form-control" name="entrevista_realizada" >
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>Salido</option>
                                    <option>Mal tomado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Modalidad de Aplicación</label>
                                <select class="form-control" name="modalidad_aplicacion" >
                                    <option>Personal Completa</option>
                                    <option>Personal Telefónico</option>
                                    <option>Solo Telefónica</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="encuestador">Encuestador</label>
                                <input type="text" class="form-control" id="encuestador" name="encuestador" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="numero_encuestador">Nº</label>
                                <input type="text" class="form-control" id="numero_encuestador" name="numero_encuestador" placeholder="">
                            </div>
                        <button type="submit" class="btn btn-primary">Cargar</button>
                    </form>
                                            
                </div>
            {{-- </div>
        </div>
    </div>
</div> --}}
