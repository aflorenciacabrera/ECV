<div class="card-body">

 <div class="form-group form-inline">
     <label for="PP09A">9a. tiene que desplazarse habitualmente hasta un sitio o establecimiento determinado?</label>
<select onchange="update_parte_9()" disabled name="PP09A" id="PP09A" class="form-control form-sm">
    <option value=""></option>
<option value=1>1. No realiza desplazamientos  </option>
<option value=2>2. Si me desplazo dentro del municipio donde resido</option>
<option value=3>3. Si, me desplazo fuera del municipio donde resido (Especificar)</option>
<option value=4>4. Trabajo sin sitio o establecimiento fijo  </option>
<option value=9>9. Ns/Nc  </option></select>

        <label for="PP09A_ESP"> Especificar</label>
        <input type="text" onchange="update_parte_9()" disabled name="PP09A_ESP" id="PP09A_ESP" class="form-control form-sm">

</div>

 <div class="form-group form-inline">
<label for="PP09B">9b. ¿Cuál es el medio de transporte que más utiliza para desplazarse a su ocupación
principal?</label>
<select onchange="update_parte_9()" disabled name="PP09B" id="PP09B" class="form-control form-sm">
    <option value=""></option>
<option value=1>1. auto  </option>
<option value=2>2. motocicleta  </option>
<option value=3>3. auto laboral  </option>
<option value=4>4. moto laboral  </option>
<option value=5>5. bici  </option>
<option value=6>6. caminata  </option>
<option value=7>7. taxi  </option>
<option value=8>8. transp urbano pasajeros </option>
<option value=9>9. Transporte interurbano  </option>
<option value=10>10. Otros</option></select>

<label for="PP09B_ESP">Especificar</label>
<input type="text" onchange="update_parte_9()" disabled name="PP09B_ESP" id="PP09B_ESP" class="form-control form-sm">
</div>

 <div class="form-group form-inline">
<label for="PP09C">9c. En un día normal de trabajo ¿cuánto tiempo invierte para transportarse a su destino?</label>
<select onchange="update_parte_9()" disabled name="PP09C" id="PP09C" class="form-control form-sm">
    <option value=""></option>
<option value=1>1. Menos de 15  </option>
<option value=2>2. Entre 16 a 30  </option>
<option value=3>3. 31 a 1hora  </option>
<option value=4>4. 1 hora a 1 hora y 30   </option>
<option value=5>5. 1 hora y 31 a 2 horas  </option>
<option value=6>6. Más de 2horas</option></select>
</div>

</div>

<script>

function update_parte_9()
{

A = getSelectedValue("#PP09A");
I2 = getSelectedValue("#PP02I");
B = getSelectedValue("#PP09B");
C = getSelectedValue("#PP09C");
//
    P11_T = getSelectedValue("#PP11T");
    P11_J = getSelectedValue("#PP11J");
    P11_L = getSelectedValue("#PP11L");
    P11_O = getSelectedValue("#PP11O");

A == 2 || A == 3 ? activar("#PP09B"):desactivar("#PP09B");
A == 3 ? activar("#PP09A_ESP"):desactivar("#PP09A_ESP");

B >= 1 ? activar("#PP09C"):desactivar("#PP09C");
B == 10 ? activar("#PP09B_ESP"):desactivar("#PP09B_ESP");
C >= 1 || I2 == 1 || P11_T == 1 || P11_J == 2 || P11_L >= 1 ||  P11_O == 2 || P11_O == 3? activar("#PP12A"):desactivar("#PP12A");
}

</script>
