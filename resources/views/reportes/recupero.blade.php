<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ECV</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- STEPPER PLUGIN --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>







    <style>
        .fit {
            white-space: nowrap;
        }
    </style>
    <script>

        $(document).ready(function () {




        });
    </script>
</head>

<body>
    <div class="container-fluid border">
         <form method="POST" action="{{route('recupero')}}">
          @csrf
            <div class="row">
                 <div class="col-md-1">
            ano4
            <input type="number" name="ano4" class="form-control" value=2019 required>
        </div>
                 <div class="col-md-1">
            trimestre
            <input type="number" name="trimestre" class="form-control" value=3 required>
        </div>
       
        <div class="col-md-1">
            codigo_area
            <input type="number" name="codigo_area" class="form-control" required>
        </div>
        <div class="col-md-1">
            numero_listado
            <input type="number" name="numero_listado" class="form-control" required>
        </div>   
        <div class="col-md-1">
            manz
            <input type="number" name="manz" class="form-control" required>
        </div>
        <div class="col-md-1">
            lado
            <input type="number" name="lado" class="form-control" required>
        </div>
         <div class="col-md-1">
            numero_vivienda
            <input type="number" name="numero_vivienda" class="form-control" value=1 required>
        </div>
        <div class="col-md-1">
            numero_hogar
            <input type="number" name="numero_hogar" class="form-control" value=1 required>
        </div>
         <div class="col-md-1">
            <br>
            <input type="submit" class="btn btn-success" value="Buscar">
        </div>
            
            </div>

        </form>    
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
       
        
        <div class="row">
            <h4>
                ano4:{{$hogar->ano4}}
                trimestre:{{$hogar->trimestre}}
            codigo_area:{{$hogar->codigo_area}}
            numero_listado:{{$hogar->numero_listado}}
            manz:{{$hogar->vivienda->manz}}
            lado:{{$hogar->vivienda->lado}} 
            numero_vivienda:{{$hogar->numero_vivienda}}
            numero_hogar:{{$hogar->numero_hogar}}
            </h4>
        </div>
        
        <form method="post" action="{{route('update_ch')}}">
        <table class="table table-light">
            <tbody>
                <tr>
                  <tr>
            <td >1. </td>
            <td >2. </td>
   
            <td >9. ¿En el último año consultó a un profesional de salud?</td>
            <td >10. La ÚLTIMA consulta fue por…</td>
            <td >11. Fue a través de… </td>
            <td >12. Fue en un establecimiento </td>
          
            <td >15. A qué edad dejó de asistir?</td>
            <td >16. Por qué motivo dejó de asistir?</td>
            <td >17. ¿Le gustaría volver a estudiar? Luego de esta pregunta pasa p19</td>
           


        </tr>
                </tr>
                    @csrf
             <input type="hidden" name="hogar_id" value="{{$hogar->id}}">       
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
         
            {{-- 9 --}}
            <td><select name="CH08_A_{{$index}}" id="CH08_A_{{$index}}" value="{{$item->caracteristicas->CH08_A}}" class="form-control form-control-sm">
                    <option value=""> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_A == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH08_A == "2" ) selected @endif >2. No</option>
                    <option value="9"  @if($item->caracteristicas->CH08_A == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
            {{-- 10 --}}
            <td><select name="CH08_B_{{$index}}" id="CH08_B_{{$index}}" value="{{$item->caracteristicas->CH08_B}}" class="form-control form-control-sm">
                    <option value="" required> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_B == "1" ) selected @endif >1. Dolencia/afección/enfermedad</option>
                    <option value="2"  @if($item->caracteristicas->CH08_B == "2" ) selected @endif >2. Control/prevención</option>
                    <option value="9"  @if($item->caracteristicas->CH08_B == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
            {{-- 11 --}}
            <td><select name="CH08_C_{{$index}}" id="CH08_C_{{$index}}" value="{{$item->caracteristicas->CH08_C}}" class="form-control form-control-sm">
                    <option value="" required> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_C == "1" ) selected @endif >1. Emergencia</option>
                    <option value="2"  @if($item->caracteristicas->CH08_C == "2" ) selected @endif >2. Guardia</option>
                    <option value="3"  @if($item->caracteristicas->CH08_C == "3" ) selected @endif >3. Turno programado</option>
                    <option value="4"  @if($item->caracteristicas->CH08_C == "4" ) selected @endif >4. Consulta Médica domiciliaria</option>
                    <option value="9"  @if($item->caracteristicas->CH08_C == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
            {{-- 12 --}}
            <td><select name="CH08_D_{{$index}}" id="CH08_D_{{$index}}" value="{{$item->caracteristicas->CH08_D}}" class="form-control form-control-sm">
                    <option value="" required> </option>
                    <option value="1"  @if($item->caracteristicas->CH08_D == "1" ) selected @endif >1. Privado</option>
                    <option value="2"  @if($item->caracteristicas->CH08_D == "2" ) selected @endif >2. Público Nacional</option>
                    <option value="3"  @if($item->caracteristicas->CH08_D == "3" ) selected @endif >3. Público Provincial</option>
                    <option value="4"  @if($item->caracteristicas->CH08_D == "4" ) selected @endif >4. Público Municipal</option>
                    <option value="9"  @if($item->caracteristicas->CH08_D == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
          
           
          {{-- 15 --}}
            <td><input type="number" class="form-control form-control-sm" name="CH10_E_{{$index}}" id="CH10_E_{{$index}}" value="{{$item->caracteristicas->CH10_E}}" step="1"   max="99"></td>
            {{-- 16 --}}
            <td><select name="CH10_M_{{$index}}" id="CH10_M_{{$index}}" value="{{$item->caracteristicas->CH10_M}}" class="form-control form-control-sm opcional"  data-opcional="#CH10M_Esp_{{$index}}" data-condicion="8,8">
                    <option value=""> </option>
                    <option value="1"  @if($item->caracteristicas->CH10_M == "1" ) selected @endif >1. Porque me costaba estudiar</option>
                    <option value="2"  @if($item->caracteristicas->CH10_M == "2" ) selected @endif >2. Porque tenía que trabajar</option>
                    <option value="3"  @if($item->caracteristicas->CH10_M == "3" ) selected @endif >3. Porque tenía que cuidar hermanos o familiares</option>
                    <option value="4"  @if($item->caracteristicas->CH10_M == "4" ) selected @endif >4. Por maternidad/paternidad</option>
                    <option value="5"  @if($item->caracteristicas->CH10_M == "5" ) selected @endif >5. Por enfermedad</option>
                    <option value="6"  @if($item->caracteristicas->CH10_M == "6" ) selected @endif >6. Por problemas de consumo de alcohol/drogas</option>
                    <option value="7"  @if($item->caracteristicas->CH10_M == "7" ) selected @endif >7. Finalizo</option>
                    <option value="8"  @if($item->caracteristicas->CH10_M == "8" ) selected @endif >8. Otros (especificar)</option>
                    <option value="9"  @if($item->caracteristicas->CH10_M == "9" ) selected @endif >9. Ns/Nr</option>
                    </select>
                 
            </td>
           {{-- 17 --}}
            <td><select name="CH10_G_{{$index}}" id="CH10_G_{{$index}}" value="{{$item->caracteristicas->CH10_G}}" class="form-control form-control-sm">
                    <option value=""> </option>
                    <option value="1"  @if($item->caracteristicas->CH10_G == "1" ) selected @endif >1. Si</option>
                    <option value="2"  @if($item->caracteristicas->CH10_G == "2" ) selected @endif >2. No</option>
                    <option value="9"  @if($item->caracteristicas->CH10_G == "9" ) selected @endif >9. Ns/Nr</option>
                    </select> </td>
      
               

        </tr>
        @endforeach
        
    </tbody>
</table>
<input class="form-control btn-success" type="submit" value="Actualizar">
</form>
    </div>
    

</body>
</html>