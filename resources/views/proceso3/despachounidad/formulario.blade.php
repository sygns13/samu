<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body" style="padding-top:0px;">
         <center> <H3 class="page-head-line" style="color: #F00;border-bottom: 2px solid #F00;margin-bottom: 40px;"><b>
          DESPACHO DE LA UNIDAD MOVIL<br>
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
          <strong>I. REGISTRO DE DESPACHO DE LA UNIDAD MOVIL:</strong> 
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

            <div class="form-group col-md-3">
              <label for="cbudespacho_efectivo">REALIZÓ DESPACHO EFECTIVO:</label>
              <select class="form-control" id="cbudespacho_efectivo" name="cbudespacho_efectivo" v-model="fillobject.despacho_efectivo">
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cbuoportuno">SE REALIZÓ DE MANERA OPORTUNA:</label>
              <select class="form-control" id="cbuoportuno" name="cbuoportuno" v-model="fillobject.oportuno">
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="txthora_indicacion">HORA DE INDICACIÓN DE DESPACHO:</label>
              <input type="time" class="form-control" id="txthora_indicacion" name="txthora_indicacion" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_indicacion">
            </div>

            <div class="form-group col-md-4">
              <label for="txthora_salida_base">HORA DE SALIDA DE LA BASE:</label>
              <input type="time" class="form-control" id="txthora_salida_base" name="txthora_salida_base" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_salida_base">
            </div>

            <div class="form-group col-md-4">
              <label for="txthora_llegada">HORA DE LLEGADA AL FOCO DE EMERGENCIA:</label>
              <input type="time" class="form-control" id="txthora_llegada" name="txthora_llegada" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_llegada">
            </div>

            <div class="form-group col-md-4">
              <label for="cbutipo_atencion_id">LA ATENCIÓN FUE:</label>
              <select class="form-control" id="cbutipo_atencion_id" name="cbutipo_atencion_id" v-model="fillobject.tipo_atencion_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($tipoAtencion as $dato)
                  <option value="{{$dato->id}}">{{$dato->tipo}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-12">
              <label for="ubicacion">UBICACIÓN DEL FOCO:</label>
            </div>

            <div class="form-group col-md-4">
              <label for="cbuprovincia_id">PROVINCIA:</label>
              <select class="form-control" id="cbuprovincia_id" name="cbuprovincia_id" v-model="fillobject.provincia_id" @change="changeProvincia()">
                <option disabled value="0">Seleccione...</option>
                @foreach ($provincias as $dato)
                  <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="cbudistrito_id">DISTRITO:</label>
              <select class="form-control" id="cbudistrito_id" name="cbudistrito_id" v-model="fillobject.distrito_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($distritos as $dato)
                  <option value="{{$dato->id}}" v-if="fillobject.provincia_id == {{$dato->provincia_id}}">{{$dato->nombre}}</option> 
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="txtdireccion">DIRECCIÓN REFERENCIAL:</label>
              <input type="input" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="Dirección"
              maxlength="45" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.direccion"/>
            </div>


            <div class="form-group col-md-4">
              <label for="cbutipo_emergencia">TIPO DE EMERGENCIA:</label>
              <select class="form-control" id="cbutipo_emergencia" name="cbutipo_emergencia" v-model="fillobject.tipo_emergencia">
                <option value="1">INDIVIDUAL</option>
                <option value="2">MASIVA</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="txthora_salida_foco">HORA DE SALIDA DEL FOCO</label>
              <input type="time" class="form-control" id="txthora_salida_foco" name="txthora_salida_foco" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_salida_foco">
            </div>

            <div class="form-group col-md-4">
              <label for="txthora_regreso_base">HORA DE REGRESO A LA BASE</label>
              <input type="time" class="form-control" id="txthora_regreso_base" name="txthora_regreso_base" placeholder="00:00:00"
              maxlength="8" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fillobject.hora_regreso_base">
            </div>

            <div class="form-group col-md-6">
              <label for="cbupersonal_id">PERSONAL DE SALUD RESPONSABLE:</label>
              <select class="form-control" id="cbupersonal_id" name="cbupersonal_id" v-model="fillobject.personal_id">
                <option disabled value="0">Seleccione...</option>
                @foreach ($conductors as $dato)
                  <option value="{{$dato->id}}">{{$dato->apellidos}} {{$dato->nombres}}</option> 
                @endforeach
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