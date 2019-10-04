{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
{{-- Prueba refs #3 --}}
 <div class="form-row">
                <div class="form-group col-md-2">
                        <label for="trimestre">Trimestre:</label>
                        <input type="number" min="1" max="4" step="1" class="form-control form-control-sm" id="trimestre"  onchange="update_participacion()" name="trimestre" aria-describedby="" placeholder=" " required >
                </div>
                <div class="form-group col-md-2">
                        <label for="ano4">Año:</label>
                        <input type="number" class="form-control form-control-sm" id="ano4"  onchange="update_participacion()" name="ano4" max="2019" min="2019" value="2019" pattern="2019" step="1" required>
                </div>
                <div class="form-group col-md-2">
                        <label for="sem_referencia">Semana de referencia:</label>
                        <input type="date" min="2019-01-01" max="2019-12-31" class="form-control form-control-sm sem_referencia" id="sem_referencia"  onchange="update_participacion()" name="sem_referencia" placeholder="desde" required>
                        <input disabled type="text"  class="form-control form-control-sm sem_referencia"   id="sem_referencia_2" name="sem_referencia_2" placeholder="hasta">
                </div>

        </div>
    <div class="row">
        <div class="form-group col-md-4">
                        <label for="entrevista_realizada">Entrevista Realizada</label>
                        <select class="form-control form-control-sm"  onchange="update_participacion()" name="entrevista_realizada" id="entrevista_realizada" onchange="update_participacion()" required >
                            <option value=""></option>

                                <option value="1">1. Si</option>
                                <option value="2" >2. No</option>
                        </select>
                        <br>
                        <label for="modalidad_aplicacion">Modalidad de Aplicación</label>
                        <select class="form-control form-control-sm "  onchange="update_participacion()" name="modalidad_aplicacion" id="modalidad_aplicacion"  >
                            <option value=""></option>
                                <option value="1">1. Personal Completa</option>
                                <option value="2">2. Personal Telefónico</option>
                                <option value="3">3. Solo Telefónica</option>
                        </select>
                        <br>
                        <label for="encuestador">Encuestador</label>
                        <input type="text" class="form-control form-control-sm " required  onchange="update_participacion()" name="encuestador" id="encuestador" >
                        <label for="numero_encuestador">Nº</label>
                        <input type="text" class="form-control form-control-sm " required  onchange="update_participacion()" name="numero_encuestador" id="numero_encuestador" >
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
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" onchange="update_participacion()" name="visitas_fecha_hora_1" id="visitas_fecha_hora_1"   value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" disabled onchange="update_participacion()" name="visitas_fecha_hora_2" id="visitas_fecha_hora_2"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" disabled onchange="update_participacion()" name="visitas_fecha_hora_3" id="visitas_fecha_hora_3" value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" disabled onchange="update_participacion()" name="visitas_fecha_hora_4" id="visitas_fecha_hora_4"  value="" ></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td><input type="datetime-local"   min="2019-01-01T00:00" max="2019-12-31T23:59"  class="form-control form-control-sm from-control-sm" disabled onchange="update_participacion()" name="visitas_fecha_hora_5" id="visitas_fecha_hora_5"  value="" ></td>
                                        </tr>
                                </tbody>
                        </table>
                </div>

        </div>
        <div class="form-row">
                <div class="form-group col-md-4">
                        <label for="acompaniamiento">¿Se hizo acompañamiento?</label>
                        <select class="form-control form-control-sm " id="acompaniamiento" required  onchange="update_participacion()" name="acompaniamiento">
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                </div>
                <div class="form-group col-md-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control form-control-sm se_hizo_acompaniamiento " id="nombre"   onchange="update_participacion()" name="nombre" >
                </div>
                <div class="form-group col-md-4">
                        <label for="numero_particion">N°:</label>
                        <input type="number"   step="1" max="999" class="form-control form-control-sm se_hizo_acompaniamiento "  id="numero_particion"  onchange="update_participacion()" name="numero_particion" >
                </div>
        </div>
        <div class="row">
             <div class="form-group col-md-3">
                        <label for="cant_hogar">Cantidad de hogares en la vivienda:</label>
                        <input type="number" min="1" max="99" step="1" class="form-control form-control-sm depende_de_entrevista_realizada" id="cant_hogar"  disabled onchange="update_participacion()" name="cant_hogar" placeholder="Si la entrevista fue realizada" >
                </div>
                <div class="form-group col-md-3">
                        <label for="p_entrevistada">Persona entrevistada:</label>
                        <input type="text" class="form-control form-control-sm depende_de_entrevista_realizada" id="p_entrevistada" disabled  onchange="update_participacion()" name="p_entrevistada" placeholder="si la entrevista fue realizada">
                </div>
        </div>

</div>
{{-- @endsection --}}

<script>
function update_participacion(){
    entrevistaRealizada = getSelectedValue("#entrevista_realizada");
        visitas_fecha_hora_1 = $("#visitas_fecha_hora_1").val();
        visitas_fecha_hora_2 = $("#visitas_fecha_hora_2").val();
        visitas_fecha_hora_3 = $("#visitas_fecha_hora_3").val();
        visitas_fecha_hora_4 = $("#visitas_fecha_hora_4").val();
        visitas_fecha_hora_5 = $("#visitas_fecha_hora_5").val();
se_hizo_acompaniamiento = getSelectedValue("#acompaniamiento");

sem_ref = $("#sem_referencia").val();

var chooseDate=new Date(sem_ref);
chooseDate.setDate(chooseDate.getDate()+7);
console.log({chooseDate})

$("#sem_referencia_2").val(chooseDate.getDate()+"/"+(chooseDate.getMonth()+1)+"/"+chooseDate.getFullYear())


entrevistaRealizada == 1 ? activar(".depende_de_entrevista_realizada",true,false):desactivar(".depende_de_entrevista_realizada");


visitas_fecha_hora_1? activar("#visitas_fecha_hora_2",false,false):desactivar("#visitas_fecha_hora_2");
visitas_fecha_hora_2? activar("#visitas_fecha_hora_3",false,false):desactivar("#visitas_fecha_hora_3");
visitas_fecha_hora_3? activar("#visitas_fecha_hora_4",false,false):desactivar("#visitas_fecha_hora_4");
visitas_fecha_hora_4? activar("#visitas_fecha_hora_5",false,false):desactivar("#visitas_fecha_hora_5");

se_hizo_acompaniamiento == 1 ? activar(".se_hizo_acompaniamiento",true,false):desactivar(".se_hizo_acompaniamiento");
entrevistaRealizada == 1 ? activar("#otra_viv_direc"):desactivar("#otra_viv_direc");
entrevistaRealizada == 2 ? activar("#CAUSAS, #INFORMANTE",true,false):desactivar("#CAUSAS, #INFORMANTE");
entrevistaRealizada == 2 ? activar("#INFORMANTE",true,false):desactivar("#INFORMANTE");

entrevistaRealizada == 1 ? activar(".primer-campo",false,false):desactivar(".primer-campo");
entrevistaRealizada == 1 ? activar("#NRO_HOGAR_1"):desactivar("#NRO_HOGAR_1");


}


</script>
