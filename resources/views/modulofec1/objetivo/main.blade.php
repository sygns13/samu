<div class="panel panel-primary" v-if="mostrarPalenIni">
  <div class="panel-heading" style="padding-bottom: 15px;">
    <h3 class="panel-title">Gestión de Objetivos y Valores de la Facultad de Economía y Contabilidad<a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
    Volver</a></h3>
    
  </div>

  <div class="panel-body">
    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-sm" id="btncrear" style="font-size: 14px;" @click.prevent="nuevo()"><i class="fa fa-plus-circle" aria-hidden="true" ></i> Nuevo Objetivo</button>
      </div>
    </div>
  </div>
</div>



<div class="box box-success" v-if="divNuevo">
  <div class="box-header with-border" style="border: 1px solid rgb(0, 166, 90); background-color: rgb(0, 166, 90); color: white;">
    <h3 class="box-title" id="tituloAgregar">Nuevo Objetivo
    </h3>
  </div>
  @include('modulofec1.objetivo.formulario')  
</div>


<div class="box box-warning" v-if="divEdit">
  <div class="box-header with-border" style="border: 1px solid #f39c12; background-color: #f39c12; color: white;">
    <h3 class="box-title" id="tituloAgregar">Editar Objetivo: @{{ fillobject.nombre }}


    </h3>
  </div>

  @include('modulofec1.objetivo.editar')  

</div>

<div class="panel panel-primary" >
  <div class="panel-heading" style="padding-bottom: 20px;">
    <h3 class="panel-title">Listado de Objetivos y Valores de la Facultad de Economía y Contabilidad

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
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 4%;">#</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 5%;">Número de Objetivo</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 20%;">Objetivo</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 30%;">Descripción</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 20%;">Imagen</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 6%;">Estado</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 15%;">Gestión</th>
      </tr>
      <tr v-for="objetivo, key in objetivos">
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{key+pagination.from}}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ objetivo.numero }}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ objetivo.titulo }}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;" v-html="objetivo.descripcion"></td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">{{-- @{{ objetivo.url }} --}}
        
          <center>
            <img v-bind:src="'{{ asset('/web/objetivofec/')}}'+'/'+objetivo.url" style="max-height: 200px;border: solid 1px black;" class="img-responsive" alt="Imagen del Contenido Informativo" id="imgInformacion">
            </center>
        </td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px; text-align: center;">
         <span class="label label-success" v-if="objetivo.activo=='1'">Activo</span>
         <span class="label label-warning" v-if="objetivo.activo=='0'">Inactivo</span>
       </td>
       <td style=";border:1px solid #ddd; font-size: 11px; padding: 5px;">

        <center>

        <a href="#" v-if="objetivo.activo=='1'" class="btn bg-navy btn-sm" v-on:click.prevent="baja(objetivo)" data-placement="top" data-toggle="tooltip" title="Desactivar Objetivo"><i class="fa fa-arrow-circle-down"></i></a>
        <a href="#" v-if="objetivo.activo=='0'" class="btn btn-success btn-sm" v-on:click.prevent="alta(objetivo)" data-placement="top" data-toggle="tooltip" title="Activar Objetivo"><i class="fa fa-check-circle"></i></a>


        <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="edit(objetivo)" data-placement="top" data-toggle="tooltip" title="Editar Objetivo"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="borrar(objetivo)" data-placement="top" data-toggle="tooltip" title="Borrar Objetivo"><i class="fa fa-trash"></i></a>

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