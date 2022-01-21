<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" style="padding-top:0px;">
         <center> <H3 class="page-head-line" style="color: #F00;border-bottom: 2px solid #F00;margin-bottom: 40px;"><b>
          RECEPCION Y GESTION DE LLAMADAS 106<br>
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
          <strong>REGISTRO DE LLAMADAS:</strong> 
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

            <div class="form-group col-md-2">
              <label for="cbusamu_id">BASE:</label>
              <select class="form-control" id="cbusamu_id" name="cbusamu_id" v-model="fillobject.samu_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($samus as $dato)
                  <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cbupersonal_id">RESPONSABLE DEL REGISTRO:</label>
              <select class="form-control" id="cbupersonal_id" name="cbupersonal_id" v-model="fillobject.personal_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($operadors as $dato)
                  <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="cbusamu_id">TURNO:</label>
              <select class="form-control" id="cbusamu_id" name="cbusamu_id" v-model="fillobject.samu_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($turnos as $dato)
                  <option value="{{$dato->id}}">{{$dato->turno}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="txtfecha">FECHA:</label>
              <input type="date" class="form-control" id="txtfecha" name="txtfecha" placeholder="dd/mm/aaaa"
              maxlength="10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.fecha">
            </div>




            <div class="form-group col-md-2">
              <label for="txthora_ingreso">HORA:</label>
              <input type="time" class="form-control" id="txthora_ingreso" name="txthora_ingreso" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_ingreso">
            </div>

            <div class="form-group col-md-2">
              <label for="cbullamada_pertinente">LLAMADA PERTINENTE:</label>
              <select class="form-control" id="cbullamada_pertinente" name="cbullamada_pertinente" v-model="fillobject.llamada_pertinente">
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cbutipo_llamada_id">TIPO DE LLAMADA:</label>
              <select class="form-control" id="cbutipo_llamada_id" name="cbutipo_llamada_id" v-model="fillobject.tipo_llamada_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($tipoLlamadas as $dato)
                  <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cbulocalizacion_llamada_id">LOCALIZACION DE LA LLAMADA:</label>
              <select class="form-control" id="cbulocalizacion_llamada_id" name="cbulocalizacion_llamada_id" v-model="fillobject.localizacion_llamada_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($localizacionLlamadas as $dato)
                  <option value="{{$dato->id}}">{{$dato->localizacion}}</option> 
                @endforeach
              </select>
            </div>




            <div class="form-group col-md-5">
              <label for="cbuderivada">LLAMADA DERIVADA AL MEDICO REGULADOR:</label>
              <select class="form-control" id="cbuderivada" name="cbuderivada" v-model="fillobject.derivada">
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div>



            <div class="form-group col-md-12">
              <label for="observaciones">OBSERVACIONES:</label>
              <textarea class="form-control" rows="4" placeholder="Observaciones" id="txtobservaciones" v-model="fillobject.observaciones"></textarea>
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