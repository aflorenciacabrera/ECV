
<div class="card-body">
    <table class="table table-bordered table-responsive">
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
            <td>1. </td>
            <td>2. </td>
            <td>3.(Anote en el siguiente orden) </td>
            <td>4. (Anote en cada caso)</td>
            <td>5. ¿En qué fecha nació? </td>
            <td>6. ¿Cuántos años?</td>
            <td>7. ¿Actualmen te está...</td>
            <td>8. Tiene algún tipo de cobertura médica por </td>
            <td>9. ¿En el último año consultó a un profesional de salud?</td>
            <td>10. La ÚLTIMA consulta fue por…</td>
            <td>11. Fue a través de… </td>
            <td>12. Fue en un establecimiento </td>
            <td>13. ¿Sabe leer y escribir?</td>
            <td>14. Asiste o asistió a algún establecimiento educativo? (colegio, escuela universidad)</td>
            <td>15. A qué edad dejó de asistir?</td>
            <td>16. Por qué motivo dejó de asistir?</td>
            <td>17. ¿Le gustaría volver a estudiar? Luego de esta pregunta pasa p19</td>
            <td>18. Este establecimiento es….</td>
            <td>19. ¿Cuál es el nivel más alto que cursa o cursó?</td>
            <td>20. ¿Finalizó ese nivel?</td>
            <td>21.¿Cuál fue el último año aprobado? </td>
            <td>22. ¿Dónde Nació? </td>
            <td>23. ¿Dónde vivía hace 5 años?</td>
            <td>24. ¿Sufrió algún hecho delictivo en el último año?</td>
            <td>25. ¿Realizó la denuncia?</td>
          
           
        </tr>
        <tr>
            {{-- 1 --}}
            <td><input type="text" class="form-control" name="CH01"> </td>
            {{-- 2 --}}
            <td><input type="text" class="form-control" name="CH02"> </td>
            {{-- 3 --}}
            <td><select name="CH03" id="" class="form-control">
                <option value="01">Jefe/a</option>
                <option value="02">Conyuge/pareja</option>
                <option value="03">Hijo/a Hijastro/a</option>
                <option value="04">Yerno/Nuera</option>
                <option value="05">Nieto/a</option>
                <option value="06">Madre/Padre</option>
                <option value="07">Suegro/a</option>
                <option value="08">Hermano/a</option>
                <option value="09">Otros familiares</option>
                <option value="10">No Familiares</option>
                </select> </td>
            {{-- 4 --}}
            <td><select name="CH04" id="" class="form-control">
                    <option value="1">1.Varón</option>
                    <option value="2">2.Mujer</option>
                    </select> </td>
            {{-- 5 --}}
            <td><input type="date" class="form-control" name="CH05"> </td>  {{-- dia,mes,año --}}
            {{-- 6 --}}
            <td><input type="number" class="form-control" name="CH06" step="1" min="0" max="99">  </td>
            {{-- 7 --}}
            <td><select name="CH07" id="" class="form-control">
                    <option value="1">1 ...Unido/a?</option>
                    <option value="2">2 ...Casado/a?</option>
                    <option value="3">3 ...Separado/a o divorciado/a?</option>
                    <option value="4">4 ...Viudo/a?</option>
                    <option value="5">5 ...Soltero/a?</option>
                    </select>  </td>
            {{-- 8 --}}
            <td><select name="CH08" id="" class="form-control">
                    <option value="1">1. Obra social (incluye PAMI)</option>
                    <option value="2">2. Mutual/Prepaga/Servicio de emergencia</option>
                    <option value="3">3. Planes y Seguros Público</option>
                    <option value="4">4. No paga ni le descuentan (no tiene ninguna)</option>
                    <option value="9">9. Ns/Nr</option>
                    </select>  </td>
            {{-- 9 --}}
            <td><select name="CH08_1" id="" class="form-control">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                    </select> </td>
            {{-- 10 --}}
            <td><select name="CH08_2" id="" class="form-control">
                    <option value="1">1. Dolencia/afección/enfermedad</option>
                    <option value="2">2. Control/prevención</option>
                    </select> </td>
            {{-- 11 --}}
            <td><select name="CH08_3" id="" class="form-control">
                    <option value="1">1. Emergencia</option>
                    <option value="2">2. Guardia</option>
                    <option value="3">3. Turno programado</option>
                    <option value="4">4. Consulta Médica domiciliaria</option>
                    </select> </td>
            {{-- 12 --}}
            <td><select name="CH08_4" id="" class="form-control">
                    <option value="1">1. Privado</option>
                    <option value="2">2. Público Nacional</option>
                    <option value="3">3. Público Provincial</option>
                    <option value="4">4. Público Municipal</option>
                    </select> </td>
             {{-- 13 --}}
            <td><select name="CH09" id="" class="form-control">
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
                <option value="3">3. Menor de 2 años (a p.22)</option>
                </select> </td>
           {{-- 14 --}}
            <td><select name="CH10" id="" class="form-control">
                    <option value="1">1. Si, asiste (pasa a p18)</option>
                    <option value="2">2. No asiste, pero asistió</option>
                    <option value="3">3. Nunca asistió (A p. 22)</option>
                    </select> </td>
          {{-- 15 --}}
            <td><input type="number" class="form-control" name="CH10_1"></td>
            {{-- 16 --}}
            <td><select name="CH10_2" id="" class="form-control">
                    <option value="1">1. Porque me costaba estudiar</option>
                    <option value="2">2. Porque tenía que trabajar</option>
                    <option value="3">3. Porque tenía que cuidar hermanos o familiares</option>
                    <option value="4">4. Por maternidad/paternidad</option>
                    <option value="5">5. Por enfermedad</option>
                    <option value="6">6. Por problemas de consumo de alcohol/drogas</option>
                    <option value="7">7. Otros (especificar)</option>
                    </select> </td>
           {{-- 17 --}}
            <td><select name="CH10_3" id="" class="form-control">
                    <option value="1">1. Si</option>
                    <option value="2">2. No</option>
                    <option value="9">9. Ns/Nr</option>
                    </select> </td>
          {{-- 18 --}}
            <td><select name="CH11" id="" class="form-control">
                    <option value="1">1. Público</option>
                    <option value="2">2. Privado</option>
                    <option value="3">9. Ns/Nr</option>
                    </select> </td>
          {{-- 19 --}}
            <td><select name="CH12" id="" class="form-control">
                    <option value="1">1. Jardin/Prescolar</option>
                    <option value="2">2. Primario</option>
                    <option value="3">3. EGB</option>
                    <option value="4">4. Secundario</option>
                    <option value="5">5. Polimodal</option>
                    <option value="6">6. Terciario</option>
                    <option value="7">7. Universitario</option>
                    <option value="8">8. Posgrado Universitario</option>
                    <option value="9">9. Educación Especial (discapacidad)</option>
                    </select> </td>
         {{-- 20 --}}
            <td><select name="CH13" id="" class="form-control">
                    <option value="1">1. Si</option>
                    <option value="2">2. No</option>
                    </select> </td>
        {{-- 21 --}}
            <td><select name="CH14" id="" class="form-control">
                    <option value="00">00. Ninguno</option>
                    <option value="01">01. Primero</option>
                    <option value="02">02. Segundo</option>
                    <option value="03">03. Tercero</option>
                    <option value="04">04. Cuarto</option>
                    <option value="05">05. Quinto</option>
                    <option value="06">06. Sexto</option>
                    <option value="07">07. Séptimo</option>
                    <option value="08">08. Octavo</option>
                    <option value="09">09. Noveno</option>
                    <option value="98">98. Educación especial</option>
                    <option value="99">99 Ns/Nr</option>
                    </select>  </td>
                {{-- 22 --}}
            <td><select name="CH15" id="" class="form-control">
                    <option value="1">1. En esta localidad</option>
                    <option value="2">2. En otra localidad de esta provincia </option>
                    <option value="3">3. En otra provincia  (especificar)</option>
                    <option value="4">4. En un país limítrofe (especificar Brasil, Bolivia,Chile, Paraguay, Uruguay)</option>
                    <option value="5">5. En otro país (especificar)</option>
                    </select> 
                    <input type="text" class="form-control" id="" name="CH15_Cod" placeholder=""  maxlength="3" disabled>
                 </td>
                {{-- 23 --}}
            <td><select name="CH16" id="" class="form-control">
                    <option value="1">1. En esta localidad</option>
                    <option value="2">2. En otra localidad de esta provincia </option>
                    <option value="3">3. En otra provincia  (especificar)</option>
                    <option value="4">4. En un país limítrofe (especificar Brasil, Bolivia,Chile, Paraguay, Uruguay)</option>
                    <option value="5">5. En otro país (especificar)</option>
                    <option value="6">6. No había nacido</option>
                    <option value="3">9. Ns/Nr</option>
                    </select> 
                    <input type="text" class="form-control" id="" name="CH16_Cod" placeholder=""  maxlength="3" disabled>
                  </td>
                {{-- 24 --}}
            <td><select name="CH17" id="" class="form-control">
                    <option value="1">1. Si (pasa a p25)</option>
                    <option value="2">2. No</option>
                    <option value="3">9. Ns/Nr</option>
                    </select></td>
                {{-- 25 --}}
            <td><select name="CH18" id="" class="form-control">
                    <option value="1">1. Si</option>
                    <option value="2">2. No</option>
                    <option value="3">9. Ns/Nr</option>
                    </select> </td>
           
        </tr>
      {{-- -------------------------------------------- --}}
     
   
</tbody>
      </table>

        
</div>
