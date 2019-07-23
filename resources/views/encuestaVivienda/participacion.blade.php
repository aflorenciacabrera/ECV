{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
{{-- Prueba refs #3 --}}
        <div class="form-row">
                <div class="form-group col-md-2">
                        <label for="trimestre">Trimestre:</label>
                        <input type="number" min="1" max="4" step="1" class="form-control form-control-sm" id="trimestre" name="trimestre" aria-describedby="" placeholder=" " required >
                </div>
                <div class="form-group col-md-2">
                        <label for="ano4">Año:</label>
                        <input type="number" class="form-control form-control-sm" id="ano4" name="ano4" max="2019" min="2019" value="2019" pattern="2019" step="1" required>
                </div>
                <div class="form-group col-md-2">
                        <label for="sem_referencia">Semana de referencia:</label>
                        <input type="text" class="form-control form-control-sm" id="sem_referencia" name="sem_referencia" required>
                </div>
                <div class="form-group col-md-3">
                        <label for="cant_hogar">Cantidad de hogares en la vivienda:</label>
                        <input type="number" min="1" max="99" step="1" class="form-control form-control-sm" id="cant_hogar" name="cant_hogar" placeholder="cant_hogar" >
                </div>
                <div class="form-group col-md-3">
                        <label for="p_entrevistada">Persona entrevistada:</label>
                        <input type="text" class="form-control form-control-sm" id="p_entrevistada" name="p_entrevistada" >
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
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" name="visitas_fecha_hora_1"   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" name="visitas_fecha_hora_2"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" name="visitas_fecha_hora_3" value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" name="visitas_fecha_hora_4"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" name="visitas_fecha_hora_5"  value="" ></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="form-group col-md-6">
                        <label for="entrevista_realizada">Entrevista Realizada</label>
                        <select class="form-control form-control-sm" name="entrevista_realizada" id="entrevista_realizada" onchange="entrevistaRealizada(this.value)" required >
                            <option value=""></option>

                                <option value="1">1.Si</option>
                                <option value="2" >2. No</option>
                        </select>
                        <br>
                        <label for="modalidad_aplicacion">Modalidad de Aplicación</label>
                        <select class="form-control form-control-sm" name="modalidad_aplicacion" id="modalidad_aplicacion"  >
                            <option value=""></option>
                                <option value="1">1. Personal Completa</option>
                                <option value="2">2. Personal Telefónico</option>
                                <option value="3">3. Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="encuestador">Encuestador</label>
                        <input type="text" class="form-control form-control-sm" name="encuestador" id="encuestador" >
                        <label for="numero_encuestador">Nº</label>
                        <input type="text" class="form-control form-control-sm" name="numero_encuestador" id="numero_encuestador" >
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-4">
                        <label for="acompaniamiento">¿Se hizo acompañamiento?</label>
                        <select class="form-control form-control-sm" id="acompaniamiento" name="acompaniamiento">
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" >
                </div>
                <div class="form-group col-md-4">
                        <label for="numero_particion">N°:</label>
                        <input type="number" min="0" step="1"  class="form-control form-control-sm" id="numero_particion" name="numero_particion" >
                </div>
        </div>

</div>
{{-- @endsection --}}
