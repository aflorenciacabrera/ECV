
{{-- ------------------------------------- --}}

<label for="">HOGAR - PLANES Y PROGRAMAS GUBERNAMENTALES</label>
<br>

  <label for="numero_semana">En el mes de ….. ¿El hogar o alguno de los miembros del hogar recibió o fue beneficiario de….</label>
  <br>
  <div class="card-body">

    <div class="form-row">
        <div class="form-group col-md-6">
  <div class="form-row ">
      <div class="col-md-6">
          <label for="numero_semana">1.Desayuno en institucion educativa?</label>
        <div class="col-md-10" >
          <select class="form-control form-control-sm" name="DI" id="DI"  onchange="update_planes()">
              <option value=""></option>
                  <option value="1">1. Si</option>
                  <option value="2">2. No</option>
          </select>
      </div>
          <div class="col-md-10">
            <label for="DI_1">1.1¿Cuántos miembros?</label>
            <input type="number" disabled class="form-control form-control-sm" name="DI_1" id="DI_1" step="1" min="0" max="99">
        </div>

    </div>


    </div>
    <br>
    <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">2.Almuerzo en institucion educativa?</label>
  <div class="col-md-10" >
            <select class="form-control form-control-sm" name="AI" id="AI"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">2.1¿Cuántos miembros?</label>
              <input type="number" disabled class="form-control form-control-sm" name="AI_1" id="AI_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>
      <br>
      <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">3.Merienda en institucion educativa?</label>
  <div class="col-md-10" >
            <select class="form-control form-control-sm" name="MI" id="MI"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">3.1¿Cuántos miembros?</label>
              <input type="number" disabled class="form-control form-control-sm" name="MI_1" id="MI_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>
      <br>
      <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">4.Tarifa social del agua?</label>
<div class="col-md-10" >
            <select class="form-control form-control-sm" name="TS" id="TS"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">4.1 ¿Porcentaje?</label>
              <input type="number"  class="form-control form-control-sm" name="TS_1" id="TS_1" step="1" min="0"  max="999">
          </div>

      </div>


      </div>
      <br>
       <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">5.Tiene Tarifa Social de energía?</label>
             <div class="col-md-10" >
            <select class="form-control form-control-sm" name="TE" id="TE"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">5.1¿Monto total de boleta de energía?</label>
              <input type="number" class="form-control form-control-sm" name="TE_1" id="TE_1" step="1" min="0"  max="999999">
          </div>

      </div>


      </div>

    <br>
    <div class="form-group col-md-6">
       <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">6. Tarjeta verde?</label>
            <div class="col-md-10" >
            <select class="form-control form-control-sm" name="TV" id="TV"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
      </div>

      </div>
    </div>
      <br>
      <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">7. Tarjeta Mbareté?</label>
 <div class="col-md-10" >
            <select class="form-control form-control-sm" name="TM" id="TM"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">7.1¿Cuántos miembros?</label>
              <input type="number" disabled class="form-control form-control-sm" name="TM_1" id="TM_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>
      <br>
       <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">9. Plan mamá? (Mbareté)</label>
   <div class="col-md-10" >
            <select class="form-control form-control-sm" name="PM" id="PM"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">9.1¿Cuántos miembros?</label>
              <input type="number" disabled class="form-control form-control-sm" name="PM_1" id="PM_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>
       <br>
      <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">8. Tarjeta Sapucay?</label>
<div class="col-md-10" >
            <select class="form-control form-control-sm" name="TSAP" id="TSAP"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">8.1¿Cuántos miembros?</label>
              <input type="number" disabled class="form-control form-control-sm" name="TSAP_1" id="TSAP_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>


      <br>
       <div class="form-row ">
        <div class="col-md-6">
            <label for="numero_semana">10.Boleto gratuito de transporte público?</label>
 <div class="col-md-10" >
            <select class="form-control form-control-sm" name="BE" id="BE"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
            </select>
        </div>
            <div class="col-md-10">
              <label for="numero_semana">10.1 Cuantos Miembros</label>
              <input type="number" disabled class="form-control form-control-sm" name="BE_1" id="BE_1" step="1" min="0"  max="99">
          </div>

      </div>


      </div>
      <br>

    </div>
    <div class="form-row ">
        <div class="col-md-7">
            <label for="numero_semana">11. Algún miembro del Hogar cobró la Asignación Universal por hijo (AUH) y/o Asignación por embarazo?</label>

            <select class="form-control form-control-sm" name="AUH" id="AUH"  onchange="update_planes()">
                <option value=""></option>
                <option value="1">1. Si</option>
                <option value="2">2. No</option>
                <option value="9">9. Ns/Nr</option>
            </select>

      </div>
      <span></span>

          <div class="form-group col-md-6">
                   <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">Nro de Componentes</th>
                                        <th scope="col">Cobró por ¿Cuántos beneficiarios?</th>
                                        <th scope="col">Monto Total cobrado</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <td><input type="number"  disabled class="form-control form-control-sm auh_inputs" name="AUH_1" id="AUH_1"   value=""  min="0"  max="99"></td>
                                        <td><input type="number"  disabled class="form-control form-control-sm auh_inputs" name="AUH_2" id="AUH_2"   value=""  min="0" max="99"></td>
                                        <td><input type="number"  disabled class="form-control form-control-sm auh_inputs" name="AUH_3" id="AUH_3"   value=""  min="0"  max="999999"></td>
                                        </tr>
                                        <tr>
                                       <td><input type="number"  disabled class="form-control form-control-sm auh_inputs" name="AUH_1_2" id="AUH_1_1"  ></td>
                                       <td><input type="number"  disabled class="form-control form-control-sm auh_inputs"  name="AUH_2_2" id="AUH_2_1" ></td>
                                        <td><input type="number"  disabled class="form-control form-control-sm auh_inputs" name="AUH_3_2" id="AUH_3_1"  max="999999"></td>
                                        </tr>
                                        <tr>
                                       <td><input type="number"  disabled class="form-control form-control-sm auh_inputs"  name="AUH_1_3" id="AUH_1_2"   ></td>
                                       <td><input type="number"  disabled class="form-control form-control-sm auh_inputs"  name="AUH_2_3" id="AUH_2_2" ></td>
                                        <td><input type="number"  disabled class="form-control form-control-sm auh_inputs"  name="AUH_3_3" id="AUH_3_2" max="999999"></td>
                                        </tr>

                                </tbody>
                        </table>
      </div>
</div>
</div></div>

{{-- ------------------------------------ --}}
<script>
function update_planes()
{

DI = getSelectedValue("#DI");
AI = getSelectedValue("#AI");
MI = getSelectedValue("#MI");
TS = getSelectedValue("#TS");
TE = getSelectedValue("#TE");
TM = getSelectedValue("#TM");
PM = getSelectedValue("#PM");
TSAP = getSelectedValue("#TSAP");
BE = getSelectedValue("#BE");

AUH = getSelectedValue("#AUH");

AUH == 1?activar(".auh_inputs",false):desactivar(".auh_inputs",false);
DI == 1? activar("#DI_1"):desactivar("#DI_1");
AI == 1? activar("#AI_1"):desactivar("#AI_1");
MI == 1? activar("#MI_1"):desactivar("#MI_1");
// TS == 1? activar("#TS_1"):desactivar("#TS_1");
// TE == 1? activar("#TE_1"):desactivar("#TE_1");
TM == 1? activar("#TM_1"):desactivar("#TM_1");
PM == 1? activar("#PM_1"):desactivar("#PM_1");
TSAP == 1? activar("#TSAP_1"):desactivar("#TSAP_1");
BE == 1? activar("#BE_1"):desactivar("#BE_1");
}
</script>
