<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" style="padding-top:0px;">
         <center> <H3 class="page-head-line" style="color: #F00;border-bottom: 2px solid #F00;margin-bottom: 40px;"><b>
         CONSEJERIA MEDICA TELEFONICA DE URGENCIA<br>
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
          <strong>I. DERIVACION DE LLAMADA:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>

            <div class="form-group col-md-2">
              <label for="txtcodigo">CODIGO DE ATENCION:</label>
              <input type="input" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="Codigo"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.codigo"/>
            </div>

            <div class="form-group col-md-3">
              <label for="txthora">HORA DE DERIVACIÓN DE LLAMADA:</label>
              <input type="time" class="form-control" id="txthora" name="txthora" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora">
            </div>


            <div class="form-group col-md-4">
              <label for="cbupersonal_id">PERSONAL DE SAULD RESPONSABLE:</label>
              <select class="form-control" id="cbupersonal_id" name="cbupersonal_id" v-model="fillobject.personal_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($medicos as $dato)
                  <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
                @endforeach
              </select>
            </div>


          </div>
        </div>
      </div>



      <div class="col-md-12">
        <div class="alert" style="padding: 5px;margin-bottom:0px;color: white;background-color: rgb(0, 102, 204)!important;line-height: 1.4;">
          <strong>II. REGISTRO DEL PACIENTE:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>

            <div class="form-group col-md-4">
              <label for="cbutipo_documento_paciente_id">TIPO DE DOCUMENTO:</label>
              <select class="form-control" id="cbutipo_documento_paciente_id" name="cbutipo_documento_paciente_id" v-model="fillobject.tipo_documento_paciente_id" @change="cambiarDoc">
                <option disabled value="0">Seleccione...</option>
                @foreach ($tipoDocumentos as $dato)
                  <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="txtnro_documento">N° DE DOCUMENTO:</label>
              <input type="input" class="form-control" id="txtnro_documento" name="txtnro_documento" placeholder="N° Documento"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.nro_documento" @change="cambiarDoc" />
            </div>

            <div class="form-group col-md-6">
              <label for="txtapellidos">APELLIDOS:</label>
              <input type="input" class="form-control" id="txtapellidos" name="txtapellidos" placeholder="Apellidos"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.apellidos"/>
            </div>

            <div class="form-group col-md-6">
              <label for="txtnombres">NOMBRES:</label>
              <input type="input" class="form-control" id="txtnombres" name="txtnombres" placeholder="Nombres"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.nombres"/>
            </div>


            <div class="form-group col-md-2">
              <label for="cbutipo_telefono">TIPO DE TELEFONO:</label>
              <select class="form-control" id="cbutipo_telefono" name="cbutipo_telefono" v-model="fillobject.tipo_telefono">
                <option disabled value="0">Seleccione...</option>
                  <option value="1">Fijo</option> 
                  <option value="2">Celular</option> 
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="txttelefono">N° DE TELEFONO:</label>
              <input type="input" class="form-control" id="txttelefono" name="txttelefono" placeholder="N° de Telefono"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.telefono"/>
            </div>

            <div class="form-group col-md-2">
              <label for="cbugenero">GENERO:</label>
              <select class="form-control" id="cbugenero" name="cbugenero" v-model="fillobject.genero">
                <option disabled value="0">Seleccione...</option>
                  <option value="M">Masculino</option> 
                  <option value="F">Femenino</option> 
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="cbutipo_edad">TIPO DE EDAD:</label>
              <select class="form-control" id="cbutipo_edad" name="cbutipo_edad" v-model="fillobject.tipo_edad">
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
              maxlength="45" onkeypress="return soloNumeros(event);" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.edad"/>
            </div>

            <div class="form-group col-md-4">
              <label for="cbuseguro_id">TIPO DE SEGURO:</label>
              <select class="form-control" id="cbuseguro_id" name="cbuseguro_id" v-model="fillobject.seguro_id">
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
          <strong>III. ATENCION MEDICA TELEFONICA:</strong> 
       </div>
      </div>

      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="col-md-12" id="msj2"></div>

            <div class="form-group col-md-4">
              <label for="cbuprioridad_id">PRIORIDAD DE EMERGENCIA PRESUNTIVA:</label>
              <select class="form-control" id="cbuprioridad_id" name="cbuprioridad_id" v-model="fillobject.prioridad_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($prioridads as $dato)
                  <option value="{{$dato->id}}">{{$dato->prioridad}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-8">
              <label for="txtcie_diagnostico_id">CODIGO DE DIAGNOSTICO PRESUNTIVO CIE - 10:</label>
              <div class="input-group">
                <input type="input" class="form-control" id="txtcie_diagnostico_id" name="txtcie_diagnostico_id" placeholder="Diagnostico CIE 10"
                maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.cie_diagnostico_descripcion" readonly="true"/>
                <span class="input-group-btn">
                  <button @click.prevent="buscarDiagnosticos()" type="button" class="btn bg-maroon btn-flat" style="height: 34px; width: 50px;"> <i class='fa fa-search'></i> </button>
                </span>
              </div>
            </div>

            <div class="form-group col-md-4">
              <label for="cburequiere_despacho">REQUIERE DESPACHO DE UNIDAD MOVIL:</label>
              <select class="form-control" id="cburequiere_despacho" name="cburequiere_despacho" v-model="fillobject.requiere_despacho">
                  <option value="1">SI</option> 
                  <option value="0">NO</option> 
              </select>
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