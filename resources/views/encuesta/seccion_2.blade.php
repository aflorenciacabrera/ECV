

                <div class="card-body">
                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="codigo_area">1. ¿Cuántos ambientes/habitaciones tiene este hogar para su uso
                                            exclusivo? (excluyendo cocina, baño, pasillos, lavadero, garage)</label>
                                    <input type="text" class="form-control" id="codigo_area" name="codigo_area" aria-describedby="codigo_area" placeholder=" " required>
                                    {{-- <small id="codigo_area" class="form-text text-muted"> </small> --}}
                            </div>
                            
                            <div class="form-group col-md-6">
                                <br>
                                    <label for="numero_listado">2. De ésos, ¿cuántos usan habitualmente para dormir?</label>
                                    <input type="text" class="form-control" id="numero_listado" name="numero_listado" placeholder="" required>
                            </div>
                        </div>
                       
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="numero_semana">3. ¿Utiliza alguno exclusivamente como lugar de trabajo?
                                                consultorio, estudio, taller, negocio, etc.)</label>
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                       
                                                </select>
                                        
                                </div>
                                <div class="form-group col-md-6">
                                    <br>
                                        <label for="">3.1 ¿Cuántos?</label>
                                        <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" required>
                                </div>
                        </div>
    
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">4. ¿Tiene además….</label>
                                    <br>
                                    <label for="anio">Cuarto de
                                            cocina?</label>
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                    
                                            </select>
                                            <label for="anio">Lavadero?</label>
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                   
                                            </select>
                                            <label for="anio">Garage?</label>
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                    
                                            </select>
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="anio">5. De éstos…. (nombre los "Sí" de preg. 4) </label>
                                        <br>
                                        <label for=""> usan alguno para dormir?</label>
                                        <select class="form-control" name="entrevista_realizada"  required>
                                                <option>Si</option>
                                                <option>No</option>            
                                        </select>  
                                        <label for="">5.1 ¿Cuántos?</label>
                                        <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" required>
                                </div>

                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="numero_semana">6. ¿Utiliza alguno de éstos…. (nombre los si de la preg.4)</label>
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                        
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="">6.1 ¿Cuántos?</label>
                                        <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" required>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="numero_semana">7. Este hogar es….</label>
                                    <br>
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">… propietario de la vivienda y el terreno?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">… propietario de la vivienda solamente?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">….inquilino/arrendatario de la vivienda?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">… ocupante por pago de impuestos/expensas?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">…ocupante en relación de dependencia?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">… ocupante gratuito (con permiso)?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">… ocupante gratuito (sin permiso)?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">… está en sucesión?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">…. Otra situación? (especificar)</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <br>
                                    <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="numero_semana">8. ¿Para cocinar, utiliza principalmente….</label>
                                    <br>
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">… gas de red?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">…. Gas de tubo/garrafa?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">…. Kersone/leña/carbón?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                   
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">…. Otra situación? (especificar)</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    <br>
                                    <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" required>
                                    {{-- --------------------------  --}}
                                  
                                    <label for="numero_semana">9. ¿El baño es de….</label>
                                    
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">…. Uso exclusivo del hogar?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-10">
                                            <label for="numero_semana">…. Compartido con otro/s hogar/es de la misma vivienda?</label>
                                        </div>
                                        <div class="col-md-2" >
                                            <select class="form-control" name="entrevista_realizada"  required>
                                                    <option>Si</option>
                                                    <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">….Compartifo con otra/s vivienda/s?</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                   
                                    <div class="form-row ">
                                            <div class="col-md-10">
                                                <label for="numero_semana">…. No tiene baño (sólo para los que en Cuest. De Viv. Bloque IV, pregunta 8 dijeron "NO")</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <select class="form-control" name="entrevista_realizada"  required>
                                                        <option>Si</option>
                                                        <option>No</option>
                                                </select>
                                            </div>
                                    </div>
                                    
                            </div>
                            
                        </div>
                                     
                    </div>
