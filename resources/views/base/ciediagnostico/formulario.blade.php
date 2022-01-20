<form v-on:submit.prevent="create">
  <div class="box-body" style="font-size: 14px;">



      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtcodigo" class="col-sm-2 control-label">Código CIE 10:*</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="Codigo"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="codigo">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtdescripcion" class="col-sm-2 control-label">Descripción:*</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="txtdescripcion" name="txtdescripcion" placeholder="Descripción"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="descripcion">
          </div>
        </div>
      </div>

      {{-- <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
            <label for="txtposision" class="col-sm-2 control-label">Orden de Publicación:*</label>
            <div class="col-sm-4">
              <input type="number" v-model.number="posision"  class="form-control" id="txtposision" name="txtposision" placeholder="N°" onKeyUp="if(this.value.length>4){this.value='9999';}else if(this.value<0){this.value='0';}" placeholder="N°">
            </div>
        </div>
      </div> --}}


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbuactivo" class="col-sm-2 control-label">Estado:*</label>
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