<div class="panel panel-primary" v-if="mostrarPalenIni">
  <div class="panel-heading" style="padding-bottom: 15px;">
    <h3 class="panel-title">Gestión de Eventos del Portal Web Facultad <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
    Volver</a></h3>
    
  </div>

  <div class="panel-body">
    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-sm" id="btncrear" style="font-size: 14px;" @click.prevent="nuevo()"><i class="fa fa-plus-circle" aria-hidden="true" ></i> Nuevo Evento</button>
      </div>
    </div>
  </div>
</div>



<div class="box box-success" v-if="divNuevo">
  <div class="box-header with-border" style="border: 1px solid rgb(0, 166, 90); background-color: rgb(0, 166, 90); color: white;">
    <h3 class="box-title" id="tituloAgregar">Nuevo Evento
    </h3>
  </div>
  @include('adminfacultad.evento.formulario')  
</div>


<div class="box box-warning" v-if="divEdit">
  <div class="box-header with-border" style="border: 1px solid #f39c12; background-color: #f39c12; color: white;">
    <h3 class="box-title" id="tituloAgregar">Editar Evento: @{{ fillobject.titulo }}


    </h3>
  </div>

  @include('adminfacultad.evento.editar')  

</div>

<div class="panel panel-primary" >
  <div class="panel-heading" style="padding-bottom: 20px;">
    <h3 class="panel-title">Listado de Eventos del Portal Web Facultad

      <div class="box-tools" style="float: right;">
        <div class="input-group input-group-sm" style="width: 300px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
  
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
          </div>
  
  
        </div>
      </div>
    </h3>

    
    
  </div>

  <!-- /.box-header -->
  <div class="box-body table-responsive">
    <table class="table table-hover table-bordered" >
      <tbody><tr>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 4%;">#</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 15%;">Título del Evento</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 30%;">Desarrollo del Evento</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 10%;">Fecha y Hora</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 20%;">Imagen Principal</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 6%;">Estado</th>
        <th style="border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 15%;">Gestión</th>
      </tr>
      <tr v-for="evento, key in eventos">
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{key+pagination.from}}</td>
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ evento.titulo }}</td>
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;" v-html="evento.desarrollo"></td>
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ evento.fecha | pasfechaVista}} @{{ evento.hora }}</td>
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">
        
          <template v-for="images, key2 in evento.imagenevento">
            <center v-if="images.posicion == 0">
              <img v-bind:src="'{{ asset('/web/eventofec/')}}'+'/'+images.url" style="max-height: 200px;border: solid 1px black;" class="img-responsive" alt="Imagen del Contenido Informativo" id="imgInformacion">
              </center>
          </template>
          
        </td>
        <td style="border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px; text-align: center;">
         <span class="label label-success" v-if="evento.activo=='1'">Activo</span>
         <span class="label label-warning" v-if="evento.activo=='0'">Inactivo</span>
       </td>
       <td style="border:1px solid #ddd; font-size: 11px; padding: 5px;">
        <center>

        <a href="#" class="btn bg-teal btn-sm" v-on:click.prevent="gestionarImages(evento)" data-placement="top" data-toggle="tooltip" title="Gestionar Imágenes del Evento"><i class="fa fa-file-text-o"></i></a>
        <a href="#" v-if="evento.activo=='1'" class="btn bg-navy btn-sm" v-on:click.prevent="baja(evento)" data-placement="top" data-toggle="tooltip" title="Desactivar Evento"><i class="fa fa-arrow-circle-down"></i></a>
        <a href="#" v-if="evento.activo=='0'" class="btn btn-success btn-sm" v-on:click.prevent="alta(evento)" data-placement="top" data-toggle="tooltip" title="Activar Evento"><i class="fa fa-check-circle"></i></a>


        <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="edit(evento)" data-placement="top" data-toggle="tooltip" title="Editar Evento"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="borrar(evento)" data-placement="top" data-toggle="tooltip" title="Borrar Evento"><i class="fa fa-trash"></i></a>

      </center>
      </td>
    </tr>

  </tbody></table>

</div>
<!-- /.box-body -->
<div style="padding: 15px;">
 <div><h5>Registros por Página: @{{ pagination.per_page }}</h5></div>
 <nav aria-label="Page navigation example">
   <ul class="pagination">
    <li class="page-item" v-if="pagination.current_page>1">
     <a class="page-link" href="#" @click.prevent="changePage(1)">
      <span><b>Inicio</b></span>
    </a>
  </li>

  <li class="page-item" v-if="pagination.current_page>1">
   <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page-1)">
    <span>Atras</span>
  </a>
</li>
<li class="page-item" v-for="page in pagesNumber" v-bind:class="[page=== isActived ? 'active' : '']">
 <a class="page-link" href="#" @click.prevent="changePage(page)">
  <span>@{{ page }}</span>
</a>
</li>
<li class="page-item" v-if="pagination.current_page< pagination.last_page">
 <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page+1)">
  <span>Siguiente</span>
</a>
</li>
<li class="page-item" v-if="pagination.current_page< pagination.last_page">
 <a class="page-link" href="#" @click.prevent="changePage(pagination.last_page)">
  <span><b>Ultima</b></span>
</a>
</li>
</ul>
</nav>
<div><h5>Registros Totales: @{{ pagination.total }}</h5></div>
</div>
</div>

@include('adminfacultad.evento.detalleimagenes')  