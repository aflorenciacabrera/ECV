{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">

            <label for=""><h3> CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA</h3>  </label>
            <div class="form-group col-md-6">
                        <select class="form-control form-control-sm" name="CAUSAS" id="CAUSAS" disabled onchange="mostrarcausa(this.value)">
                                <option value=""></option>
                                <option value=1>1. Deshabilitada</option>
                                <option value=2>2. Demolida</option>
                                <option value=3>3. Fin de semana</option>
                                <option value=4>4. Construcción</option>
                                <option value=5>5. Vivienda utilizada</option>
                                <option value=6>6. Variaciones en el listado</option>
                                <option value=7>7. Ausencia</option>
                                <option value=8>8. Rechazo</option>
                                <option value=9>9. Otras causas</option>
                        </select>
            </div>
             <div class="form-group col-md-6">
                        <select class="form-control form-control-sm motivocausa d-none" disabled name="DESHABILITADA" id="DESHABILITADA" >
                              <option value=""></option>
                                <option value="1">1. Venta o alquiler</option>
                                <option value="2">2. Sucesión o remate</option>
                                <option value="3">3. Deshabilitada en la semana de referencia</option>
                                <option value="4">4. Sin causa conocida</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="DEMOLIDA" id="DEMOLIDA" >
                               <option value=""></option>
                                <option value="1">1. Fue demolida</option>
                                <option value="2">2. En demolición</option>
                                <option value="3">3. Levantada</option>
                                <option value="4">4. Trasladada</option>
                        </select>

                        <select class="form-control form-control-sm motivocausa d-none" disabled name="FIN_DE_SEMANA" id="FIN_DE_SEMANA" >
                              <option value=""></option>
                                <option value="1">1. de la semana</option>
                                <option value="2">2. Viven en otra vivienda la mayor parte del mes</option>
                                <option value="3">3. Viven en otra vivienda la mayor parte del año</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="CONSTRUCCION" id="CONSTRUCCION" >
                               <option value=""></option>
                                <option value="1">1. Se está construyendo</option>
                                <option value="2">2. Construcción paralizada</option>
                                <option value="3">3. Refacción</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="ESTABLECIMIENTO" id="ESTABLECIMIENTO" >
                               <option value=""></option>
                                <option value="1">1. Conserva la comodidad de vivienda</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="VARIACION" id="VARIACION" >
                               <option value=""></option>
                                <option value="1">1. No existe lugar físico</option>
                                <option value="2">2. No es vivienda</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="AUSENCIA_PARTICIPACION" id="AUSENCIA_PARTICIPACION" >
                               <option value=""></option>
                                <option value="1">1. No se pudo contactar en tres visitas</option>
                                <option value="2">2. Por causas circunstanciales</option>
                                <option value="3">3. Viaje</option>
                                <option value="4">4. Vacaciones</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="RECHAZO" id="RECHAZO" >
                               <option value=""></option>
                                <option value="1">1. Negativa rotunda</option>
                                <option value="2">2. Rechazo por el portero eléctrico</option>
                                <option value="3">3. Se acordaron entrevistas que no se concretaron</option>
                        </select>

                         <select class="form-control form-control-sm motivocausa d-none" disabled name="OTRO" id="OTRO" >
                               <option value=""></option>
                                <option value="1">1. Duelo</option>
                                <option value="2">2. Alcoholismo, discapacidad, idioma</option>
                                <option value="3">3. Problema de seguridad</option>
                                <option value="4">4. Inaccesible (problemas climáticos u otros)</option>
                        </select>
            </div>
        </div>
             <div class="form-group row">
                <div class=" form-group col-md-12">
                    <label for="INFORMANTE">INFORMANTE/OBSERVACIONES:</label>
                    <textarea   class="form-control form-control-sm " name="INFORMANTE" disabled id="INFORMANTE" cols="200" rows="3"></textarea>
                </div>
            </div>
 </div>

{{-- @endsection --}}
<script>

function mostrarcausa(value)
{
    $(".motivocausa").addClass("d-none");//oculto todos despues pregunto
    desactivar(".motivocausa");
    switch (value) {
        case "1":
            $("#DESHABILITADA").removeClass('d-none');
            activar("#DESHABILITADA");
        break;
        case "2":
            $("#DEMOLIDA").removeClass('d-none');
            activar("#DEMOLIDA");
        break;
        case "3":
            $("#FIN_DE_SEMANA").removeClass('d-none');
            activar("#FIN_DE_SEMANA");
        break;
        case "4":
            $("#CONSTRUCCION").removeClass('d-none');
            activar("#CONSTRUCCION");
        break;
        case "5":
            $("#ESTABLECIMIENTO").removeClass('d-none');
            activar("#ESTABLECIMIENTO");
        break;
        case "6":
            $("#VARIACION").removeClass('d-none');
            activar("#VARIACION");
        break;
        case "7":
            $("#AUSENCIA_PARTICIPACION").removeClass('d-none');
            activar("#AUSENCIA_PARTICIPACION");
        break;
        case "8":
            $("#RECHAZO").removeClass('d-none');
            activar("#RECHAZO");
        break;
        case "9":
            $("#OTRO").removeClass('d-none');
            activar("#OTRO");
        break;
    }

}

</script>
