
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-3">
                    <label for="codigo_area">Código de área:</label>
                    <input type="number"   step="1" class="form-control form-control-sm" id="codigo_area" name="codigo_area" aria-describedby="codigo_area" placeholder=" " required>
                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
            </div>
            <div class="form-group col-md-3">
                    <label for="numero_listado">Nº en el listado:</label>
                    <input type="number"   step="1" class="form-control form-control-sm" id="numero_listado" name="numero_listado"  required>
            </div>
            <div class="form-group col-md-3">
                    <label for="numero_vivienda">Vivienda Nº:</label>
            <input type="number"   step="1" class="form-control form-control-sm" id="numero_vivienda" name="numero_vivienda"  required>
            </div>
            <div class="form-group col-md-3">
                    <label for="numero_semana">Semana Nº:</label>
            <input type="number"   step="1" max="12" class="form-control form-control-sm" id="numero_semana" name="numero_semana"  required>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="grupo_rotacion">Grupo Rotación:</label>
                    <input type="number"   step="1" class="form-control form-control-sm" id="grupo_rotacion" name="grupo_rotacion"  required>
                </div>
                <div class="form-group col-md-3">
                        <label for="telefono_hogar1">Teléfonos:</label>
                    <label for="telefono_hogar1">Hogar 1:</label>
                    <input type="text" class="form-control form-control-sm" id="telefono_hogar1" name="telefono_hogar1"  >

                </div>
                <div class="form-group col-md-3">
                        <label for="telefono_hogar2">Teléfonos:</label>

                    <label for="telefono_hogar2">Hogar 2:</label>
                    <input type="text" class="form-control form-control-sm" id="telefono_hogar2" name="telefono_hogar2"  >
                </div>
        </div>

    </div>

