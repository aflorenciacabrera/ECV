

Para finalizar, en el mes de  <select name="VImes" id=""  >
                                <option value=""></option>
                                <option value="1">enero</option>
                                <option value="2">febrero</option>
                                <option value="3">marzo</option>
                                <option value="4">abril</option>
                                <option value="5">mayo</option>
                                <option value="6">junio</option>
                                <option value="7">julio</option>
                                <option value="8">agosto</option>
                                <option value="9">septiembre</option>
                                <option value="10">octubre</option>
                                <option value="11">noviembre</option>
                                <option value="12">diciembre</option>
                            </select>   ¿cuánto cobró por <input type="text"  name="VIcobr"> ?
(indagar sólo en los ítems 2 a 5, 8 a 12 y 19.a marcados con sí en el Bloque estrategias del hogar)
<br><br>
<table class="table table-bordered table-responsive">
    <thead >
        <tr class="table-secondary">
            <th scope="col">Quién lo Cobra?</th>
            @foreach ($hogar->individuos as $item)
                <th scope="col">Componente N° {{$item->nro_componente}} </br>  {{$item->nombre}}</th>

            @endforeach
            <th scope="col">No asignable a una persona en particular</th>
        </tr>
    </thead>
    <tbody>

        <tr>
                <td>     </td>
                @foreach ($hogar->individuos as $item)

                <td> Monto</td>
                @endforeach

        </tr>
        <tr>
            <td>2…
            </td>
            @foreach ($hogar->individuos as $index=>$item)
            <td>
                <input type="text" class="form-control" name="V2_M_{{$index}}">
            </td>

            @endforeach
            <td><input type="text" class="form-control" name="V2_M_NO_ASIGNABLE"></td>


            </tr>
            <tr>
                <td>
                    2.1.Aguinaldo
                </td>
                @foreach ($hogar->individuos as $index=>$item)
                <td>
                <input type="hidden" class="form-control" name="numero_componente_{{$index}}" value="{{$item->nro_componente}}">
                <input type="hidden" class="form-control" name="id_componente_{{$index}}" value="{{$item->id}}">
                        <input type="text" class="form-control" name="V21_M_{{$index}}">
                </td>

                @endforeach
                <td><input type="text" class="form-control" name="V21_M_NO_ASIGNABLE"></td>


                </tr>
                <tr>
                        <td>
                            2.2.Retroactivo
                        </td>
                        @foreach ($hogar->individuos as $index=>$item)
                        <td>

                        <input type="text" class="form-control" name="V22_M_{{$index}}"></td>
                        </td>
                        @endforeach
                        <td><input type="text" class="form-control" name="V22_M_NO_ASIGNABLE"></td>


                </tr>
                {{-- -------- --}}
        <tr>
                <td> 3…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V3_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>4…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V4_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>


        </tr>
        <tr>
                <td>5…</td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V5_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>8…</td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V8_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>

        </tr>
        <tr>
                <td>9…</td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V9_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>10…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V10_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>11…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V11_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>12…</td>
                  @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V12_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>18…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V18_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
        <tr>
                <td>19a…</td>
                 @foreach ($hogar->individuos as $index=>$item)
                    <td><input type="text" class="form-control" name="V19_M_{{$index}}"> </td>
                @endforeach
                 <td><input type="text" class="form-control" name="V4_M_NO_ASIGNABLE"> </td>
        </tr>
    </tbody>
</table>

