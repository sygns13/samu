<div class="box box-primary panel-group">
    <div class="box-header with-border" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
      <h3 class="box-title">Reporte de Procesos de Atención</h3>
      <a style="float: right;" type="button" class="btn btn-default" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
      Volver</a>
    </div>
      
    <div class="box-body" style="border: 1px solid #3c8dbc;">
      <div class="form-group form-primary">



       {{--  <div class="col-md-12" style="padding-top: 10px;">
          <div class="form-group" style="font-size: 12px;">
            <label for="cbuProceso" class="col-sm-1 control-label">Proceso:*</label>
           <div class="col-sm-8">
            <select class="form-control input-xs" id="cbuProceso" name="cbuProceso" v-model="proceso" >
            <option value="0">Todos los Procesos de Atención</option>
            <option value="1">Proceso 1</option>
            <option value="2">Proceso 2</option>
            <option value="3">Proceso 3</option>
            <option value="4">Proceso 4</option>

              </select>
            </div>
            </div>
          </div> --}}


          <div class="col-md-12" style="padding-top: 35px;">

        <button type="button" class="btn btn-success" id="btncrearReporte" @click.prevent="imprimirReporte()"><i class="fa fa-print" aria-hidden="true" ></i> Imprimir Reporte Consolidado</button>

      </div>
      
    
    
    
        <div v-show="divloaderNuevo" style="padding-top: 100px;">

          <div class="sk-circle" >

              
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
    <center><h3 style="color:red"><b>Cargando Datos, Por Favor Espere un momento ...</b></h3></center>
  </div>

    
  </div>

</div>
      
</div>
      
      
      
      
      <div class="box box-primary" style="border: 1px solid #3c8dbc;">
        <div class="box-header" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
          <h3 class="box-title">Procesos de Atención</h3>
      
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 300px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
      
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
              </div>
      
      
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-hover table-bordered table-dark table-condensed table-striped" >
            <tbody><tr>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 5%;">#</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 10%;">Código</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 8%;">Fecha de Llamada</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 21%;">Paciente</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 14%;">Recepción y Gestión de Llamadas 106</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 14%;">Consejería Medica Telefónica de Urgencia</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 14%;">Despacho de la Unidad Movil</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 14%;">Asistencia Médica en Foco</th>
  
            </tr>
            <tr v-for="proceso, key in procesos">
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{key+pagination.from}}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ proceso.codigo }}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ proceso.fecha | pasfechaVista }}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">
              <template v-if="proceso.proceso2 != null && proceso.proceso2.paciente != null">
                @{{ proceso.proceso2.paciente.nombres }} @{{ proceso.proceso2.paciente.apellidos }}
              </template>
              </td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">Registrada 
                <a href="#"class="btn btn-primary btn-sm" v-on:click.prevent="imprimirFicha(1,proceso)" data-placement="top" data-toggle="tooltip" title="Imprimir Ficha de Recepción de Llamada">
                  Imprimir Ficha
                </a>
              </td>

              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">
                <template v-if="proceso.proceso2 != null">
                  Registrada 
                <a href="#"class="btn btn-primary btn-sm" v-on:click.prevent="imprimirFicha(2,proceso)" data-placement="top" data-toggle="tooltip" title="Imprimir Ficha de Consejería Médica Telefónica">
                  Imprimir Ficha
                </a>
              </template>
              <template v-else>
                No Registrada
              </template>
              </td>

              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">
                <template v-if="proceso.proceso3 != null">
                  Registrada 
                <a href="#"class="btn btn-primary btn-sm" v-on:click.prevent="imprimirFicha(3,proceso)" data-placement="top" data-toggle="tooltip" title="Imprimir Ficha de Despachod de la Unidad Móvil">
                  Imprimir Ficha
                </a>
              </template>
              <template v-else>
                No Registrada
              </template>
              </td>

              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">
                <template v-if="proceso.proceso4 != null">
                  Registrada 
                <a href="#"class="btn btn-primary btn-sm" v-on:click.prevent="imprimirFicha(4,proceso)" data-placement="top" data-toggle="tooltip" title="Imprimir Ficha de Asistencia Médica en Foco">
                  Imprimir Ficha
                </a>
                <br>
                <center>
                <a v-if="proceso.proceso4.url != null && proceso.proceso4.url!=''" v-bind:href="'{{ asset('/web/fichamedica/')}}'+'/'+proceso.proceso4.url"  class="btn btn-warning btn-xs" download> Historia Digital</a>
                </center>
              </template>
              <template v-else>
                No Registrada
              </template>
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
      
      


      


  <div class="box box-primary" style="display:none;">
    
    <div style="width: 100%; max-width: 21cm; height: auto; background-color: white; border: 1px solid white; margin-bottom:1cm!important;" id="divImp">
    <div style="padding-top: 0cm;padding-left: 0cm; padding-right: 0cm;">

      <div id="titulo1" style="width:100%;">

        <div style="width:200px;position: absolute; font-size: 8px; float: left; text-align: left;">
          <b>DIRECCION REGIONAL DE SALUD ANCASH<b> -
          SISTEMA DE ATENCIÓN MÓVIL DE URGENCIA
        </div>
        <div style="width:150px; position: absolute; font-size: 8px; float: right; right: 50px; top:0mm!important;" class="logorep">
          <img src="{{ asset('/img/logo.jpg')}}" class="img img-responsive">
        </div>
          <h3 class="box-title" style="padding-top:10px;font-size: 12px; text-align: center; font-weight: bold; width: 100%;    line-height: 2;"> 
            <center>REPORTE CONSOLIDADO DE PROCESOS DE ATENCIÓN</center>
          </h3>
      </div>


      <div id="cabecera1" style="width:100%;">
        
        <div style="width:100%; display:inline-block;">
          <h5 style="font-size:11px;" v-if="buscar.length>0"><b>Criterio de Búsqueda: @{{buscar}}</b></h5>

            </div>
      </div>


      <div class="box-body table-responsive" style="width:100%;">
        <table class="table table-hover table-bordered table-dark table-condensed table-striped" >
          <tbody>
            
            <tr>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 5%;">#</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 10%;">Código</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 8%;">Fecha de Llamada</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 21%;">Paciente</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 14%;">Recepción y Gestión de Llamadas 106</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 14%;">Consejería Medica Telefónica de Urgencia</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 14%;">Despacho de la Unidad Movil</th>
              <th style="font-size:12px; text-align:center; border:1px solid #000000;padding: 5px; width: 14%;">Asistencia Médica en Foco</th>
  
            </tr>
       {{--    <tr v-for="data, key in dataimp">


        <td style="font-size:12px;border:1px solid #000000; padding: 5px;">@{{key+pagination.from}}</td>
              <td style="font-size:12px;border:1px solid #000000; padding: 5px;">@{{ data.nombre }}</td>
              <td style="font-size:12px;border:1px solid #000000; padding: 5px;">@{{ data.direccion }}</td>
              <td style="font-size:12px;border:1px solid #000000; padding: 5px; vertical-align: middle;">
                  <center>
               <span  v-if="data.estado=='1'">Activo</span>
               <span  v-if="data.estado=='0'">Inactivo</span>
              </center>
             </td>
 

         </tr> --}}
    

         <tr v-for="proceso, key in procesos">
          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">@{{key+pagination.from}}</td>
          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">@{{ proceso.codigo }}</td>
          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">@{{ proceso.fecha | pasfechaVista }}</td>
          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">
          <template v-if="proceso.proceso2 != null && proceso.proceso2.paciente != null">
            @{{ proceso.proceso2.paciente.nombres }} @{{ proceso.proceso2.paciente.apellidos }}
          </template>
          </td>
          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">Registrada 
          </td>

          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">
            <template v-if="proceso.proceso2 != null">
              Registrada 
          </template>
          <template v-else>
            No Registrada
          </template>
          </td>

          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">
            <template v-if="proceso.proceso3 != null">
              Registrada 
          </template>
          <template v-else>
            No Registrada
          </template>
          </td>

          <td style="border:1px solid #000000;font-size: 12px; padding: 5px;">
            <template v-if="proceso.proceso4 != null">
              Registrada 
          </template>
          <template v-else>
            No Registrada
          </template>
          </td>
          
       </tr>
       </tbody></table>

      </div>


      

    </div>
    </div>
</div>


<form  v-on:submit.prevent="ImprimirFicha()">
  <div class="modal fade bs-example-modal-lg" id="modalFicha" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document"  id="modaltamanio1">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="desEditarTitulo" style="font-weight: bold;text-decoration: underline;" v-if="verProceso1">IMPRIMIR FICHA DE RECEPCION Y GESTION DE LLAMADAS 106</h4>
          <h4 class="modal-title" id="desEditarTitulo" style="font-weight: bold;text-decoration: underline;" v-if="verProceso2">IMPRIMIR FICHA DE CONSEJERIA MEDICA TELEFONICA DE URGENCIA</h4>
          <h4 class="modal-title" id="desEditarTitulo" style="font-weight: bold;text-decoration: underline;" v-if="verProceso3">IMPRIMIR FICHA DE DESPACHO DE LA UNIDAD MÓVIL</h4>
          <h4 class="modal-title" id="desEditarTitulo" style="font-weight: bold;text-decoration: underline;" v-if="verProceso4">IMPRIMIR FICHA DE ASISTENCIA MÉDICA EN FOCO</h4>

        </div> 
        <div class="modal-body">


          <div class="row">

            <div class="box" id="o" style="border:0px; box-shadow:none;" >
              <div class="box-header with-border">
                <h3 class="box-title" id="boxTituloFicha"></h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div id="Ficha1" v-if="verProceso1"> 
                @include('reportes.reporte1.ficha1')   
              </div>
              <div id="Ficha2" v-if="verProceso2"> 
                @include('reportes.reporte1.ficha2')   
              </div>
              <div id="Ficha3" v-if="verProceso3"> 
                @include('reportes.reporte1.ficha3')   
              </div>
              <div id="Ficha4" v-if="verProceso4"> 
                @include('reportes.reporte1.ficha4')
              </div>
           </div>



         </div>
         <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="btnImprimir"><i class="fa fa-print" aria-hidden="true"></i> Imprimir Ficha</button>

          <button type="button" id="btnCancelFoto" class="btn btn-default" data-dismiss="modal"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar</button>



        </div>
      </div>
    </div>
  </div>
</div>
</form>