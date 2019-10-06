@extends('layouts.app')

@section('content')
<script src="{{asset('js/tablefilter/tablefilter.js')}}"></script>
<script>
$(document).ready(function(){
    var tf = new TableFilter(document.querySelector('#tabla'), {
        base_path: "{{asset('js/tablefilter')}}"+"/",
        col_0: 'none',
        col_1: 'select',
         col_2: 'select',
         col_3: 'select',
         col_4: 'none',
         col_5: 'none',
         col_6: 'none',
         col_7: 'none',
         col_8: 'none',
         col_9: 'none',
         col_10: 'none',
         col_11: 'none',
         col_12: 'none',
         col_13: 'none',
         col_14: 'none',
         col_15: 'none',
         col_16: 'select',
         col_17: 'select',
         col_18: 'none',
         col_19: 'none',
    });

    tf.init();

    $(".borrar").click(function (e)
    {
        if(confirm("Esta Seguro que desea Borrar esta Vivienda?"))
        {
           window.location.href = $(this).data('ruta');
        }
    })

})
</script>
<div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <p class="card-text">
                    <a  href="{{route('verEncuestaVivienda')}}" role="button" class="btn btn-lg btn-primary" role="button" aria-pressed="true"> Cargar Nueva Vivienda
                        <i><span class="fa fa-plus"></span></i>

                    </a></p>
            </div>
        </div>
        <div class="card text-left">
            <div class="card">

                <div class="card-header">
                    Viviendas Ingresadas por <strong>{{Auth::user()->name}}</strong>
                <!-- <div class="row"> -->
                    <!-- <div class="col-md-6 offset-md-3 d-flex flex-column align-items-center"> -->
                      <!-- <label><h5>Buscar</h5></label> -->
                      <br>
                      <br>
                        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la palabra que deseas Buscar...">
                    <!-- </div> -->
                <!-- </div> -->
                </div>
                <div class="card-body">

                    <table class="table table-striped table-inverse table-responsive table-sm" id="tabla">
                        <thead class="thead-inverse">
                            <tr><th>Codusu</th>
                                <th>Área</th>
                                <th>N° Listado</th>
                                <th>Vivienda</th>
                                <th>Semana</th>
                                <th>G. Rotación</th>
                                <th>Mzn</th>
                                <th>Lado</th>
                                <th>Calle</th>
                                <th>N°</th>
                                <th>Piso</th>
                                <th>Depto/Casa</th>
                                <th>Habitación</th>
                                <th>Tipo Vivienda</th>
                                {{-- <th>Descripción</th> --}}
                                <th>Trimestre</th>
                                <th>Año</th>
                                <th>Encuestador</th>
                                <th>Cargó</th>
                                <th>Estado</th>
                                <th>Acción</th>
                                {{-- <th>Cargar Hogar</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($viviendas as $item)
<<<<<<< HEAD
                                <tr >
=======
                                <tr>
                                    <td>{{$item->codusu()}}</td>
>>>>>>> 405a867f7cfe787a3e80cce3fb7ada2216c92fe8
                                <td>{{$item->codigo_area}}</td>
                                <td>{{$item->numero_listado}}</td>
                                <td>{{$item->numero_vivienda}}</td>
                                <td>{{$item->numero_semana}}</td>
                                <td>{{$item->grupo_rotacion}}</td>
                                <td>{{$item->manz}}</td>
                                <td>{{$item->lado}}</td>
                                <td>{{$item->calle}}</td>
                                <td>{{$item->numero}}</td>
                                <td>{{$item->piso}}</td>
                                <td>{{$item->deptoocasa}}</td>
                                <td>{{$item->habitacion}}</td>
                                <td>{{$item->tipoVivienda}}</td>
                                <td>{{$item->trimestre}}</td>
                                <td>{{$item->ano4}}</td>
                                <td>{{$item->encuestador}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>
                                    @if ($item->estado() == 'ok')
                                        <div class="alert alert-success" role="alert">
                                            Completo
                                        </div>

                                    @else
                                        <div class="alert alert-warning" role="alert">
                                            {{$item->estado()}}
                                        </div>

                                    @endif
                                </td>

                                {{-- <th>Cargar Hogar</th> --}}
                                <td>
                               @if($item->estado() !== 'ok')

                                        {{-- TODO ruta pra ver detalle de area --}}
                                <a name="" id="" class="btn btn-sm btn-primary btn-warning btn-block" href="{{route('verHogares',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Cargar Hogar" data-placemente="top">Completar Hogares<i class="fa fa-home" aria-hidden="true"></i></a>
                                <a name="" id="" class="btn btn-sm btn-primary btn-block" href="{{route('editarVivienda',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Editar <i class="fa fa-eye" aria-hidden="true"></i></a>

                                @else
                                  <a name="" id="" class="btn btn-sm btn-primary btn-warning btn-block" href="{{route('verHogares',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Cargar Hogar" data-placemente="top">Editar Hogares<i class="fa fa-home" aria-hidden="true"></i></a>
                                 <a name="" id="" class="btn btn-sm btn-primary btn-block" href="{{route('editarVivienda',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Editar <i class="fa fa-eye" aria-hidden="true"></i></a>
                               @endif
                                <a name="" id="" class="btn btn-sm btn-danger text-white btn-block borrar" data-ruta="{{route('borrarVivienda',['id'=>$item->id])}}" role="button"  data-toggle="tooltip" title="Ver Datos de la vivienda" data-placemente="top">Borrar Vivienda<i class="fa fa-delete" aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </div>

</div>
<script type="text/javascript">
    $("#filtrar").keyup(function () {
    var searchTerm = $("#filtrar").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
    .results tr[visible='false'],
    .no-result{
      display:none;
    }

    .results tr[visible='true']{
      display:table-row;
    }
</script>
@endsection
