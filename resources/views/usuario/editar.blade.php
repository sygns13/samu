<form method="post" v-on:submit.prevent="updateUsuario(filluser.id)">
  <div class="box-body" style="font-size: 14px;">






      <div class="col-md-12">
        <hr style="border-top: 3px solid rgb(208, 211, 51);">
      </div>

      <center>
        <h4>Datos Personales</h4>
      </center>



      <div class="col-md-12" style="padding-top: 15px;">
        <label for="cbupersonal_idE" class="col-sm-2 control-label">Personal:*</label>
        <div class="col-sm-4">
        <select class="form-control" id="cbupersonal_idE" name="cbupersonal_idE" v-model="filluser.personal_id">
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
          <label for="cbutipouser_idE" class="col-sm-2 control-label">Tipo de Usuario:*</label>
          <div class="col-sm-4">
            <select class="form-control" id="cbutipouser_idE" name="cbutipouser_idE" v-model="filluser.tipouser_id" >
              <option disabled value="">Seleccione un Tipo de Usuario</option>
              @foreach ($tipousers as $dato)
                <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
              @endforeach
            </select>
          </div>
        </div>
      </div>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">

          <label for="txtemailE" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="txtemailE" name="txtemailE" placeholder="example@domain.com"
              maxlength="500" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="filluser.email">
          </div>

            

        </div>
      </div>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="txtnameE" class="col-sm-2 control-label">Username:*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="txtnameE" name="txtnameE" placeholder="Username" maxlength="500"
              @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="filluser.name">
          </div>
        </div>
      </div>


      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbumodifpassword" class="col-sm-2 control-label">¿Modificar Password?:*</label>
          <div class="col-sm-4">
            <select class="form-control" id="cbumodifpassword" name="cbumodifpassword" v-model="filluser.modifpassword" @change="modifclave">
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
          </div>
        </div>
      </div>
      

      <div class="col-md-12" style="padding-top: 15px;" v-if="parseInt(filluser.modifpassword)==1">
        <div class="form-group">
          <label for="txtpasswordE" class="col-sm-2 control-label">Password:*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="txtpasswordE" name="txtpasswordE" placeholder="********"
              maxlength="500" v-model="filluser.password">
          </div>
        </div>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          <label for="cbuactivoE" class="col-sm-2 control-label">Estado:*</label>
          <div class="col-sm-4">
            <select class="form-control" id="cbuactivoE" name="cbuactivoE" v-model="filluser.activo">
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

    <button type="button" class="btn btn-default" id="btnCloseE" @click.prevent="cerrarFormUsuarioE()">Cancelar</button>

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