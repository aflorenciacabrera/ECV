{{-- @extends('layouts.app')
@section('content') --}}

<div>
                Atención:
                <p> 1) Comience por la pregunta 3, apliquela a cada u2. no de los hogares detectados en la vivienda, empezando por el jefe del hogar</p>
               <p>2) Recuerde que el servicio doméstico con cama y los pensionistas se registra en último término.</p>
                <p> 3) Las personas detectadas como 2. No Residentes en las preguntas 3 a 10, táchelas con una raya.</p>
               <p> 4) Complete finalmente las columnas 1 y 2 una vez definidos los residentes de laa vivienda.</p>
                <table class="table table-bordered table-tip table-striped table-sm">
                    <thead >
                      <tr class="table-secondary">
                        <th colspan="10">CONDICIÓN DE RESIDENCIA</th>
                        <th colspan="6">CONTROL DE CAMBIOS</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="fit">1.Nª de </br>Hogar</td>
                        <td class="fit">2.Nº de </br>Componente</td>
                        <td class="fit">3. ¿Quién es el jefe o jefa del hogar? </br><label class="text-muted">(anote su nombre en primer lugar y luego </br>continúe con el resto del hogar)</label></td>
                        <td class="fit">4. En la útlima semana,</br> ¿vivió aquí cuatro</br> días o más?</td>
                        <td class="fit">5. ¿Vive aquí</br> hace más de 6 meses? </td>
                        <td class="fit">6. ¿Fijó o piensa</br> fijar residencia en</br> esta vivienda? </br>(se va a quedar a </br>vivir en esta vivienda)</td>
                        <td class="fit">7. ¿La semana pasada </br>estaba aquí porque…</td>
                        <td class="fit">8. ¿La ausencia ha </br>sido por más de 6 meses?</td>
                        <td class="fit">9. ¿Fijó o piensa </br>fijar la residencia</br> en otra vivienda? </br>(vive en otra vivienda)</td>
                        <td class="fit">10. La semana pasada</br> 2. no estaba aquí porque…</td>
                        <td class="fit">11. Controle cambios</br> en los componentes</br> del hogar </td>
                        <td class="fit">12. ¿Cuál fue </br>el motivo?</td>
                        <td class="fit">13. Controle cambios</br> en los componentes </br>del hogar</td>
                        <td class="fit">14. ¿Cuál fue</br> el motivo?</td>
                        <td class="fit">15. Controle cambios</br> en los componentes</br> del hogar</td>
                        <td class="fit">16. ¿Cuál fue</br> el motivo?</td>

                    </tr>
                   @for ($i = 1; $i <= 14; $i++)

                    <tr>
                        {{-- 1 --}}
                    <td class="fit"><input type="number" min=0 max=99  class="form-control form-control-sm primer-campo"  data-indice={{$i}} name="NRO_HOGAR_{{$i}}"> </td>
                        {{-- 2 --}}
                        <td class="fit"><input type="number" min=0 max=99 class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled name="NRO_COMPONENTE_{{$i}}"> </td>
                        {{-- 3 --}}
                        <td class="fit"><input type="text" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled name="NOMBRE_JEFE_{{$i}}"> </td>
                        {{-- 4 --}}
                        <td class="fit"><select name="VIVIO_SEM_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""></option>
                            <option value="1">1. Si  </option>
                                <option value="2">2. No (pasa a p.8)</option>
                                </select> </td>
                        {{-- 5 --}}
                        <td class="fit"><select name="VIVIO_MES_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""        ></option>
                            <option value="1">1. Si (Residente FIN)</option>
                                        <option value="2">2. No </option>
                                        </select> </td>
                        {{-- 6 --}}
                        <td class="fit"><select name="FIJAR_RES_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""        ></option>
                            <option value="1">1. Si (Residente FIN)</option>
                                        <option value="2">2. No </option>
                                        <option value="3">3. N/s </option>
                                        </select> </td>
                        {{-- 7 --}}
                        <td class="fit"><select name="ESTABA_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""></option>
                            <option value="1">1 ...vino a visitar clientes, transporta pasajeros, mercadería pero vive en otro lugar (viajantes)</option>
                                <option value="2">2... Vino de paseo/visita o a cuidar a familiares/amigos pero vive en otro lugar?</option>
                                <option value="3">3 ...Trabajaba en esta ciudad</option>
                                <option value="4">4 ...Busca/ba trabajo en esta ciudad</option>
                                <option value="5">5 ...Vino con familiares que trabajan o buscan trabajo aquí</option>
                                <option value="6">6 ...Estudia aquí</option>
                                </select>  </td>
                        {{-- 8 --}}
                        <td class="fit"><select name="AUSENCIA_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""        ></option>
                            <option value="1">1. Si</option>
                                        <option value="2">2. No </option>  {{-- (2. NO Residente FIN) --}}
                                        </select> </td>
                        {{-- 9 --}}
                        <td class="fit"><select name="OTRA_RES_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""></option>
                            <option value="1">1. Si</option>
                                <option value="2">2. No</option>  {{-- (2. NO Residente FIN) --}}
                                <option value="3">3. N/S</option>
                                </select> </td>
                        {{-- 10 --}}
                        <td class="fit"><select name="NO_ESTABA_{{$i}}" id="" class="form-control form-control-sm otros-campos" data-indice={{$i}} disabled>
                            <option value=""></option>
                            <option value="1">1…Viaja por trabajo, ve clientes, transporta
                                                personas, mercaderías, etc. Pero vive acá?
                                                (viajante, trabajador transporte, etc.)</option>
                                <option value="2">2… Está de vacaciones/visita, fue a cuidar a
                                                familiares/amigos a otro lugar pero vive acá</option>
                                <option value="3">3… Está internado, detenido, etc</option>
                                <option value="4">4… Se fue a vivir a otro lugar/ciudad para
                                                trabajar o buscar trabajo</option>
                                <option value="5">5… Se fue con familares que trabajan o buscan
                                                trabajo en otro lugar</option>
                                <option value="6">6. Está estudiando en otra ciudad</option>
                                <option value="7">7… Vive la mayor parte de la semana en otra
                                                vivienda</option>
                                <option value="8">8. Fallecimiento</option>
                                </select> </td>
                        {{-- 11 --}}
                        <td class="fit"><select name="CAMBIOS_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""        ></option>
                            <option value="1">1. Continúa en el hogar</option>
                                        <option value="2">2. Entrado (aplicar
                                                        desde p3)</option>
                                        <option value="3">3.Salido</option>
                                        <option value="4">4. Mal tomado</option>
                                </select> </td>
                        {{-- 12 --}}
                        <td class="fit"><select name="MOTIVO_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""></option>
                            <option value="1">1. Nacimiento
                                                /adopción</option>
                                <option value="2">2. Matrimonio
                                                /Unión</option>
                                <option value="3">3.Divorcio/separ.</option>
                                <option value="4">4. Fallecimiento</option>
                                <option value="5">5. Por estudio</option>
                                <option value="6">6. Por trabajo</option>
                                <option value="7">7. Por salud</option>
                                <option value="8">8. En prisión</option>
                                <option value="9">9. Otra razón
                                                (especificar)</option>
                                </select>
                                <input type="text" class="form-control form-control-sm d-none" id="" placeholder="" name="MOTIVO_OTRO_{{$i}}">   </td> {{-- FALTA DICCIONARIO --}}
                         {{-- 13 --}}
                        <td class="fit"><select name="CH13_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""        ></option>
                            <option value="1">1. Continúa en el
                                                        hogar</option>
                                        <option value="2">2. Entrado
                                                        (aplicar desde p3)</option>
                                        <option value="3">3.Salido</option>
                                        <option value="4">4. Mal tomado</option>
                            </select> </td>
                       {{-- 14 --}}
                        <td class="fit"><select name="CH14_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""        ></option>
                            <option value="1">1. Nacimiento /adopción</option>
                                        <option value="2">2. Matrimonio /Unión</option>
                                        <option value="3">3. Divorcio/separ.</option>
                                        <option value="4">4. Fallecimiento</option>
                                        <option value="5">5. Por estudio</option>
                                        <option value="6">6. Por trabajo</option>
                                        <option value="7">7. Por salud</option>
                                        <option value="8">8. En prisión</option>
                                        <option value="9">9. Otra razón (especificar)</option>
                                </select>
                                <input type="text" class="form-control form-control-sm d-none" id="" placeholder="" name="CH14_OTRO_{{$i}}">  </td> {{-- FALTA DICCIONARIO --}}
                      {{-- 15 --}}
                        <td class="fit"><select name="CH15_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""        ></option>
                            <option value="1">1. Continúa en el
                                                        hogar</option>
                                        <option value="2">2. Entrado (aplicar
                                                        desde p3)</option>
                                        <option value="3">3.Salido</option>
                                        <option value="4">4. Mal tomado</option>
                                </select></td>
                        {{-- 16 --}}
                        <td class="fit"><select name="CH16_{{$i}}" id="" class="form-control form-control-sm otros-campos">
                            <option value=""        ></option>
                            <option value="1">1. Nacimiento /adopción</option>
                                        <option value="2">2. Matrimonio /Unión</option>
                                        <option value="3">3.Divorcio/separ.</option>
                                        <option value="4">4. Fallecimiento</option>
                                        <option value="5">5. Por estudio</option>
                                        <option value="6">6. Por trabajo</option>
                                        <option value="7">7. Por salud</option>
                                        <option value="8">8. En prisión</option>
                                        <option value="9">9. Otra razón (especificar)</option>
                                </select>
                                <input type="text" class="form-control form-control-sm d-none" id="" placeholder="" name="CH16_OTRO_{{$i}}">  </td> {{-- FALTA DICCIONARIO --}}

                    </tr>

                   @endfor

            </tbody>
                  </table>

            <div class="form-group col-md-6">
                <label for="IV3_1">3.1 ¿Hay otras personas temporalmente ausentes?¿Menores de un año?¿Alguien más que no haya mencionado?</label>
                <select class="form-control form-control-sm" name="IV3_1" id="IV3_1">
                    <option value=""></option>
                    <option value="1">1. Si </option>
                    <option value="2">2. No</option>
                </select>
            </div>
</div>
{{--
@endsection --}}
<script>

function actualizar_seccion_5()
    {
         $(".otros-campos").attr('disabled',true);

        $(".primer-campo").each(function ()
        {
            if($(this).val() != "")
            {
                indice = $(this).data('indice');
                $(".otros-campos").each(function(){
                    if($(this).data('indice') == indice)
                    {
                        $(this).removeAttr('disabled');
                    }
                })
            }
        })
    }

$(document).ready(function ()
{
    actualizar_seccion_5();

    $(".primer-campo").keyup(function(){
        actualizar_seccion_5();
    })
})
</script>
