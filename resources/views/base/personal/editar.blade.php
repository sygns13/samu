<form method="post" v-on:submit.prevent="update(fillobject.id)">
  <div class="box-body" style="font-size: 14px;">

 


    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="txtcodigoE" class="col-sm-2 control-label">Código:<spam style="color:red;">*</spam></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtcodigoE" name="txtcodigoE" placeholder="Codigo"
            maxlength="50" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.codigo">
        </div>
      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="cbutipo_documento_idE" class="col-sm-2 control-label">Tipo de Documento:<spam style="color:red;">*</spam></label>
        <div class="col-sm-4">
          <select class="form-control" id="cbutipo_documento_idE" name="cbutipo_documento_idE" v-model="fillobject.tipo_documento_id">
            <option disabled value="0">Seleccione un Tipo de Usuario</option>
            @foreach ($tipoDocumentos as $dato)
              <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
            @endforeach
          </select>
        </div>

        <label for="txtnro_documentoE" class="col-sm-2 control-label">N° de Documento:<spam style="color:red;">*</spam></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txtnro_documentoE" name="txtnro_documentoE" placeholder="N° de Documento"
            maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.nro_documento">
        </div>
      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="txtapellidosE" class="col-sm-2 control-label">Apellidos:<spam style="color:red;">*</spam></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="txtapellidosE" name="txtapellidosE" placeholder="Apellidos"
            maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.apellidos">
        </div>

        <label for="txtnombresE" class="col-sm-2 control-label">Nombres:<spam style="color:red;">*</spam></label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="txtnombresE" name="txtnombresE" placeholder="Nombres"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.nombres">
          </div>
      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="txtfecha_nacimientoE" class="col-sm-2 control-label">Fecha de Nacimiento:</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="txtfecha_nacimientoE" name="txtfecha_nacimientoE" placeholder="dd/mm/aaaa"
            maxlength="10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.fecha_nacimiento">
        </div>

        <label for="cbugeneroE" class="col-sm-2 control-label">Genero:</label>
        <div class="col-sm-2">
          <select class="form-control" id="cbugeneroE" name="cbugeneroE" v-model="fillobject.genero">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>

        <label for="txttelefonoE" class="col-sm-2 control-label">Teléfono:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="txttelefonoE" name="txttelefonoE" placeholder="Teléfono"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.telefono">
          </div>

      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
          <label for="txtedadE" class="col-sm-2 control-label">Edad:</label>
          <div class="col-sm-2">
            <input type="number" v-model.number="fillobject.edad"  class="form-control" id="txtedadE" name="txtedadE" placeholder="N°" onKeyUp="if(this.value.length>4){this.value='9999';}else if(this.value<0){this.value='0';}" placeholder="N°">
          </div>
      

          <label for="cbuestado_civil_idE" class="col-sm-2 control-label">Estado Civil:</label>
          <div class="col-sm-6">
            <select class="form-control" id="cbuestado_civil_idE" name="cbuestado_civil_idE" v-model="fillobject.estado_civil_id">
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
        <label for="txtocupacionE" class="col-sm-2 control-label">Ocupación / Profesión:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="txtocupacionE" name="txtocupacionE" placeholder="Ocupación / Profesión"
            maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.ocupacion">
        </div>

        <label for="txtnro_colegiaturaE" class="col-sm-2 control-label">N° de Colegiatura:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="txtnro_colegiaturaE" name="txtnro_colegiaturaE" placeholder="N° de Colegiatura"
            maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.nro_colegiatura">
        </div>
      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="cbucargo_idE" class="col-sm-2 control-label">Cargo:<spam style="color:red;">*</spam></label>
        <div class="col-sm-10">
          <select class="form-control" id="cbucargo_idE" name="cbucargo_idE" v-model="fillobject.cargo_id">
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
          <label for="cbuactivoE" class="col-sm-2 control-label">Estado:<spam style="color:red;">*</spam></label>
          <div class="col-sm-4">
            <select class="form-control" id="cbuactivoE" name="cbuactivoE" v-model="fillobject.activo">
              <option value="1">Activado</option>
              <option value="0">Desactivado</option>
            </select>
          </div>
        </div>
      </div>

    


  </div>

  <!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" class="btn btn-primary" id="btnSaveE"><i class="fa fa-floppy-o" aria-hidden="true"></i>
      Modificar</button>

    <button type="button" class="btn btn-default" id="btnCloseE" @click.prevent="cerrarFormE()">Cancelar</button>

    <div class="sk-circle" v-show="divloaderEdit">
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