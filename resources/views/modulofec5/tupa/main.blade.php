<div class="panel panel-primary" v-if="mostrarPalenIni">
  <div class="panel-heading" style="padding-bottom: 15px;">
    <h3 class="panel-title">TUPA de la Facultad de Economía y Contabilidad <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
    Volver</a></h3>
    
  </div>

  <div class="panel-body">
    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-sm" id="btncrear" style="font-size: 14px;" @click.prevent="nuevo()"><i class="fa fa-edit" aria-hidden="true" ></i> Gestionar TUPA</button>
      </div>
    </div>
  </div>
</div>



<div class="box box-success" v-if="divNuevo">
  <div class="box-header with-border" style="border: 1px solid rgb(0, 166, 90); background-color: rgb(0, 166, 90); color: white;">
    <h3 class="box-title" id="tituloAgregar">Gestión del TUPA de la Facultad de Economía y Contabilidad
    </h3>
  </div>
  @include('modulofec5.tupa.formulario')  
</div>





<div class="panel panel-primary">
  <div class="panel-heading" style="padding-bottom: 15px;">
    <h3 class="panel-title">Vista del TUPA de la Facultad de Economía y Contabilidad:</h3>
    
  </div>

    <div class="panel-body">

    <div class="form-group">

      <div class="col-md-12" style="padding-top: 15px;">
        <h3>@{{fillobject.nombre_tupa}}</h3>
      </div>

      <div class="col-md-12" style="padding-top: 15px;">
        <div class="form-group">
          
          <div class="col-sm-12">
            <template  v-if="fillobject.url_tupa != null && fillobject.url_tupa.trim()!=''">
              {{-- <img src="" style="max-height: 100px;" class="img-responsive" alt="Imagen del Logo" id="imgInformacion"> --}}

              <iframe  src="" style="width:100%; height: 900px;" frameborder="0" id="fileinformacion"></iframe>
            </template>
            <template v-else>
              No registrado
            </template>
          </div>
        </div>
      </div>
</div>

</div>
</div>
