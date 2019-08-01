{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="manz">Manz.:</label>
                    <input type="number" min="0" max="999" step="1" class="form-control form-control-sm" id="manz" name="manz" aria-describedby="" placeholder=" " required>
            </div>
            <div class="form-group col-md-4">
                    <label for="lado">Lado:</label>
                    <input type="number" min="1" max ="4" step="1" class="form-control form-control-sm" id="lado" name="lado" placeholder="" required>
            </div>
            <div class="form-group col-md-4">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control form-control-sm" id="calle" name="calle"  title="custom message" placeholder="" required>
           </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-2">
                        <label for="numero">N°:</label>
                        <input type="text"  class="form-control form-control-sm" id="numero"  pattern="[0-9]*|s\/n|S\/N"  name="numero" placeholder=""  >
                </div>
                <div class="form-group col-md-2">
                        <label for="piso">Piso:</label>
                        <input type="number" min="1" max="20" step="1" class="form-control form-control-sm" id="piso" name="piso" placeholder=""  >
                </div>
                <div class="form-group col-md-2">
                        <label for="deptoocasa">Depto o casa:</label>
                        <input type="text" class="form-control form-control-sm" id="deptoocasa" name="deptoocasa" placeholder=""  >
                </div>
                <div class="form-group col-md-2">
                        <label for="habitacion">Habitación:</label>
                        <input type="text" class="form-control form-control-sm" id="habitacion" name="habitacion" placeholder="" maxlength="2" >
                </div>
                <div class="form-group col-md-2">
                        <label for="tipoVivienda">Tipo de vivienda:</label>
                        <input type="text" class="form-control form-control-sm" id="tipoVivienda" name="tipoVivienda" placeholder=""  maxlength="1" pattern="[A-Za-z]">
                </div>
                <div class="form-group col-md-2">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" placeholder=""  >
                </div>
        </div>
    </div>
{{--
    @endsection --}}
