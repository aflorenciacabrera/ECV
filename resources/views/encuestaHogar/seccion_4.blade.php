
<div class="card-body">
    <table class="table table-bordered table-sm">
        <thead >
          <tr class="table-secondary">
            <th scope="col">COMPONENTE N°</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">RELACIÓN DE PARENTESCO</th>
            <th scope="col-2" >SEXO</th>
            <th scope="col">FECHA DE NACIMIENTO</th>
            <th scope="col">EDAD</th>
            <th scope="col" >SITUACIÓN CONYUGAL</th>
            <th colspan="6" >COBERTURA MÉDICA</th>
            <th colspan="8"> NIVEL EDUCATIVO</th>
            <th colspan="2"> MIGRACIONES</th>
            <th colspan="5">  SEGURIDAD</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td class="fit">1. </td>
            <td class="fit">2. </td>
            <td class="fit">3.(Anote en el siguiente orden) </td>
            <td class="fit">4. (Anote en cada caso)</td>
            <td class="fit">5. ¿En qué fecha nació? </td>
            <td class="fit">6. ¿Cuántos años?</td>
            <td class="fit">7. ¿Actualmen te está...</td>
            <td class="fit">8. Tiene algún tipo de cobertura médica por </td>
            <td class="fit">9. ¿En el último año consultó a un profesional de salud?</td>
            <td class="fit">10. La ÚLTIMA consulta fue por…</td>
            <td class="fit">11. Fue a través de… </td>
            <td class="fit">12. Fue en un establecimiento </td>
            <td class="fit">13. ¿Sabe leer y escribir?</td>
            <td class="fit">14. Asiste o asistió a algún establecimiento educativo? (colegio, escuela universidad)</td>
            <td class="fit">15. A qué edad dejó de asistir?</td>
            <td class="fit">16. Por qué motivo dejó de asistir?</td>
            <td class="fit">17. ¿Le gustaría volver a estudiar? Luego de esta pregunta pasa p19</td>
            <td class="fit">18. Este establecimiento es….</td>
            <td class="fit">19. ¿Cuál es el nivel más alto que cursa o cursó?</td>
            <td class="fit">20. ¿Finalizó ese nivel?</td>
            <td class="fit">21.¿Cuál fue el último año aprobado? </td>
            <td class="fit">22. ¿Dónde Nació? </td>
            <td class="fit">23. ¿Dónde vivía hace 5 años?</td>
            <td class="fit">24. ¿Sufrió algún hecho delictivo en el último año?</td>
            <td class="fit">25. ¿Realizó la denuncia?</td>


        </tr>
        @foreach ($hogar->individuos as $index=>$item)
        <tr>
        <input type="hidden" name="carateristica_id_{{$index}}" id="carateristica_id_{{$index}}" value="{{$item->caracteristicas->id}}">
            {{-- 1 --}}
        <td>
            <input  type="number" class="form-control form-control-sm" disabled value="{{$item->numero_componente}}">
            <input  type="hidden" class="form-control form-control-sm" name="CH01_{{$index}}" id="CH01_{{$index}}" value="{{$item->numero_componente}}">
        </td>
            {{-- 2 --}}
        <td>
            <input  type="text" class="form-control form-control-sm" disabled value="{{$item->nombre}}">
            <input  type="hidden" class="form-control form-control-sm" name="CH02_{{$index}}" id="CH02_{{$index}}" value="{{$item->nombre}}">
         </td>
            {{-- 3 --}}
            <td><select name="CH03_{{$index}}" id="CH03_{{$index}}" class="form-control form-control-sm">
                    <option value=> </option>
                <option value="01" @if($item->caracteristicas->CH03 == "1" ) selected @endif>1. Jefe/a</option>
                <option value="02" @if($item->caracteristicas->CH03 == "2" ) selected @endif>2. Conyuge/pareja</option>
                <option value="03" @if($item->caracteristicas->CH03 == "3" ) selected @endif>3. Hijo/a Hijastro/a</option>
                <option value="04" @if($item->caracteristicas->CH03 == "4" ) selected @endif>4. Yerno/Nuera</option>
                <option value="05" @if($item->caracteristicas->CH03 == "5" ) selected @endif>5. Nieto/a</option>
                <option value="06" @if($item->caracteristicas->CH03 == "6" ) selected @endif>6. Madre/Padre</option>
                <option value="07" @if($item->caracteristicas->CH03 == "7" ) selected @endif>7. Suegro/a</option>
                <option value="08" @if($item->caracteristicas->CH03 == "8" ) selected @endif>8. Hermano/a</option>
                <option value="09" @if($item->caracteristicas->CH03 == "9" ) selected @endif>9. Otros familiares</option>
                <option value="10" @if($item->caracteristicas->CH03 == "10" ) selected @endif>10. No Familiares</option>
                </select> </td>
            {{-- 4 --}}
            <td><select name="CH04_{{$index}}" id="CH04_{{$index}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"@if($item->caracteristicas->CH04 == "1" ) selected @endif >1.Varón</option>
                    <option value="2"@if($item->caracteristicas->CH04 == "2" ) selected @endif>2.Mujer</option>
                    </select> </td>
            {{-- 5 --}}
            <td><input type="date" class="form-control form-control-sm" name="CH05_{{$index}}" id="CH05_{{$index}}" value="{{$item->caracteristicas->CH05}}"> </td>  {{-- dia,mes,año --}}
            {{-- 6 --}}
            <td><input type="number" class="form-control form-control-sm" name="CH06_{{$index}}" id="CH06_{{$index}}" value="{{$item->caracteristicas->CH06}}" step="1" min="0" max="99">  </td>
            {{-- 7 --}}
            <td><select name="CH07_{{$index}}" id="CH07_{{$index}}" value="{{$item->caracteristicas->CH07}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1" @if($item->caracteristicas->CH07 == "1" ) selected @endif >1 ...Unido/a?</option>
                    <option value="2" @if($item->caracteristicas->CH07 == "2" ) selected @endif >2 ...Casado/a?</option>
                    <option value="3" @if($item->caracteristicas->CH07 == "3" ) selected @endif >3 ...Separado/a o divorciado/a?</option>
                    <option value="4" @if($item->caracteristicas->CH07 == "4" ) selected @endif >4 ...Viudo/a?</option>
                    <option value="5" @if($item->caracteristicas->CH07 == "5" ) selected @endif >5 ...Soltero/a?</option>
                    </select>  </td>
            {{-- 8 --}}
            <td><select name="CH08_{{$index}}" id="CH08_{{$index}}" value="{{$item->caracteristicas->CH08}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1" @if($item->caracteristicas->CH08 == "1" ) selected @endif >1. Obra social (incluye PAMI)</option>
                    <option value="2" @if($item->caracteristicas->CH08 == "2" ) selected @endif >2. Mutual/Prepaga/Servicio de emergencia</option>
                    <option value="3" @if($item->caracteristicas->CH08 == "3" ) selected @endif >3. Planes y Seguros Público</option>
                    <option value="4" @if($item->caracteristicas->CH08 == "4" ) selected @endif >4. No paga ni le descuentan (no tiene ninguna)</option>
                    <option value="9" @if($item->caracteristicas->CH08 == "9" ) selected @endif >9. Ns/Nr</option>
                    </select>  </td>
            {{-- 9 --}}
            <td><select name="CH08A_{{$index}}" id="CH08A_{{$index}}" value="{{$item->caracteristicas->CH08_A}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_A == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH08_A == "2" ) selected @endif >2. No</option>
                    </select> </td>
            {{-- 10 --}}
            <td><select name="CH08B_{{$index}}" id="CH08B_{{$index}}" value="{{$item->caracteristicas->CH08_B}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_B == "1" ) selected @endif >1. Dolencia/afección/enfermedad</option>
                    <option value="2"  @if($item->caracteristicas->CH08_B == "2" ) selected @endif >2. Control/prevención</option>
                    </select> </td>
            {{-- 11 --}}
            <td><select name="CH08C_{{$index}}" id="CH08C_{{$index}}" value="{{$item->caracteristicas->CH08_C}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_C == "1" ) selected @endif >1. Emergencia</option>
                    <option value="2"  @if($item->caracteristicas->CH08_C == "2" ) selected @endif >2. Guardia</option>
                    <option value="3"  @if($item->caracteristicas->CH08_C == "3" ) selected @endif >3. Turno programado</option>
                    <option value="4"  @if($item->caracteristicas->CH08_C == "4" ) selected @endif >4. Consulta Médica domiciliaria</option>
                    </select> </td>
            {{-- 12 --}}
            <td><select name="CH08D_{{$index}}" id="CH08D_{{$index}}" value="{{$item->caracteristicas->CH08_D}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_D == "1" ) selected @endif >1. Privado</option>
                    <option value="2"  @if($item->caracteristicas->CH08_D == "2" ) selected @endif >2. Público Nacional</option>
                    <option value="3"  @if($item->caracteristicas->CH08_D == "3" ) selected @endif >3. Público Provincial</option>
                    <option value="4"  @if($item->caracteristicas->CH08_D == "4" ) selected @endif >4. Público Municipal</option>
                    </select> </td>
             {{-- 13 --}}
            <td><select name="CH09_{{$index}}" id="CH09_{{$index}}" value="{{$item->caracteristicas->CH09}}" class="form-control form-control-sm">
                    <option value=> </option>
                <option value="1"  @if($item->caracteristicas->CH09 == "1" ) selected @endif >1. Si</option>
                <option value="2"  @if($item->caracteristicas->CH09 == "2" ) selected @endif >2. No</option>
                <option value="3"  @if($item->caracteristicas->CH09 == "3" ) selected @endif >3. Menor de 2 años (a p.22)</option>
                </select> </td>
           {{-- 14 --}}
            <td><select name="CH10_{{$index}}" id="CH10_{{$index}}" value="{{$item->caracteristicas->CH10}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH10 == "1" ) selected @endif >1. Si, asiste (pasa a p18)</option>
                    <option value="2"  @if($item->caracteristicas->CH10 == "2" ) selected @endif >2. No asiste, pero asistió</option>
                    <option value="3"  @if($item->caracteristicas->CH10 == "3" ) selected @endif >3. Nunca asistió (A p. 22)</option>
                    </select> </td>
          {{-- 15 --}}
            <td><input type="number" class="form-control form-control-sm" name="CH10E_{{$index}}" id="CH10E_{{$index}}" value="{{$item->caracteristicas->CH10_E}}" step="1" min="0" max="99"></td>
            {{-- 16 --}}
            <td><select name="CH10M_{{$index}}" id="CH10M_{{$index}}" value="{{$item->caracteristicas->CH10_M}}" class="form-control form-control-sm opcional"  data-opcional="#CH10M_Esp_{{$index}}" data-condicion="7">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH10_M == "1" ) selected @endif >1. Porque me costaba estudiar</option>
                    <option value="2"  @if($item->caracteristicas->CH10_M == "2" ) selected @endif >2. Porque tenía que trabajar</option>
                    <option value="3"  @if($item->caracteristicas->CH10_M == "3" ) selected @endif >3. Porque tenía que cuidar hermanos o familiares</option>
                    <option value="4"  @if($item->caracteristicas->CH10_M == "4" ) selected @endif >4. Por maternidad/paternidad</option>
                    <option value="5"  @if($item->caracteristicas->CH10_M == "5" ) selected @endif >5. Por enfermedad</option>
                    <option value="6"  @if($item->caracteristicas->CH10_M == "6" ) selected @endif >6. Por problemas de consumo de alcohol/drogas</option>
                    <option value="7"  @if($item->caracteristicas->CH10_M == "7" ) selected @endif >7. Otros (especificar)</option>
                    </select>
                 <input type="text" disabled class="form-control form-control-sm" name="CH10M_Esp_{{$index}}" id="CH10M_Esp_{{$index}}" maxlength="45" >
            </td>
           {{-- 17 --}}
            <td><select name="CH10G_{{$index}}" id="CH10G_{{$index}}" value="{{$item->caracteristicas->CH10_G}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH10_G == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH10_G == "2" ) selected @endif >2. No</option>
                    <option value="9"  @if($item->caracteristicas->CH10_G == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
          {{-- 18 --}}
            <td><select name="CH11_{{$index}}" id="CH11_{{$index}}" value="{{$item->caracteristicas->CH11}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH11 == "1" ) selected @endif >1. Público</option>
                    <option value="2"  @if($item->caracteristicas->CH11 == "2" ) selected @endif >2. Privado</option>
                    <option value="3"  @if($item->caracteristicas->CH11 == "3" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
          {{-- 19 --}}
            <td><select name="CH12_{{$index}}" id="CH12_{{$index}}" value="{{$item->caracteristicas->CH12}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH12 == "1" ) selected @endif >1. Jardin/Prescolar</option>
                    <option value="2"  @if($item->caracteristicas->CH12 == "2" ) selected @endif >2. Primario</option>
                    <option value="3"  @if($item->caracteristicas->CH12 == "3" ) selected @endif >3. EGB</option>
                    <option value="4"  @if($item->caracteristicas->CH12 == "4" ) selected @endif >4. Secundario</option>
                    <option value="5"  @if($item->caracteristicas->CH12 == "5" ) selected @endif >5. Polimodal</option>
                    <option value="6"  @if($item->caracteristicas->CH12 == "6" ) selected @endif >6. Terciario</option>
                    <option value="7"  @if($item->caracteristicas->CH12 == "7" ) selected @endif >7. Universitario</option>
                    <option value="8"  @if($item->caracteristicas->CH12 == "8" ) selected @endif >8. Posgrado Universitario</option>
                    <option value="9"  @if($item->caracteristicas->CH12 == "9" ) selected @endif >9. Educación Especial (discapacidad)</option>
                    </select> </td>
         {{-- 20 --}}
            <td><select name="CH13_{{$index}}" id="CH13_{{$index}}" value="{{$item->caracteristicas->CH13}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH13 == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH13 == "2" ) selected @endif >2. No</option>
                    </select> </td>
        {{-- 21 --}}
            <td><select name="CH14_{{$index}}" id="CH14_{{$index}}" value="{{$item->caracteristicas->CH14}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="00"  @if($item->caracteristicas->CH14 == "00" ) selected @endif>0. Ninguno</option>
                    <option value="01"  @if($item->caracteristicas->CH14 == "01" ) selected @endif>1. Primero</option>
                    <option value="02"  @if($item->caracteristicas->CH14 == "02" ) selected @endif>2. Segundo</option>
                    <option value="03"  @if($item->caracteristicas->CH14 == "03" ) selected @endif>3. Tercero</option>
                    <option value="04"  @if($item->caracteristicas->CH14 == "04" ) selected @endif>4. Cuarto</option>
                    <option value="05"  @if($item->caracteristicas->CH14 == "05" ) selected @endif>5. Quinto</option>
                    <option value="06"  @if($item->caracteristicas->CH14 == "06" ) selected @endif>6. Sexto</option>
                    <option value="07"  @if($item->caracteristicas->CH14 == "07" ) selected @endif>7. Séptimo</option>
                    <option value="08"  @if($item->caracteristicas->CH14 == "08" ) selected @endif>8. Octavo</option>
                    <option value="09"  @if($item->caracteristicas->CH14 == "09" ) selected @endif>9. Noveno</option>
                    <option value="98"  @if($item->caracteristicas->CH14 == "98" ) selected @endif>98. Educación especial</option>
                    <option value="99"  @if($item->caracteristicas->CH14 == "99" ) selected @endif>99 Ns/Nr</option>
                    </select>  </td>
                {{-- 22 --}}
            <td><select name="CH15_{{$index}}" id="CH15_{{$index}}" value="{{$item->caracteristicas->CH15}}" class="form-control form-control-sm opcional" data-opcional="#CH15_Cod_{{$index}}" data-condicion="5">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH15 == "1" ) selected @endif >1. En esta localidad</option>
                    <option value="2"  @if($item->caracteristicas->CH15 == "2" ) selected @endif >2. En otra localidad de esta provincia </option>
                    <option value="3"  @if($item->caracteristicas->CH15 == "3" ) selected @endif >3. En otra provincia  (especificar)</option>
                    <option value="4"  @if($item->caracteristicas->CH15 == "4" ) selected @endif >4. En un país limítrofe (especificar Brasil, Bolivia,Chile, Paraguay, Uruguay)</option>
                    <option value="5"  @if($item->caracteristicas->CH15 == "5" ) selected @endif >5. En otro país (especificar)</option>
                    </select>
                    <input type="text" class="form-control form-control-sm" name="CH15_Cod_{{$index}}" id="CH15_Cod_{{$index}}" value="{{$item->caracteristicas->CH15_Cod}}" placeholder=""  maxlength="3" disabled>
                 </td>
                {{-- 23 --}}
            <td><select name="CH16_{{$index}}" id="CH16_{{$index}}" value="{{$item->caracteristicas->CH16}}" class="form-control form-control-sm opcional"  data-opcional="#CH16_Cod_{{$index}}" data-condicion="5">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH16 == "1" ) selected @endif >1. En esta localidad</option>
                    <option value="2"  @if($item->caracteristicas->CH16 == "2" ) selected @endif >2. En otra localidad de esta provincia </option>
                    <option value="3"  @if($item->caracteristicas->CH16 == "3" ) selected @endif >3. En otra provincia  (especificar)</option>
                    <option value="4"  @if($item->caracteristicas->CH16 == "4" ) selected @endif >4. En un país limítrofe (especificar Brasil, Bolivia,Chile, Paraguay, Uruguay)</option>
                    <option value="5"  @if($item->caracteristicas->CH16 == "5" ) selected @endif >5. En otro país (especificar)</option>
                    <option value="6"  @if($item->caracteristicas->CH16 == "6" ) selected @endif >6. No había nacido</option>
                    <option value="3"  @if($item->caracteristicas->CH16 == "3" ) selected @endif >9. Ns/Nr</option>
                    </select>
                    <input type="text" class="form-control form-control-sm" name="CH16_Cod_{{$index}}" id="CH16_Cod_{{$index}}" value="{{$item->caracteristicas->CH16_Cod}}" placeholder=""  maxlength="3" disabled>
                  </td>
                {{-- 24 --}}
            <td><select name="CH24_{{$index}}" id="CH24_{{$index}}" value="{{$item->caracteristicas->CH24}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH24 == "1" ) selected @endif >1. Si (pasa a p25)</option>
                    <option value="2"  @if($item->caracteristicas->CH24 == "2" ) selected @endif >2. No</option>
                    <option value="3"  @if($item->caracteristicas->CH24 == "3" ) selected @endif >9. Ns/Nr</option>
                    </select></td>
                {{-- 25 --}}
            <td><select name="CH25_{{$index}}" id="CH25_{{$index}}" value="{{$item->caracteristicas->CH25}}" class="form-control form-control-sm">
                    <option value=> </option>
                    <option value="1"  @if($item->caracteristicas->CH25 == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH25 == "2" ) selected @endif >2. No</option>
                    <option value="3"  @if($item->caracteristicas->CH25 == "3" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>

        </tr>
        @endforeach

      {{-- -------------------------------------------- --}}


</tbody>
      </table>


</div>

<script>
$(document).ready(function(){



    $(".opcional").change(function(){

        target = $(this).data("opcional");
        condicion = $(this).data("condicion");
        value = $(this).children("option:selected").val();
        if(value == condicion)
        {
            $(target).removeAttr("disabled");
        }
        else
        {
            $(target).attr("disabled",true);
        }
    })
})
</script>
