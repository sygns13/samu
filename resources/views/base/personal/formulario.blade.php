<form v-on:submit.prevent="create">
  <div class="box-body" style="font-size: 14px;">



      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtcodigo" class="col-sm-2 control-label">Código:<spam style="color:red;">*</spam></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="Codigo"
              maxlength="50" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="codigo">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbutipo_documento_id" class="col-sm-2 control-label">Tipo de Documento:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
            <select class="form-control" id="cbutipo_documento_id" name="cbutipo_documento_id" v-model="tipo_documento_id">
              <option disabled value="0">Seleccione un Tipo de Usuario</option>
              @foreach ($tipoDocumentos as $dato)
                <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
              @endforeach
            </select>
          </div>

          <label for="txtnro_documento" class="col-sm-2 control-label">N° de Documento:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="txtnro_documento" name="txtnro_documento" placeholder="N° de Documento"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="nro_documento">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtapellidos" class="col-sm-2 control-label">Apellidos:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="txtapellidos" name="txtapellidos" placeholder="Apellidos"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="apellidos">
          </div>

          <label for="txtnombres" class="col-sm-2 control-label">Nombres:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="txtnombres" name="txtnombres" placeholder="Nombres"
                maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="nombres">
            </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtfecha_nacimiento" class="col-sm-2 control-label">Fecha de Nacimiento:</label>
          <div class="col-sm-2">
              <input type="date" class="form-control" id="txtfecha_nacimiento" name="txtfecha_nacimiento" placeholder="dd/mm/aaaa"
              maxlength="10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fecha_nacimiento">
          </div>

          <label for="cbugenero" class="col-sm-2 control-label">Genero:</label>
          <div class="col-sm-2">
            <select class="form-control" id="cbugenero" name="cbugenero" v-model="genero">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>

          <label for="txttelefono" class="col-sm-2 control-label">Teléfono:</label>
          <div class="col-sm-2">
              <input type="text" class="form-control" id="txttelefono" name="txttelefono" placeholder="Teléfono"
                maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="telefono">
            </div>

        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
            <label for="txtedad" class="col-sm-2 control-label">Edad:</label>
            <div class="col-sm-2">
              <input type="number" v-model.number="edad"  class="form-control" id="txtedad" name="txtedad" placeholder="N°" onKeyUp="if(this.value.length>4){this.value='9999';}else if(this.value<0){this.value='0';}" placeholder="N°">
            </div>
        

            <label for="cbuestado_civil_id" class="col-sm-2 control-label">Estado Civil:</label>
            <div class="col-sm-6">
              <select class="form-control" id="cbuestado_civil_id" name="cbuestado_civil_id" v-model="estado_civil_id">
                <option disabled value="0">Seleccione una Opción</option>
                @foreach ($estadoCivils as $dato)
                  <option value="{{$dato->id}}">{{$dato->descripcion}}</option> 
                @endforeach
              </select>
            </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtocupacion" class="col-sm-2 control-label">Ocupación / Profesión:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="txtocupacion" name="txtocupacion" placeholder="Ocupación / Profesión"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="ocupacion">
          </div>

          <label for="txtnro_colegiatura" class="col-sm-2 control-label">N° de Colegiatura:</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="txtnro_colegiatura" name="txtnro_colegiatura" placeholder="N° de Colegiatura"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="nro_colegiatura">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbucargo_id" class="col-sm-2 control-label">Cargo:<spam style="color:red;">*</spam></label>
          <div class="col-sm-10">
            <select class="form-control" id="cbucargo_id" name="cbucargo_id" v-model="cargo_id">
              <option disabled value="0">Seleccione un Cargo</option>
              @foreach ($cargos as $dato)
                <option value="{{$dato->id}}">{{$dato->descripcion}}</option> 
              @endforeach
            </select>
          </div>
        </div>
      </div>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbuactivo" class="col-sm-2 control-label">Estado:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
            <select class="form-control" id="cbuactivo" name="cbuactivo" v-model="activo">
              <option value="1">Activado</option>
              <option value="0">Desactivado</option>
            </select>
          </div>
        </div>
      </div>


  </div>

  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-info" id="btnGuardar"><span
      class="fa fa-floppy-o"></span> Guardar</button>

  <button type="reset" class="btn btn-warning" id="btnCancel"
    @click="cancelForm()"><span class="fa fa-rotate-left"></span> Cancelar</button>

    <button type="button" class="btn btn-danger" id="btnClose" @click.prevent="cerrarForm()"><span
        class="fa fa-power-off"></span> Cerrar</button>

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
  <!-- /.box-footer -->

</form>