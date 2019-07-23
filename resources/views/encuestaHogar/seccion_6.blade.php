

Para finalizar, en el mes de ____  ¿cuánto cobró por _____ ?
(indagar sólo en los ítems 2 a 5, 8 a 12 y 19.a marcados con sí en el Bloque estrategias del hogar)
<br><br>
<table class="table table-bordered table-sm">
    <thead >
        <tr class="table-secondary">
            <th scope="col">Quién lo Cobra?</th>
            @foreach ($hogar->individuos as $item)
                <th scope="col">Componente N° {{$item->numero_componente}} </br>  {{$item->nombre}}</th>

            @endforeach
            <th scope="col">No asignable a una persona en particular</th>
        </tr>
    </thead>
    <tbody>

        <tr>
                <td>

                </td>
                @foreach ($hogar->individuos as $item)

                <td> Monto

                </td>
                @endforeach

        </tr>
        <tr>
            <td>2…

            </td>
            @foreach ($hogar->individuos as $index=>$item)
            <td>
                <input type="number" class="form-control afectado" disabled name="V2_M_{{$index}}" value="{{$item->nolaboral->V2_M}}" data-relative="#V2">

            </td>

            @endforeach
            <td><input type="number" class="form-control afectado" disabled name="V2_M_NO_ASIGNABLE" data-relative="#V2">
            </td>


            </tr>
            <tr>
                <td>
                    2.1.Aguinaldo

                </td>
                @foreach ($hogar->individuos as $index=>$item)
                <td>
                <input type="hidden" class="form-control afectado" disabled name="numero_componente_{{$index}}" value="{{$item->nro_componente}}">
                <input type="hidden" class="form-control afectado" disabled name="id_componente_{{$index}}" value="{{$item->id}}">
                <input type="hidden" class="form-control afectado" disabled name="id_seccion_{{$index}}" value="{{$item->nolaboral->id}}">
                        <input type="number" class="form-control afectado" disabled name="V21_M_{{$index}}" value="{{$item->nolaboral->V21_M}}" data-relative="#V2">

                    </td>

                @endforeach
                <td><input type="number" class="form-control afectado" disabled name="V21_M_NO_ASIGNABLE" data-relative="#V2" >
                </td>


                </tr>
                <tr>
                        <td>
                            2.2.Retroactivo

                        </td>
                        @foreach ($hogar->individuos as $index=>$item)
                        <td>

                        <input type="number" class="form-control afectado" disabled name="V22_M_{{$index}}" value="{{$item->nolaboral->V22_M}}" data-relative="#V2">
                    </td>

                    </td>
                        @endforeach
                        <td><input type="number" class="form-control afectado" disabled name="V22_M_NO_ASIGNABLE" data-relative="#V2" >
                        </td>


                </tr>
                {{-- -------- --}}
        <tr>
                <td> 3…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V3_M_{{$index}}" value="{{$item->nolaboral->V3_M}}" data-relative="#V3">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V3_M_NO_ASIGNABLE" data-relative="#V3">
                </td>
        </tr>
        <tr>
                <td>4…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V4_M_{{$index}}" value="{{$item->nolaboral->V4_M}}" data-relative="#V4">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V4_M_NO_ASIGNABLE" data-relative="#V4">
                </td>


        </tr>
        <tr>
                <td>5…

                </td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V5_M_{{$index}}" value="{{$item->nolaboral->V5_M}}" data-relative="#V5">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V5_M_NO_ASIGNABLE" data-relative="#V5">
                </td>
        </tr>
        <tr>
                <td>8…

                </td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V8_M_{{$index}}" value="{{$item->nolaboral->V8_M}}" data-relative="#V8">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V8_M_NO_ASIGNABLE" data-relative="#V8">
                </td>

        </tr>
        <tr>
                <td>9…

                </td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V9_M_{{$index}}" value="{{$item->nolaboral->V9_M}}" data-relative="#V9">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V9_M_NO_ASIGNABLE" data-relative="#V9">
                </td>
        </tr>
        <tr>
                <td>10…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V10_M_{{$index}}" value="{{$item->nolaboral->V10_M}}" data-relative="#V10">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V10_M_NO_ASIGNABLE" data-relative="#V10">
                </td>
        </tr>
        <tr>
                <td>11…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V11_M_{{$index}}" value="{{$item->nolaboral->V11_M}}" data-relative="#V11">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V11_M_NO_ASIGNABLE" data-relative="#V11">
                </td>
        </tr>
        <tr>
                <td>12…

                </td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V12_M_{{$index}}" value="{{$item->nolaboral->V12_M}}" data-relative="#V12">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V12_M_NO_ASIGNABLE" data-relative="#V12">
                </td>
        </tr>
        <tr>
                <td>18…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V18_M_{{$index}}" value="{{$item->nolaboral->V18_M}}" data-relative="#V18">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V18_M_NO_ASIGNABLE" data-relative="#V18">
                </td>
        </tr>
        <tr>
                <td>19a…

                </td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="number" class="form-control afectado" disabled name="V19_AM_{{$index}}" value="{{$item->nolaboral->V19_AM}}" data-relative="#V19A">
                    </td>
                @endforeach
                 <td><input type="number" class="form-control afectado" disabled name="V19_AM_NO_ASIGNABLE" data-relative="#V19A">
                </td>
        </tr>
    </tbody>
</table>

