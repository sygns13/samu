<div class="container">
  <div class="row">
      <div class="col-md-12">
        <img src="{{ asset('/img/imagen_cabeza.jpg') }}" width="100%;" height="118" class="img-responsive"/>
        <h4 class="page-head-line" style="color: #009;float:left; display:block;padding-bottom:0px; border-bottom: 0px;margin-bottom: 0px;">DIRECCION REGIONAL DE SALUD ANCASH</h4>
      </div>  
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="navbar navbar-inverse set-radius-zero" style="background-color: rgb(0, 102, 204); margin-bottom:0px;">
          <div class="container">
                  <h3 style="color:white">Plataforma Virtual</h3>    
          </div>
        </div>
      </div>   
  </div>
</div>

{{-- <div class="panel panel-primary" v-if="mostrarPalenIni">
  <div class="panel-heading" style="padding-bottom: 15px;">
    <h3 class="panel-title">Mantenimiento y Gestión de Diagnósticos CIE 10  <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
    Volver</a></h3>
    
  </div>

  <div class="panel-body">
    <div class="col-md-12" style="padding-top: 15px;">
      <div class="form-group">
        <button type="button" class="btn btn-primary btn-sm" id="btncrear" style="font-size: 14px;" @click.prevent="nuevo()"><i class="fa fa-plus-circle" aria-hidden="true" ></i> Nuevo Registro</button>
      </div>
    </div>
  </div>
</div> --}}


@include('proceso2.consejeriamedica.formulario')  
{{-- <div class="box box-success" v-if="divNuevo">
  <div class="box-header with-border" style="border: 1px solid rgb(0, 166, 90); background-color: rgb(0, 166, 90); color: white;">
    <h3 class="box-title" id="tituloAgregar">Nuevo Diagnóstico CIE 10
    </h3>
  </div>
  @include('proceso1.recepcionllamadas.formulario')  
</div> --}}

{{-- <div class="content-wrapper"> --}}

{{-- </div> --}}


{{-- <div class="box box-warning" v-if="divEdit">
  <div class="box-header with-border" style="border: 1px solid #f39c12; background-color: #f39c12; color: white;">
    <h3 class="box-title" id="tituloAgregar">Editar Diagnóstico CIE 10: @{{ fillobject.nombre }}


    </h3>
  </div>

  @include('proceso1.recepcionllamadas.editar')  

</div>
 --}}
{{-- <div class="panel panel-primary" >
  <div class="panel-heading" style="padding-bottom: 20px;">
    <h3 class="panel-title">Listado de Diagnósticos CIE 10

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
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 5%;">#</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 20%;">Código CIE 10</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 50%;">Descripción</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 10%;">Estado</th>
        <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 15%;">Gestión</th>
      </tr>
      <tr v-for="registro, key in registros">
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{key+pagination.from}}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ registro.codigo }}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ registro.descripcion }}</td>
        <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px; text-align: center;">
         <span class="label label-success" v-if="registro.activo=='1'">Activo</span>
         <span class="label label-warning" v-if="registro.activo=='0'">Inactivo</span>
       </td>
       <td style=";border:1px solid #ddd; font-size: 11px; padding: 5px;">

        <center>

        <a href="#" v-if="registro.activo=='1'" class="btn bg-navy btn-sm" v-on:click.prevent="baja(registro)" data-placement="top" data-toggle="tooltip" title="Dar de baja registro"><i class="fa fa-arrow-circle-down"></i></a>
        <a href="#" v-if="registro.activo=='0'" class="btn btn-success btn-sm" v-on:click.prevent="alta(registro)" data-placement="top" data-toggle="tooltip" title="Dar de alta registro"><i class="fa fa-check-circle"></i></a>


        <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="edit(registro)" data-placement="top" data-toggle="tooltip" title="Editar registro"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="borrar(registro)" data-placement="top" data-toggle="tooltip" title="Borrar registro"><i class="fa fa-trash"></i></a>

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
 --}}


  <div class="modal bs-example-modal-lg" id="modalDiagnostico" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" id="modaltamanio">
      <div class="modal-content" style="border: 1px solid #3c8dbc;">
        <div class="modal-header" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size: 35px;">&times;</span></button>
          <h4 class="modal-title" id="desDiagnosticoTitulo" style="font-weight: bold;text-decoration: underline;">CODIGOS DE DIAGNOSTICO PRESUNTIVO CIE - 10</h4>

        </div> 
        <div class="modal-body">
          <input type="hidden" id="idServicio" value="0">

          <div class="row">

            <div class="box" id="o" style="border:0px; box-shadow:none;" >
{{--               <div class="box-header with-border">
                <h3 class="box-title" id="boxTitulo">Escuela Profesional:</h3>
              </div> --}}
              <!-- /.box-header -->
              <!-- form start -->

              <div class="box-body">

                <div class="panel-heading" style="padding-bottom: 20px;">
                  <h3 class="panel-title">Listado de Diagnósticos CIE 10
              
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
                <div class="box-body table-responsive">
                  <table class="table table-hover table-bordered" >
                    <tbody><tr>
                      <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 10%;">#</th>
                      <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 30%;">Código CIE 10</th>
                      <th style=";border:1px solid #ddd; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; padding: 5px; width: 60%;">Descripción</th>
                    </tr>
                    <tr v-for="registro, key in registros" style="cursor: pointer" @click.prevent="seleccionarDiagnostico(registro)">
                      <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{key+pagination.from}}</td>
                      <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ registro.codigo }}</td>
                      <td style=";border:1px solid #ddd;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; padding: 5px;">@{{ registro.descripcion }}</td>
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
          </div>
          <div class="modal-footer">

            <button type="button" id="btnCancelCie" class="btn btn-default" data-dismiss="modal"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar</button>

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
        </div>
      </div>
    </div>
  </div>
</div>
