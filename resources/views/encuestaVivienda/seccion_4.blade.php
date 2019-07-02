{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-body">      
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">1. Tipo de vivienda </label>
                <small id="" class="form-text text-muted">(por observación)</small>
                <select class="form-control" name="tipo_viv"  >
                        <option value="1">Casa</option>
                        <option value="2" >Departamento</option> 
                        <option value="3" >Pieza en inquilinato</option>  
                        <option value="4" >Pieza en hotel/Pensión</option>  
                        <option value="5" >Lcal no construido para habitación</option>  
                        <option value="6" >Otros (especificar)</option>             
                </select>  
                <input type="text" class="form-control" id="" name="tipo_viv_otro" placeholder="" >  
            </div> 
            <div class="form-group col-md-6">
                <label for="">2. ¿Cuántos ambientes/habitaciones tiene la vivienda en total? </label>
                <small id="" class="form-text text-muted"> (sin contar baño/s, cocina, pasillo/s, lavadero, garage)</small>
                <input type="text" class="form-control" id="" name="ambientes" placeholder="" >  
            </div>                 
        </div>  
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="">3 ¿Los pisos interiores son principalmente de…. </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="piso_int"  >
                                <option value="1">… Mosaico/baldosa/madera/cerámica/alfombra?</option>
                                <option value="2" >… Cemento/ladrillo fijo?</option> 
                                <option value="3" >… Ladrillo suelto/ tierra?</option>  
                                <option value="4" >Otro material? (especificar)</option>            
                        </select>  
                        <input type="text" class="form-control" id="" name="piso_int_otro" placeholder="" >  
                </div> 
                <div class="form-group col-md-6">
                        <label for="">4. ¿La cubierta exterior del techo es de….</label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="cubierta_exterior"  >
                                <option value="1">… Membrana/cubierta asfáltica?</option>
                                <option value="2" >… Baldosa/losa sin cubierta?</option> 
                                <option value="3" >… Pizarra/teja?</option>  
                                <option value="4" >… Chapa de metal sin cubierta?</option>
                                <option value="5" >… Chapa de fibrocemento/plástico?</option>
                                <option value="6" >… Chapa de cartón?</option>   
                                <option value="7" >… Caña/tabla/paja con barro/paja sola?</option>
                                <option value="9" >… N/s Depto. En Propiedad horizontal</option>              
                        </select>  
                </div>                 
        </div> 
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="">5. ¿El techo tiene cielorraso/revestimiento interior? </label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="cielorraso"  id="cielorraso">
                                <option value="1">Si</option>
                                <option value="2" >No</option>     
                        </select>  
                </div> 
                <div class="form-group col-md-6">
                        <label for="">6. ¿ Tiene agua…</label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="agua" id="agua" >
                                <option value="1" >… Por cañería dentro de la vivienda?</option>
                                <option value="2" >… Fuera de la vivienda pero dentro del terreno?</option> 
                                <option value="3" >… Fuera del terreno?</option>                
                        </select>  
                </div>                 
        </div> 
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="">7. ¿El agua es de…</label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="tipo_agua"  >
                                <option value="1">… Red pública? (agua corriente)</option>
                                <option value="2">… Perforación con bomba a motor?</option>
                                <option value="3">… Perforación con bomba manual?</option>
                                <option value="4" >…Otra fuente? (especificar)</option>     
                        </select>  
                        <input type="text" class="form-control" id="" name="tipo_agua_otro"  placeholder="" >  
                </div> 
                <div class="form-group col-md-6">
                        <label for="">8. ¿Tiene baño/letrina?</label>
                        {{-- <small id="" class="form-text text-muted">(a p.12)</small> --}}
                        <select class="form-control" name="banio" id="banio" >
                                <option value="1">Si</option>
                                <option value="2" >No - <small id="" class="form-text text-muted">(a p.12)</small></option>     
                        </select> 
                </div>                 
        </div> 
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="">9. ¿El baño o letrina está….</label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="banio_lugar" id="banio_lugar" >
                                <option value="1">… Dentro de la vivienda?</option>
                                <option value="2">… Fuera de la vivienda pero dentro del terreno?</option>
                                <option value="3">…Fuera del terreno?</option>
                                        
                        </select>  
                        {{-- <input type="text" class="form-control" id="" name="" placeholder="" >   --}}
                </div> 
                <div class="form-group col-md-6">
                        <label for="">10. ¿El baño tiene…</label>
                        {{-- <small id="" class="form-text text-muted">(a p.12)</small> --}}
                        <select class="form-control" name="banio_tiene" id="banio_tiene" >
                                <option value="1">… Inodoro con botón/mochila/cadena y arrastre de agua?</option>
                                <option value="2" >… Inodoro sin botón/cadena y con arrastre de agua?</option>
                                <option value="3">… Letrina? (sin arrastre de agua)</option> 
                        </select> 
                </div>                 
        </div> 
        <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="">11. ¿El desagüe del baño es…</label>
                        {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                        <select class="form-control" name="desague" id="desague" >
                                <option value="1">… A red pública? (cloaca)</option>
                                <option value="2">… A cámara séptica y pozo ciego?</option>
                                <option value="3">… Solo a pozo ciego?</option>
                                <option value="4">… A hoyo/excavación en la tierra?</option>
                                        
                        </select>  
                       
                </div> 
                <div class="form-group col-md-6">
                        <label for="">12. ¿La vivienda está ubicada…</label>
                        {{-- <small id="" class="form-text text-muted">(a p.12)</small> --}}
                        <br>
                        <label for="">1… Cerca de basural/es? (3 cuadras o menos)</label>
                        <select class="form-control" name="basural"  >
                                <option value="1">Si</option>
                                <option value="2">No</option>
                                
                        </select> 
                        <label for="">2… En zona inundable? (en los últimos 12 meses)</label>
                        <select class="form-control" name="inundable"  >
                                <option value="1">Si</option>
                                <option value="2">No</option>
                        </select> 
                        <label for="">3… En villa de emergencia? (por observación)</label>
                        <select class="form-control" name="villa"  >
                                <option value="1">Si</option>
                                <option value="2">No</option>
                        </select> 
                </div>                 
        </div> 
        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="">13. Dispone de conexión a internet en la vivienda?</label>
                                {{-- <small id="" class="form-text text-muted">(por observación)</small> --}}
                                <select class="form-control" name="internet" >
                                                <option value="1">Si (pasa a 14)</option>
                                                <option value="2">No</option>        
                                </select>  
                        </div> 
                        <div class="form-group col-md-6">
                                <label for="">14. ¿Qué tipo de conexión dispone?</label>
                                {{-- <small id="" class="form-text text-muted">(a p.12)</small> --}}
                                <select class="form-control" name="conexion"  >
                                        <option value="1">Solo FIJA (4Incluye conexión por WiFi o satelital)</option>
                                        <option value="2" >Sólo MÓVIL (Conexión por medio de red celular y puede pertenecer a cualquiera de los residentes)</option>
                                        <option value="3">Ambas</option>
                                        <option value="4">Ns/Nc</option>  
                                </select> 
                        </div>                 
                </div> 
    </div>           
{{-- @endsection --}}
                                <div class="col-2">
                                <label for="n_catast">N° Catast:</label>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" name="n_catast" id="n_catast" pattern="[S/N 0-9]+" title="Ingreso S/N o 0-9" placeholder="" required >
                            </div>  
                            <div class="form-group row"> 
                            <div class="col-3">
                                <label for="descripcion">Descripción:</label>   
                            </div> 
                            <div class="col-7">
                               <textarea   class="form-control"name="descripcion" id="descripcion" cols="30" rows="3" ></textarea> 
                               {{-- pattern="[A-Zaz 0-9]+" title="Texto con letras  A-Z, a-z y 0-9" --}}
                            </div>          
                        </div> 
<script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

   $('#cielorraso').change(function(){

                if($(this).val() == '1'){
                    $('#agua').removeAttr("disabled")
                  
                }else{
                    $('#agua').attr("disabled",'folse').attr('name','agua')
                
                  $(this).attr('name','cielorraso')
                }
            })
            
        //      $('#descripcion').change(function(){
        //           $('#n_catast').attr('name','descripcion')
        //           $(this).attr('name','n_catast')
        //      })
      
   $('#banio').change(function(){

                if($(this).val() == '1'){
                        $('#banio_tiene').removeAttr("disabled")
                        $('#desague').removeAttr("disabled")
                  
                }else{
                        $('#banio_tiene').attr("disabled",'folse').attr('name','banio_tiene')
                        $('#desague').attr("disabled",'folse').attr('name','desague')
                
                  $(this).attr('name','banio')
                }
            })       
     })
</script>