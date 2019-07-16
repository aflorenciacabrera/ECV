{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="manz">Manz.:</label>
                    <input type="number" min="0" max="9999" step="1" class="form-control" id="manz" name="manz" aria-describedby="" placeholder=" " >
            </div>
            <div class="form-group col-md-4">
                    <label for="lado">Lado:</label>
                    <input type="number" min="0" step="1" class="form-control" id="lado" name="lado" placeholder="" >
            </div>
            <div class="form-group col-md-4">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" id="calle" name="calle" placeholder="" >
           </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-2">
                        <label for="numero">N°:</label>
                        <input type="number"  class="form-control" id="numero" name="numero" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                        <label for="piso">Piso:</label>
                        <input type="text" class="form-control" id="piso" name="piso" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                        <label for="deptoocasa">Depto o casa:</label>
                        <input type="text" class="form-control" id="deptoocasa" name="deptoocasa" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                        <label for="habitacion">Habitación:</label>
                        <input type="text" class="form-control" id="habitacion" name="habitacion" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                        <label for="tipoVivienda">Tipo de vivienda:</label>
                        <input type="text" class="form-control" id="tipoVivienda" name="tipoVivienda" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                        <label for="descripcion">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="" >
                </div>
        </div>
    </div>
{{--
    @endsection --}}
