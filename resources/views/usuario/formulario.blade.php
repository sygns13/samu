<form v-on:submit.prevent="createUsuario">
  <div class="box-body" style="font-size: 14px;">



      <div class="col-md-12">
        <hr style="border-top: 3px solid #1b5f43;">
      </div>

      <center>
        <h4>Datos Personales</h4>
      </center>

      <div class="col-md-12" style="padding-top: 15px;">
        <label for="cbupersonal_id" class="col-sm-2 control-label">Personal:*</label>
        <div class="col-sm-4">
        <select class="form-control" id="cbupersonal_id" name="cbupersonal_id" v-model="personal_id">
          <option disabled value="0">Seleccione...</option>
          @foreach ($personals as $dato)
            <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
          @endforeach
        </select>
        </div>
      </div>






      <div class="col-md-12">
        <hr>
      </div>

 
      <center>
        <h4>Datos del Usuario</h4>
      </center>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbutipouser_id" class="col-sm-2 control-label">Tipo de Usuario:*</label>
          <div class="col-sm-4">
            <select class="form-control" id="cbutipouser_id" name="cbutipouser_id" v-model="tipouser_id">
              <option disabled value="0">Seleccione un Tipo de Usuario</option>
              @foreach ($tipousers as $dato)
                <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
              @endforeach
            </select>
          </div>
        </div>
      </div>




      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">

          <label for="txtemail" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="example@domain.com"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="email">
          </div>

            

        </div>
      </div>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtname" class="col-sm-2 control-label">Username:*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Username" maxlength="500"
              @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="name">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtpassword" class="col-sm-2 control-label">Password:*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="********"
              maxlength="500" v-model="password">
          </div>
        </div>
      </div>

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
    <button  type="submit" class="btn btn-info" id="btnGuardar"><span
      class="fa fa-floppy-o"></span> Guardar</button>

  <button  type="reset" class="btn btn-warning" id="btnCancel"
    @click="cancelFormUsuario()"><span class="fa fa-rotate-left"></span> Cancelar</button>

    <button type="button" class="btn btn-danger" id="btnClose" @click.prevent="cerrarFormUsuario()"><span
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