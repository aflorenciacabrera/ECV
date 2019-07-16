{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6 form-inline">
                   <label for="supervision">¿Salió a supervisión? </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control form-control-sm" name="supervision" id="supervision"  >
                            <option value=""></option>
                                <option value="1">1. Si</option>
                                <option value="2">2. No</option>
                        </select>
                        <hr>
            </div>
        </div>
        <div class="border">
         <div class="form-group col-md-6 form-inline">
               <label for="num_super"><h3> Participación</h3></label>
                <div class="col-md-3"> Supervisor Nº </div>
                <input type="number" class="form-control form-control-sm" name="num_super" id="num_super">

            </div>
            <hr>
           <div class="form-row">
                <div class="form-group col-md-6">
                        <table class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                        <th scope="col">Visita Nº</th>
                                        <th scope="col">Fecha y Hora</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" name="visita_1" id="visita_1"   value="">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" name="visita_2" id="visita_2"  value="">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td><input type="datetime-local" class="form-control form-control-sm" name="visita_3" id="visita_3" value="">
                                        </td>
                                        </tr>

                                </tbody>
                        </table>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="modalidad">Modalidad de Aplicación</label>
                        <select class="form-control form-control-sm" name="modalidad" id="modalidad"  >
                            <option value=""></option>
                                <option value="1">1. Personal Completa</option>
                                <option value="2">2. Personal Telefónico</option>
                                <option value="3">3. Solo Telefónica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="entrega">El encuestador entregó...</label>
                        <select class="form-control form-control-sm" name="entrega" id="entrega"  >
                            <option value=""></option>
                                <option value="7">7. Ausencia</option>
                                <option value="8">8. Rechazo</option>
                                <option value="9">9. Otras causas</option>
                                 <option value="10">10. Mal tomada</option>
                        </select>
                    </div>



                </div>
        </div>
             <div class="form-group row">
                <div class=" form-group col-md-12">
                    <label for="observaciones">OBSERVACIONES:</label>
                    <textarea   class="form-control form-control-sm"name="observaciones" id= id="observaciones" cols="200" rows="3"></textarea>
                </div>
            </div>
</div>
 </div>

{{-- @endsection --}}
