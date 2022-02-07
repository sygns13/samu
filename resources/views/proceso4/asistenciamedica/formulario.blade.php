<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" style="padding-top:0px;">
         <center> <H3 class="page-head-line" style="color: #F00;border-bottom: 2px solid #F00;margin-bottom: 40px;"><b>
          ASISTENCIA MÉDICA EN FOCO<br>
         CENTRO REGULADOR SAMU - DIRES ANCASH</b>
         </H3>
         
         </center>
          </div>
        </div>

      </div>

  </div>

  <div class="row">
    <form v-on:submit.prevent="create">

      <div class="col-md-12" id="msj"></div>

      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>INFORMACION PRELIMINAR <br>
          @{{horafecha}}
          </strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>

            <div class="form-group col-md-2">
              <label for="txtcodigo">CODIGO:</label>
              <input type="input" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="Codigo"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.codigo"/>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>I. DATOS DEL PACIENTE:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>

            <div class="form-group col-md-4">
              <label for="cbutipo_documento_paciente_id">TIPO DE DOCUMENTO:</label>
              <select class="form-control" id="cbutipo_documento_paciente_id" name="cbutipo_documento_paciente_id" v-model="pacientes_asistencia.tipo_documento_paciente_id" @change="cambiarDoc">
                <option disabled value="0">Seleccione...</option>
                @foreach ($tipoDocumentos as $dato)
                  <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="txtnro_documento">N° DE DOCUMENTO:</label>
              <input type="input" class="form-control" id="txtnro_documento" name="txtnro_documento" placeholder="N° Documento"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="pacientes_asistencia.nro_documento" @change="cambiarDoc" />
            </div>

            <div class="form-group col-md-6">
              <label for="txtapellidos">APELLIDOS:</label>
              <input type="input" class="form-control" id="txtapellidos" name="txtapellidos" placeholder="Apellidos"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="pacientes_asistencia.apellidos"/>
            </div>

            <div class="form-group col-md-6">
              <label for="txtnombres">NOMBRES:</label>
              <input type="input" class="form-control" id="txtnombres" name="txtnombres" placeholder="Nombres"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="pacientes_asistencia.nombres"/>
            </div>


            <div class="form-group col-md-2">
              <label for="cbutipo_telefono">TIPO DE TELEFONO:</label>
              <select class="form-control" id="cbutipo_telefono" name="cbutipo_telefono" v-model="pacientes_asistencia.tipo_telefono">
                <option disabled value="0">Seleccione...</option>
                  <option value="1">Fijo</option> 
                  <option value="2">Celular</option> 
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="txttelefono">N° DE TELEFONO:</label>
              <input type="input" class="form-control" id="txttelefono" name="txttelefono" placeholder="N° de Telefono"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="pacientes_asistencia.telefono"/>
            </div>

            <div class="form-group col-md-2">
              <label for="cbugenero">GENERO:</label>
              <select class="form-control" id="cbugenero" name="cbugenero" v-model="pacientes_asistencia.genero">
                <option disabled value="0">Seleccione...</option>
                  <option value="M">Masculino</option> 
                  <option value="F">Femenino</option> 
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="cbutipo_edad">TIPO DE EDAD:</label>
              <select class="form-control" id="cbutipo_edad" name="cbutipo_edad" v-model="pacientes_asistencia.tipo_edad">
                <option disabled value="0">Seleccione...</option>
                  <option value="1">Años</option> 
                  <option value="2">Meses</option> 
                  <option value="3">Dias</option> 
                  <option value="4">Horas</option> 
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="txtedad">EDAD:</label>
              <input type="input" class="form-control" id="txtedad" name="txtedad" placeholder="Edad"
              maxlength="45" onkeypress="return soloNumeros(event);" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="pacientes_asistencia.edad"/>
            </div>

            <div class="form-group col-md-4">
              <label for="cbuseguro_id">TIPO DE SEGURO:</label>
              <select class="form-control" id="cbuseguro_id" name="cbuseguro_id" v-model="pacientes_asistencia.seguro_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($seguros as $dato)
                  <option value="{{$dato->id}}">{{$dato->descripcion}}</option> 
                @endforeach
              </select>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>II. ANTECEDENTES:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>


            <div class="form-group col-md-6">
              <label for="txtpatologia_previa">PATOLOGIA PREVIA:</label>
              <input type="input" class="form-control" id="txtpatologia_previa" name="txtpatologia_previa" placeholder="Patología Previa"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="antecedentes.patologia_previa" />
            </div>

            <div class="form-group col-md-6">
              <label for="txtmedicacion">MEDICACIÓN:</label>
              <input type="input" class="form-control" id="txtmedicacion" name="txtmedicacion" placeholder="Medicación"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="antecedentes.medicacion"/>
            </div>

            <div class="form-group col-md-6">
              <label for="txtalergias">ALERGIAS:</label>
              <input type="input" class="form-control" id="txtalergias" name="txtalergias" placeholder="Alergias"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="antecedentes.alergias"/>
            </div>

            <div class="form-group col-md-3">
              <label for="txtfur">F.U.R. (Día/Mes/Año):</label>
              <input type="date" class="form-control" id="txtfur" name="txtfur" placeholder="dd/mm/aaaa"
              maxlength="10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="antecedentes.fur">
            </div>

            <div class="form-group col-md-3">
              <label for="Formula" style="display:block;">FORMULA OBSTERICA: </label>
              <label style="display:inline">G</label>
              <input style="display:inline;width:25%;" type="number" size="2" id="txtgestacion" maxlength="2" required min="1" max="20" class="form-control " @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" placeholder="Gestacion" v-model="antecedentes.gestacion" />
          
              <label style="display:inline">P</label>
              <input style="display:inline;width:25%;" type="number" size="2" id="txtPartos" maxlength="2" required min="1" max="20" class="form-control " @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" placeholder="Parto" v-model="antecedentes.parto" />
          
              <label style="display:inline">A</label>
              <input style="display:inline;width:25%;" type="number" size="2" id="txtAborto" maxlength="2" required min="1" max="20" class="form-control " @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" placeholder="Aborto" v-model="antecedentes.aborto"/>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>III. ENFERMEDAD ACTUAL:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>


            <div class="form-group col-md-6">
              <label for="txttiempo">TIEMPO ENFERMEDAD:</label>
              <input type="input" class="form-control" id="txttiempo" name="txttiempo" placeholder="Patología Previa"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="enfermedad_actuals.tiempo" />
            </div>

            <div class="form-group col-md-3">
              <label for="cbuinicio">INICIO:</label>
              <select class="form-control" id="cbuinicio" v-model="enfermedad_actuals.inicio">
                 <option value="0">NO APLICA</option>
                 <option value="INSIDIOSO">INSIDIOSO</option>
                 <option value="BRUSCO">BRUSCO</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cbucurso">CURSO:</label>
              <select class="form-control" id="cbucurso" v-model="enfermedad_actuals.curso">
                <option value="0">NO APLICA</option>
                <option value="ESTACIONARIO">ESTACIONARIO</option>
                <option value="PROGRESIVO">PROGRESIVO</option>
              </select>
            </div>

            <div class="form-group col-md-12">
              <label for="txtsintomas">EVENTO Y SINTOMAS:</label>
            <textarea class="form-control" rows="3" maxlenght="5000" placeholder="EVENTO Y SINTOMAS" id="txtsintomas" v-model="enfermedad_actuals.sintomas"></textarea>
            </div>

          </div>
        </div>
      </div>



      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>IV. RELATO DEL EVENTO:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>


            <div class="form-group col-md-12">
              <label for="txtrelato_evento">RELATO DEL EVENTO:</label>
            <textarea class="form-control" rows="5"   placeholder="Relato del Evento" id="txtrelato_evento" v-model="fillobject.relato_evento"></textarea>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>V. EXAMEN  FÍSICO:</strong> 
       </div>
      </div>


      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>
            <div class="form-group col-md-1">
              <label for="txtfc">FC:</label>
              <input type="input" class="form-control" id="txtfc" v-model='examen_preferencials.fc' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
          
           <div class="form-group col-md-1">
              <label for="txtfr">FR:</label>
              <input type="input" class="form-control" id="txtfr" v-model='examen_preferencials.fr' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
            <div class="form-group col-md-1">
              <label for="txtpa">P/A:</label>
              <input type="input" class="form-control" id="txtpa" v-model='examen_preferencials.pa' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
          
            <div class="form-group col-md-2">
              <label for="txttemperatura">100/80 Tº:</label>
              <input type="input" class="form-control" id="txttemperatura" v-model='examen_preferencials.temperatura' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
            
          <div class="form-group col-md-1">
              <label for="txtsaturacion">SAT O2:</label>
              <input type="input" class="form-control" id="txtsaturacion" v-model='examen_preferencials.saturacion' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
          
          <div class="form-group col-md-1">
              <label for="txtglicemia">GLICEMIA:</label>
              <input type="input" class="form-control" id="txtglicemia" v-model='examen_preferencials.glicemia' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
            </div>
          
          
          
             <div class="form-group col-md-5">
              <label for="txtglasgow" style="display:block;">GLASGOW:</label>
              <label style="display:inline;">R.Ocular:</label><input type="input" class="form-control" id="txtocular" style="display:inline; width:18%;" v-model='examen_preferencials.ocular' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
              <label style="display:inline;">R.Verbal:</label><input type="input" class="form-control" id="txtverbal" style="display:inline; width:18%;" v-model='examen_preferencials.verbal' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
              <label style="display:inline;">R.Motora:</label><input type="input" class="form-control" id="txtmotora" style="display:inline; width:18%;" v-model='examen_preferencials.motora' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          
            </div>
          
            <div class="form-group col-md-5">
                                                <label for="exampleInputEmail1">PIEL Y MUCOSAS:</label>
                                                <div class="checkbox">
                                                <label>
                                                  <input type="checkbox" id="chepiel_check1" v-model='examen_preferencials.piel_check1'/>
                                                  Normal
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="chepiel_check2" v-model='examen_preferencials.piel_check2' />
                                                  Palidez
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="chepiel_check3" v-model='examen_preferencials.piel_check3'/>
                                                  Cianosis
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="chepiel_check4" v-model='examen_preferencials.piel_check4'/>
                                                  Signo de continuidad
                                                </label>
                                              </div>
                                              </div>
          
           <div class="form-group col-md-12">
                                                <label for="cabeza">CABEZA Y CUELLO:</label>
                                                <div class="checkbox">
                                                <div class="form-group col-md-1" style="display:inline;">
                                                  <input type="checkbox" id="checabeza_check1" v-model='examen_preferencials.cabeza_check1'/>
                                                  Normal
                                                </div>
                                                    <div class="form-group col-md-3" style="display:inline;">
                                                    
                                                  <input type="number" size="2" placeholder="mm" maxlength="3" required min="1" max="99" class="form-control" id="txtpupilas" style="display:inline;width:40%;" v-model='examen_preferencials.pupilas' /> 
                                                  <label style="display:inline: ">Pupilas (mm)</label> </div>
                                                 
                                               
                                                <label>
                                                  <input type="checkbox"  id="checabeza_check2" v-model='examen_preferencials.cabeza_check2'/>
                                                  Anisocoria
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checabeza_check3" v-model='examen_preferencials.cabeza_check3'/>
                                                  Mioticas
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checabeza_check4" v-model='examen_preferencials.cabeza_check4'/>
                                                  Midriaticas
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checabeza_check5" v-model='examen_preferencials.cabeza_check5'/>
                                                  Foto reactivas
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checabeza_check6" v-model='examen_preferencials.cabeza_check6'/>
                                                   Ingurgitación Yugular
                                                </label>
                                              </div>
                                              </div>
          
          <div class="form-group col-md-12">
                                                <label for="torax">TORAX Y PULMONES:</label>
                                                <div class="checkbox">
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check1" v-model='examen_preferencials.torax_check1'/>
                                                  Normal
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check2"  v-model='examen_preferencials.torax_check2'/>
                                                  Torax Inestable
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check3" v-model='examen_preferencials.torax_check3'/>
                                                  Respiración Abdominal
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check4" v-model='examen_preferencials.torax_check4'/>
                                                  Roncantes
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check5" v-model='examen_preferencials.torax_check5'/>
                                                  Sibilantes
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="chetorax_check6" v-model='examen_preferencials.torax_check6'/>
                                                  Crepitantes
                                                </label>
                                              </div>
                                              </div>
          
          <div class="form-group col-md-12">
                                                <label for="cardiovascular" style="display:block; ">CARDIOVASCULAR:</label>
                                                <div class="checkbox"style="display:inline; float:left;">
                                                <label>
                                                  <input type="checkbox"  id="checardiovascular_check1" v-model='examen_preferencials.cardiovascular_check1'/>
                                                  Normal
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checardiovascular_check2"  v-model='examen_preferencials.cardiovascular_check2'/>
                                                  Arritmia
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checardiovascular_check3" v-model='examen_preferencials.cardiovascular_check3'/>
                                                  Soplos
                                                </label>
                                                <label>
                                                  <input type="checkbox"  id="checardiovascular_check4" v-model='examen_preferencials.cardiovascular_check4'/>
                                                  Frote pericardico
                                                </label>
                                                <label>
                                                  
                                                  Observaciones:
                                                </label>
                                                </div>
                                                <div class="form-group col-md-6" style="display:inline; ">
                                                  <input type="input" class="form-control" id="txtcardiovascular_obs" v-model='examen_preferencials.cardiovascular_obs' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
                                               
                                              </div>
                                                
                                              
                                              </div>
          
          <div class="form-group col-md-12">
                                                <label for="exampleInputEmail1" style="display:block; ">ABDOMEN:</label>
                                                <div class="checkbox"style="display:inline; float:left; ">
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check1" v-model='examen_preferencials.abdomen_check1'/>
                                                  Normal
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check2"  v-model='examen_preferencials.abdomen_check2'/>
                                                  Dolor
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check3" v-model='examen_preferencials.abdomen_check3'/>
                                                  Rigidez abd
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check4" v-model='examen_preferencials.abdomen_check4'/>
                                                  Blumberg 
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check5" v-model='examen_preferencials.abdomen_check5'/>
                                                  Mac. Burney
                                                </label>
                                                <label>
                                                  <input type="checkbox" id="cheabdomen_check6" v-model='examen_preferencials.abdomen_check6'/>
                                                  Murphy
                                                </label>
                                                <label>
                                                  
                                                  Otros:
                                                </label>
                                                </div>
                                                <div class="form-group col-md-6" style="display:inline; ">
                                                  <input type="input" class="form-control" id="txtabdomen_otros" v-model='examen_preferencials.abdomen_otros' @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
                                               
                                              </div>
                                                
                                              
                                              </div>

          </div>
        </div>
      </div>



      <div class="col-md-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="    background-color: rgb(255, 204, 102); color:black;">
                            <h4 class="panel-title">
                                <a href="#" @click.prevent="esGestante()">...::: Solo en caso de Gestantes :::... (Hacer Click )</a>
                            </h4>
                        </div>
                        <div  v-if="fillobject.es_gestante == '1'">
                            <div class="panel-body">
                              
<div class="col-md-12" id="msj4G"></div> 
<div class="form-group col-md-1">
<label for="txtau">AU:</label>
<input type="number" size="2" placeholder="cm" maxlength="2" required min="8" max="50" class="form-control" id="txtau" v-model='gestantes.au'  /> 
</div>

<div class="form-group col-md-1">
<label for="txtfcf">FCF:</label>
<input type="number" size="2" placeholder="lm" maxlength="3" required min="120" max="160" class="form-control" id="txtfcf" v-model='gestantes.fcf' /> 
</div>

<div class="form-group col-md-2">
                            <label for="cbumf">MF:</label>
                            <select class="form-control" id="cbumf" v-model='gestantes.mf' >
                               <option value="0">NO APLICA</option>
<option value="+">+</option>
<option value="++">++</option>
<option value="+++">+++</option>
                            </select>
                          </div>

<div class="form-group col-md-2">
                            <label for="cbusituacion">SITUACION:</label>
                            <select class="form-control" id="cbusituacion" v-model='gestantes.situacion'>
                               <option value="0">NO APLICA</option>
<option value="LONGITUDINAL">LONGITUDINAL</option>
<option value="TRANSVERSO">TRANSVERSO</option>
<option value="DIAGONAL">DIAGONAL</option>
                            </select>
                          </div>

<div class="form-group col-md-2">
                            <label for="cbupresentacion">PRESENTACION:</label>
                            <select class="form-control" id="cbupresentacion" v-model='gestantes.presentacion'>
                               <option value="0">NO APLICA</option>
<option value="CEFALICO">CEFALICO</option>
<option value="PODALICO">PODALICO</option>
                            </select>
                          </div>

<div class="form-group col-md-2">
                            <label for="cbuposicion">POSICION:</label>
                            <select class="form-control" id="cbuposicion" v-model='gestantes.posicion'>
                               <option value="0">NO APLICA</option>
<option value="DERECHO">DERECHO</option>
<option value="IZQUIERDO">IZQUIERDO</option>
                            </select>
                          </div>

<div class="form-group col-md-2">
                            <label for="cbumo">MO:</label>
                            <select class="form-control" id="cbumo" v-model='gestantes.mo'>
                               <option value="0">NO APLICA</option>
<option value="INTEGRAS">INTEGRAS</option>
<option value="ROTAS">ROTAS</option>
                            </select>
                          </div>



<div class="form-group col-md-1">
<label for="txtdu">DU: D:</label>
<input type="number" size="2" placeholder="sg" maxlength="2" required min="1" max="30" class="form-control" id="txtdu" v-model='gestantes.du'  /> 
</div>


<div class="form-group col-md-2">
                            <label for="cbui">I:</label>
                            <select class="form-control" id="cbui" v-model='gestantes.i'>
                               <option value="0">NO APLICA</option>
<option value="+">+</option>
<option value="++">++</option>
<option value="+++">+++</option>
                            </select>
                          </div>

<div class="form-group col-md-1">
<label for="txtf">F:</label>
<input type="number" size="2" placeholder="sg" maxlength="2" required min="1" max="30" class="form-control" id="txtf" v-model='gestantes.f'  /> 
</div>

<div class="form-group col-md-2">
<label for="txtdilatacion">TV: Dilatacón:</label>
<input type="number" size="2" placeholder="cm" maxlength="2" required min="1" max="10" class="form-control" id="txtdilatacion" v-model='gestantes.dilatacion'   /> 
</div>

<div class="form-group col-md-1">
<label for="txtb">B:</label>
<input type="number" size="2" placeholder="%" maxlength="3" required min="1" max="100" class="form-control" id="txtb" v-model='gestantes.n'  /> 
</div>


<div class="form-group col-md-2">
                            <label for="cbuap">AP:</label>
                            <select class="form-control" id="cbuap" v-model='gestantes.ap'>
                               <option value="0">NO APLICA</option>
<option value="+4">+4</option>
<option value="+3">+3</option>
<option value="+2">+2</option>
<option value="+1">+1</option>
<option value="0">0</option>
<option value="-1">-1</option>
<option value="-2">-2</option>
<option value="-3">-3</option>
<option value="-4">-4</option>
<option value="+">+</option>
<option value="++">++</option>
<option value="+++">+++</option>
                            </select>
                          </div>


<div class="form-group col-md-2">
<label for="exampleInputEmail1">PLA:</label>
<div>
<input type="radio" name="PLA" id="radioplaSi" value="Si" v-model='gestantes.pla' /> Si
<input type="radio" name="PLA" id="radioplaNo" value="No" v-model='gestantes.pla' /> No
</div>
</div>

<div class="form-group col-md-6">
                          <label for="genitourinario" style="display:block; ">GENITOURINARIO:</label>
                          <div class="checkbox"style="display:inline; float:left; ">
                          <label>
                            <input type="checkbox" v-model='gestantes.genitourinario_check1' id="chegenitourinario_check1"/>
                            Normal
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.genitourinario_check2' id="chegenitourinario_check2" />
                            Globo Vesical 
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.genitourinario_check3' id="chegenitourinario_check3"/>
                            Ginecorragia
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.genitourinario_check4' id="chegenitourinario_check4"/>
                            PPL  
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.genitourinario_check5' id="chegenitourinario_check5"/>
                            PRU
                          </label>
                          
                          
                          </div>
                        
                        </div>

<div class="form-group col-md-6">
                          <label for="exampleInputEmail1" style="display:block; ">LOCOMOTOR:</label>
                          <div class="checkbox"style="display:inline; float:left; ">
                          <label>
                            <input type="checkbox" id="chelocomotor_check1" v-model='gestantes.locomotor_check1'/>
                            Normal
                          </label>
                          <label>
                            <input type="checkbox" id="chelocomotor_check2" v-model='gestantes.locomotor_check2' />
                            Asimetria
                          </label>
                          <label>
                            <input type="checkbox" id="chelocomotor_check3" v-model='gestantes.locomotor_check3'/>
                            Hipotonia muscular:
                          </label>
                          
                         
                          
                          
                          </div>
                        
                        </div>

<div class="form-group col-md-12">
                          <label for="exampleInputEmail1" style="display:block; ">NEUROLOGICO:</label>
                          <div class="checkbox"style="display:inline; float:left; ">
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check1' id="cheneurologico_check1"/>
                            Normal
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check2' id="cheneurologico_check2" />
                            Parecia
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check3' id="cheneurologico_check3"/>
                            Plejia
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check4' id="cheneurologico_check4"/>
                            Sg. Babinsky
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check5' id="cheneurologico_check5"/>
                            Sg. Meningeos
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check6' id="cheneurologico_check6"/>
                            Romberg 
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check7' id="cheneurologico_check7"/>
                            Hiperreflexia
                          </label>
                          <label>
                            <input type="checkbox" v-model='gestantes.neurologico_check8' id="cheneurologico_check8"/>
                            Hiporreflexia
                          </label>

                          
                          </div>
                        
                        </div>



                           <div class="form-group col-md-12">
<textarea class="form-control" rows="3" maxlenght="5000" placeholder="OTROS - EXAMEN PREFERENCIAL" id="txtOtrosExamen"></textarea>
</div>


                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            
        </div>
    </div>


      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>VI. MECANISMOS DE LESIÓN:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>


            <div class="form-group col-md-3">
              <label for="cbutipo_accidente">Tipo de accidente:</label>
              <select class="form-control" id="cbutipo_accidente" v-model="mecanismos_lesions.tipo_accidente">
                   <option value="0">NO APLICA</option>
                   <option value="CHOQUE">CHOQUE</option>
                   <option value="ATROPELLO">ATROPELLO</option>
                   <option value="VOLCADURA">VOLCADURA</option>
                   <option value="CAIDA PASAJERO">CAIDA PASAJERO</option>
                   <option value="OTRO">OTRO</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cbuvehiculo">Vehículo:</label>
              <select class="form-control" id="cbuvehiculo" v-model="mecanismos_lesions.vehiculo">
                   <option value="0">NO APLICA</option>
                   <option value="CAMIONETA">CAMIONETA</option>
                   <option value="VOLQUETE">VOLQUETE</option>
                   <option value="CAMION">CAMION</option>
                   <option value="BUS">BUS</option>
                   <option value="MOTOCICLETA">MOTOCICLETA</option>
                   <option value="CUATRIMOTO">CUATRIMOTO</option>
                   <option value="OTRO">OTRO</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cbuimpacto">L. Impacto:</label>
              <select class="form-control" id="cbuimpacto" v-model="mecanismos_lesions.impacto">
                   <option value="0">NO APLICA</option>
                   <option value="ANTERIOR">ANTERIOR</option>
                   <option value="POSTERIOR">POSTERIOR</option>
                   <option value="LATERAL">LATERAL</option>
                   <option value="VOLCADURA">VOLCADURA</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="cbupersona_afectada">Persona Afectada:</label>
              <select class="form-control" id="cbupersona_afectada" v-model="mecanismos_lesions.persona_afectada">
                   <option value="0">NO APLICA</option>
                   <option value="PILOTO">PILOTO</option>
                   <option value="COPILOTO">COPILOTO</option>
                   <option value="PASAJERO">PASAJERO</option>
                   <option value="TRANSEUNTE">TRANSEUNTE</option> 
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="mecanismos">(Mecanismos de Protección)</label>
            <div class="checkbox">
            <label>
              <input type="checkbox" id="cheproteccion_check1" v-model="mecanismos_lesions.proteccion_check1"/>
              Cinturon de Seguridad
            </label>
            <label>
              <input type="checkbox" id="cheproteccion_check2"  v-model="mecanismos_lesions.proteccion_check2"/>
              Bolsa de Aire
            </label>
            <label>
              <input type="checkbox" id="cheproteccion_check3" v-model="mecanismos_lesions.proteccion_check3"/>
              Casco
            </label>
          </div>
          </div>

          <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Situación</label>
            <div class="checkbox">
            <label>
              <input type="checkbox" id="chesituacion_check1"  v-model="mecanismos_lesions.situacion_check1"/>
              Atrapado
            </label>
            <label>
              <input type="checkbox" id="chesituacion_check2"  v-model="mecanismos_lesions.situacion_check2"/>
              Aplastamiento
            </label>
            <label>
              <input type="checkbox" id="chesituacion_check3" v-model="mecanismos_lesions.situacion_check3"/>
              Eyectado
            </label>
          </div>
          </div>

           <div class="form-group col-md-2">
              <label for="cbuagrecion">AGRESION:</label>
              <select class="form-control" id="cbuagrecion" v-model="mecanismos_lesions.agrecion">
                  <option value="0">NO APLICA</option>
                  <option value="ARMA BLANCA">ARMA BLANCA</option>
                  <option value="ARMA DE FUEGO">ARMA DE FUEGO</option>
                  <option value="OTROS">OTROS</option>
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="cheahogamiento">AHOGAMIENTO:</label>
              <div>
              <input type="radio" name="ahogo" id="raahogamientosi" value="si" v-model="mecanismos_lesions.ahogamiento"  /> Si
              <input type="radio" name="ahogo" id="raahogamientono" value="No" v-model="mecanismos_lesions.ahogamiento" /> NO
              </div>
            </div>

            <div class="col-md-12">
      <div class="form-group col-md-2" >
          <label for="txtcaida_altura">CAIDA DE ALTURA:</label>
          <input type="number" size="2" placeholder="Metros" maxlength="3" required min="1" max="50" class="form-control" id="txtcaida_altura" v-model="mecanismos_lesions.caida_altura"/>
        </div>
        <div class="form-group col-md-2" >
          <label for="txtquemaduras">QUEMADURAS:</label>
          <input type="number" size="2" placeholder="%" maxlength="3" required min="1" max="100" class="form-control" id="txtquemaduras" v-model="mecanismos_lesions.quemaduras"/>
        </div>

        <div class="form-group col-md-2">
              <label for="cbusc_tipo">% SC Tipo:</label>
              <select class="form-control" id="cbusc_tipo" v-model="mecanismos_lesions.sc_tipo">
                  <option value="0">NO APLICA</option>
                   <option value="CALOR">CALOR</option>
                   <option value="FRIO">FRIO</option>
                   <option value="ELECTRICA">ELECTRICA</option>
                   <option value="QUIMICA">QUIMICA</option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="grado">Grado:</label>
            <div class="checkbox">
            <label>
              <input type="checkbox"  id="chegrado_check1" v-model="mecanismos_lesions.grado_check1"/>
              Primer
            </label>
            <label>
              <input type="checkbox"  id="chegrado_check2"  v-model="mecanismos_lesions.grado_check2"/>
              Segundo
            </label>
            <label>
              <input type="checkbox"  id="chegrado_check3" v-model="mecanismos_lesions.grado_check3"/>
              Tercero
            </label>
            <label>
              <input type="checkbox"  id="chegrado_check4" v-model="mecanismos_lesions.grado_check4"/>
              Cuarto
            </label>
          </div>
          </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>VII. DIAGNÓSTICO:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>


          <div class="form-group col-md-10">
            <label for="txtdescripcion1">DIAGNOSTICO 1:</label>
            <input type="input" class="form-control" id="txtdescripcion1" placeholder="Buscar CIE" disabled="true" v-model="diagnosticos1.descripcion" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          </div>
           <div class="form-group col-md-2">
            <label for="txtcie101">CIE10:</label>
            <input type="input" class="form-control" id="txtcie101" placeholder="CIE10" maxlength="4" v-model="diagnosticos1.cie10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" @change="buscardiagnosticoscie1" />
          </div>
        
          <div class="form-group col-md-10">
            <label for="txtdescripcion2">DIAGNOSTICO 2:</label>
            <input type="input" class="form-control" id="txttxtdescripcion2" placeholder="Buscar CIE" disabled="true" v-model="diagnosticos2.descripcion" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false"  />
          </div>
           <div class="form-group col-md-2">
            <label for="txtcie102" style="color:white;">CIE10: </label>
            <input type="input" class="form-control" id="txtcie102" placeholder="CIE10" maxlength="4" v-model="diagnosticos2.cie10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" @change="buscardiagnosticoscie2" />
          </div>
        
          <div class="form-group col-md-10">
            <label for="txtdescripcion3">DIAGNOSTICO 3:</label>
            <input type="input" class="form-control" id="txtdescripcion3" placeholder="Buscar CIE" disabled="true" v-model="diagnosticos3.descripcion" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          </div>
           <div class="form-group col-md-2">
            <label for="txtcie103" style="color:white;">CIE10: </label>
            <input type="input" class="form-control" id="txtcie103" placeholder="CIE10" maxlength="4" v-model="diagnosticos3.cie10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" @change="buscardiagnosticoscie3" />
          </div>
        
          <div class="form-group col-md-10">
            <label for="txtdescripcion4">DIAGNOSTICO 4:</label>
            <input type="input" class="form-control" id="txtdescripcion4" placeholder="Buscar CIE" disabled="true" v-model="diagnosticos4.descripcion" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          </div>
           <div class="form-group col-md-2">
            <label for="txtcie104" style="color:white;">CIE10: </label>
            <input type="input" class="form-control" id="txtcie104" placeholder="CIE10" maxlength="4" v-model="diagnosticos4.cie10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" @change="buscardiagnosticoscie4" />
          </div>

        </div>
      </div>
    </div>



    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>VIII. PROCEDIMIENTO Y TRATAMIENTO:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>

          <div class="form-group col-md-3">
            <label for="cbuoxigenoterapia">OXIGENOTERAPIA: Con:</label>
            <select class="form-control" id="cbuoxigenoterapia" v-model="tratamientos.oxigenoterapia">
                <option value="0">NO APLICA</option>
                <option value="CBN">CBN</option>
                <option value="MASCARA SIMPLE">MASCARA SIMPLE</option>
                <option value="MASCARA CON RESERVORIO">MASCARA CON RESERVORIO</option>
                <option value="DISPOSITIVO DE VENTURI">DISPOSITIVO DE VENTURI</option>
            </select>
          </div>

        <div class="form-group col-md-9">
          <label for="txtflujo">Flujo:</label>
          <input type="input" class="form-control" id="txtflujo" placeholder="FLUJO" v-model="tratamientos.flujo" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
        </div>

        <div class="form-group col-md-3">
            <label for="cbufluidoterapia">FLUIDOTERAPIA: Con:</label>
            <select class="form-control" id="cbufluidoterapia" v-model="tratamientos.fluidoterapia">
               <option value="0">NO APLICA</option>
                 <option value="DEXTROSA AL 5%">DEXTROSA AL 5%</option>
                 <option value="CLORURO SODIO N.a 0.9%">CLORURO SODIO N.a 0.9%</option>
                 <option value="SPE">SPE</option>
            </select>
          </div>

        <div class="form-group col-md-9">
          <label for="txtfluidoterapia_a">A:</label>
          <input type="input" class="form-control" id="txtfluidoterapia_a" placeholder="A" v-model="tratamientos.fluidoterapia_a" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
        </div>

      <div class="form-group col-md-12">
        <label for="txtmedicamentos">MEDICAMENTOS-DOSIS:</label>
        <textarea class="form-control" rows="3"  placeholder="DESCRIPCION MEDICAMENTOS-DOSIS:" id="txtmedicamentos" v-model="tratamientos.medicamentos"></textarea>
      </div>


      <div class="form-group col-md-3">
          <label for="txtvia">VIA:</label>
          <select class="form-control" id="txtvia" v-model="tratamientos.via">
              <option value="0">NO APLICA</option>
              <option value="EV">EV</option>
              <option value="IM">IM</option>
              <option value="SC">SC</option>
              <option value="SL">SL</option>
              <option value="VO">VO</option>
              <option value="ET">ET</option>
          </select>
        </div>


        <div class="form-group col-md-2">
          <label for="txthora">HORA:</label>
          <input type="time" class="form-control" id="txthora" name="txthora" placeholder="00:00:00"
          maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="tratamientos.hora">
        </div>

        <div class="form-group col-md-12" style="margin-bottom: 0px;">
          <label for="procedimientos">PROCEDIMIENTOS:</label>
        </div>

        <div class="form-group col-md-12">
                                      
          <div class="checkbox"style="display:inline; float:left; ">
          <label>
            <input type="checkbox" id="cheproc_check1" v-model="procedimientos.proc_check1"/>
            INMOVILIZACIÓN
          </label>
          <label>
            <input type="checkbox" id="cheproc_check2" v-model="procedimientos.proc_check2"/>
            CURACIÓN
          </label>
          <label>
            <input type="checkbox" id="cheproc_check3" v-model="procedimientos.proc_check3" />
            COLLAR CERVICAL
          </label>
          <label>
            <input type="checkbox" id="cheproc_check4" v-model="procedimientos.proc_check4"/>
            SUTURA
          </label>
          <label>
            <input type="checkbox" id="cheproc_check5" v-model="procedimientos.proc_check5"/>
            TORNIQUETE
          </label>
          <label>
            <input type="checkbox" id="cheproc_check6" v-model="procedimientos.proc_check6"/>
            I. ENDOTRAQUEAL
          </label>
          <label>
            <input type="checkbox" id="cheproc_check7" v-model="procedimientos.proc_check7"/>
            HEMOSTASIA 
          </label>

          </div>
        
        </div>

<div class="form-group col-md-12">

  
          
          <div class="checkbox"style="display:inline; float:left; ">
          <label>
            <input type="checkbox" id="cheproc_check8" v-model="procedimientos.proc_check8"/>
            ASPIRACIÓN SECRECIÓN
          </label>
          <label>
            <input type="checkbox" id="cheproc_check9" v-model="procedimientos.proc_check9"/>
            PARTO
          </label>
          <label>
            <input type="checkbox" id="cheproc_check10" v-model="procedimientos.proc_check10" />
            NEBULIZACIÓN
          </label>
          <label>
            <input type="checkbox" id="cheproc_check11" v-model="procedimientos.proc_check11"/>
            V. MECANICA
          </label>
          <label>
            <input type="checkbox" id="cheproc_check12" v-model="procedimientos.proc_check12"/>
            DESFIBRILACIÓN
          </label>
          <label>
            <input type="checkbox" id="cheproc_check13" v-model="procedimientos.proc_check13"/>
            LAVADO GASTRICO
          </label>
          <label>
            <input type="checkbox" id="cheproc_check14" v-model="procedimientos.proc_check14"/>
            SONDA VESICAL
          </label>

          <label>
            <input type="checkbox" id="cheproc_check15" v-model="procedimientos.proc_check15"/>
             R.C.P
          </label>

          </div>
        
        </div>




        </div>
      </div>
    </div>



    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>IX. OCURRENCIAS DURANTE LA ATENCIÓN:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>


          <div class="form-group col-md-12">
            <label for="txtocurrencias_atencion">RELATO DEL EVENTO:</label>
          <textarea class="form-control" rows="5"   placeholder="Ocurrencias durante la atención" id="txtocurrencias_atencion" v-model="fillobject.relato_evento" v-model="fillobject.ocurrencias_atencion"></textarea>
          </div>

        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>X. RESPONSABLES DE LA ATENCIÓN:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>

          <div class="form-group col-md-6">
            <label for="cbupersonal_medico_id">MÉDICO:</label>
            <select class="form-control" id="cbupersonal_medico_id" name="cbupersonal_medico_id" v-model="fillobject.personal_medico_id">
              <option disabled value="0">Seleccione...</option>
              @foreach ($medicos as $dato)
                <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="cbupersonal_enfermera_id">ENFERMERA:</label>
            <select class="form-control" id="cbupersonal_enfermera_id" name="cbupersonal_enfermera_id" v-model="fillobject.personal_enfermera_id">
              <option disabled value="0">Seleccione...</option>
              @foreach ($enfermeras as $dato)
                <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
              @endforeach
            </select>
          </div>

        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>XI. ESTABLECIMIENTO DE SALUD DESTINO:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>

          <div class="form-group col-md-4">
            <label for="cburequirio_traslado">REQUIRIÓ TRASLADO A UNA IPRESS SALUD:</label>
            <select class="form-control" id="cburequirio_traslado" name="cburequirio_traslado" v-model="fillobject.requirio_traslado">
              <option value="1">SI</option>
              <option value="0">NO</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="txthora_llegada">HORA DE LLEGADA AL ESTABLECIMIENTO:</label>
            <input type="time" class="form-control" id="txthora_llegada" name="txthora_llegada" placeholder="00:00:00"
            maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="establecimiento_destinos.hora_llegada">
          </div>

          <div class="form-group col-md-4">
            <label for="txtestablecimiento">ESTABLECIMIENTO DE SALUD:</label>
            <select class="form-control" id="txtestablecimiento" v-model="establecimiento_destinos.establecimiento">
               <option value="0">NO APLICA</option>
               <option value="H.A. V.R.G.">H.A. V.R.G.</option>
               <option value="CLINICA SAN PABLO">CLINICA SAN PABLO</option>
               <option value="ESSALUD III HUARAZ">ESSALUD III HUARAZ</option>
               <option value="H.A. CASMA">H.A. CASMA</option>
               <option value="H.A. HUARMEY">H.A. HUARMEY</option>
               <option value="C.S. YUGOSLAVIA">C.S. YUGOSLAVIA</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="txtcategoria">CATEGORÍA:</label>
            <input type="input" class="form-control" id="txtcategoria" placeholder="Categoría" v-model="establecimiento_destinos.categoria" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          </div>

          <div class="form-group col-md-4">
            <label for="txthora_recepcion">HORA DE RECEPCIÓN DEL PACIENTE:</label>
            <input type="time" class="form-control" id="txthora_recepcion" name="txthora_recepcion" placeholder="00:00:00"
            maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="establecimiento_destinos.hora_recepcion">
          </div>

          <div class="form-group col-md-4">
            <label for="txtprofesional_acepta">PROFESIONAL QUE ACEPTA:</label>
            <input type="input" class="form-control" id="txtprofesional_acepta" placeholder="Profesional que Acepta" v-model="establecimiento_destinos.profesional_acepta" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" />
          </div>

          <div class="form-group col-md-4">
            <label for="txthora_salida">HORA DE SALIDA DEL ESTABLECIMIENTO:</label>
            <input type="time" class="form-control" id="txthora_salida" name="txthora_salida" placeholder="00:00:00"
            maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="establecimiento_destinos.hora_salida">
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>XII. RESPONSABLE DEL PACIENTE:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>

          <div class="form-group col-md-4">
            <label for="cbutipo_documento_id_r">TIPO DE DOCUMENTO:</label>
            <select class="form-control" id="cbutipo_documento_id_r" name="cbutipo_documento_id_r" v-model="responsables.tipo_documento_id" >
              <option disabled value="0">Seleccione...</option>
              @foreach ($tipoDocumentos as $dato)
                <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="txtnro_documentoR">N° DE DOCUMENTO:</label>
            <input type="input" class="form-control" id="txtnro_documentoR" name="txtnro_documentoR" placeholder="N° Documento"
            maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="responsables.nro_documento" />
          </div>

          <div class="form-group col-md-6">
            <label for="txtapellidos_r">APELLIDOS:</label>
            <input type="input" class="form-control" id="txtapellidos_r" name="txtapellidos_r" placeholder="Apellidos"
            maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="responsables.apellidos"/>
          </div>

          <div class="form-group col-md-6">
            <label for="txtnombres_r">NOMBRES:</label>
            <input type="input" class="form-control" id="txtnombres_r" name="txtnombres_r" placeholder="Nombres"
            maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="responsables.nombres"/>
          </div>

          <div class="form-group col-md-4">
            <label for="cbuparentesco">PARENTESCO:</label>
            <select class="form-control" id="cbuparentesco" v-model="responsables.parentesco">
              <option value="NO IDENTIFICADO">NO IDENTIFICADO</option>
              <option value="PAPA">PAPA</option>
              <option value="MAMA">MAMA</option>
              <option value="TIO(A)">TIO(A)</option>
              <option value="HIJO(A)">HIJO(A)</option>
              <option value="HERMANO(A)">HERMANO(A)</option>
              <option value="ESPOSO(A)">ESPOSO(A)</option>
              <option value="AMIGO(A)">AMIGO(A)</option>
              <option value="ABUELO(A)">ABUELO(A)</option>
              <option value="NIETO(A)">NIETO(A)</option>
              <option value="SUEGRO(A)">SUEGRO(A)</option>
              <option value="CUNADO(A)">CUNADO(A)</option>
              <option value="PRIMO(A)">PRIMO(A)</option>
              <option value="SOBRINO(A)">SOBRINO(A)</option>
              <option value="TRANSEUNTE">TRANSEUNTE</option>
              <option value="PACIENTE">PACIENTE</option>
              <option value="OTROS">OTROS</option>
            </select>
          </div> 


          <div class="form-group col-md-12">
            <label for="txtpertenencias_paciente">PERTENENCIAS DEL PACIENTE:</label>
            <input type="input" class="form-control" id="txtpertenencias_paciente" name="txtpertenencias_paciente" placeholder="PERTENENCIAS DEL PACIENTE"
            maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="responsables.pertenencias_paciente"/>
          </div>



        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
        <strong>XIII. HISTORIA DIGITAL:</strong> 
     </div>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-12" id="msj2"></div>

          <div class="col-md-12" style="padding-top: 15px;">

            <div class="form-group">
              <label for="txtnombrefile" class="col-sm-2 control-label">Documento Adjunto: (pdf, docx, xlsx, pptx)</label>
          
              <div class="col-sm-10">
                 <input v-if="uploadReady" name="archivo2" type="file" id="archivo2" class="archivo form-control" @change="getArchivo" 
          accept=".pdf, .doc, .docx, .xls, .xlsx, ppt, .pptx, .PDF, .DOC, .DOCX, .XLS, .XLSX, .PPT, .PTTX"/>
          
          
               </div>
            </div>
          
          </div>

          


        </div>
      </div>
    </div>



      <div class="col-md-12">

        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204);line-height: 1.4; margin-bottom: 40px;">
            <br>
        </div>
      </div>


      <div class="col-md-12">

        <button type="submit"class="btn btn-lg btn-primary" id="btnGuardar"><i class="fa fa-save "></i> Registrar</button>
      </div>


      <div class="col-md-12">

        <div class="sk-circle" v-show="divloaderNuevo">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>

      </div>

    </form>

  </div>
</div>