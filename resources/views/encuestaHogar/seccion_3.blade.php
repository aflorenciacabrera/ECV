<div class="card-body">
    <h3>EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA</h3>
    <label for="">(AUTOINFORMANTES) (para los que respondiero afirmativamente a preg. 3 de Bloque III de Cuestionario de vivienda)</label>
    <br>
        1. Su hogar tiene….
    <br>
    <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="habitacion_exclusivo">Habitación de uso exclusivo?</label>
                    <select class="form-control form-control-sm"

                    @if ($hogar->vivienda->domestico_cama_adentro == 1 || $hogar->vivienda->pensionistas == 1)
                        required
                    @else
                        disabled
                    @endif

                    name="III1_1"  >
                        <option value=""></option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                    </select>
                </div>
                    <div class="form-group col-md-6">
                    <label for="banio_exclusivo">Baño de uso exclusivo?</label>
                    <select class="form-control form-control-sm"
                            @if ($hogar->vivienda->domestico_cama_adentro == 1 || $hogar->vivienda->pensionistas == 1)
                                required
                            @else
                                disabled
                            @endif
                    name="III1_2"  >
                        <option value=""></option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                    </select>
                </div>
    </div>
    <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ingresos_otro_hogar">2. ¿Envía la mayor parte de sus ingresos a otro hogar?</label>
                    <select class="form-control form-control-sm"
                            @if ($hogar->vivienda->domestico_cama_adentro == 1 || $hogar->vivienda->pensionistas == 1)
                                required
                            @else
                                disabled
                            @endif
                    name="III2"  >
                        <option value=""></option>
                        <option value="1">1. Si</option>
                        <option value="2">2. No</option>
                    </select>
                </div>
    </div>
</div>
