

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
                                        <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" >
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
                                                        <select class="form-control" name="entrevista_realizada"  required>
                                                                        <option>… propietario de la vivienda y el terreno?</option>
                                                                        <option>… propietario de la vivienda solamente?</option>
                                                                        <option>….inquilino/arrendatario de la vivienda?</option>
                                                                        <option>… ocupante por pago de impuestos/expensas?</option>
                                                                        <option>…ocupante en relación de dependencia?</option>
                                                                        <option>… ocupante gratuito (con permiso)?</option>
                                                                        <option>… ocupante gratuito (sin permiso)?</option>
                                                                        <option>… está en sucesión?</option>
                                                                        <option>…. Otra situación? (especificar)</option>
                                                        </select>
                                                
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="">   </label>
                                                <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" disabled>
                                        </div>
                        </div>
                        
                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                        <label for="numero_semana">8. ¿Para cocinar, utiliza principalmente…..</label>
                                                        <select class="form-control" name="entrevista_realizada"  required>
                                                                        <option>… gas de red?</option>
                                                        <option>…. Gas de tubo/garrafa?</option>
                                                        <option>…. Kersone/leña/carbón?</option>
                                                        <option>…. Otra situación? (especificar)</option>
                                                        </select>
                                                
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="">   </label>
                                                <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" disabled>
                                        </div>
                        </div>
                            
                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                        <label for="numero_semana">9. ¿El baño es de….</label>
                                                        <select class="form-control" name="entrevista_realizada"  required>
                                                                <option>…. Uso exclusivo del hogar?</option>
                                                                <option>…. Compartido con otro/s hogar/es de la misma vivienda?</option>
                                                                <option>….Compartifo con otra/s vivienda/s?</option>
                                                                <option>…. No tiene baño (sólo para los que en Cuest. De Viv. Bloque IV, pregunta 8 dijeron "NO")</option>
                                                                
                                                        </select>
                                                
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label for="">   </label>
                                                <input type="text" class="form-control" id="trimestre" name="trimestre" placeholder="" disabled>
                                        </div>
                        </div>
                                   
                                  
                                    
                                    
                                 
                                   
                                    
                            </div>
                            
                      