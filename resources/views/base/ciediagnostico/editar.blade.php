<form method="post" v-on:submit.prevent="update(fillobject.id)">
  <div class="box-body" style="font-size: 14px;">

 


    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="txtcodigoE" class="col-sm-2 control-label">Código CIE 10:<spam style="color:red;">*</spam></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtcodigoE" name="txtcodigoE" placeholder="Codigo"
            maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.codigo">
        </div>
      </div>
    </div>

    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <label for="txtdescripcionE" class="col-sm-2 control-label">Descripción:<spam style="color:red;">*</spam></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="txtdescripcionE" name="txtdescripcionE" placeholder="Descripción"
            maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.descripcion">
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