<div class="box box-primary panel-group">
    <div class="box-header with-border" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
      <h3 class="box-title">Reporte Estadístico de Procesos de Atención</h3>
      <a style="float: right;" type="button" class="btn btn-default" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
      Volver</a>
    </div>
      
    <div class="box-body" style="border: 1px solid #3c8dbc;">
      <div class="form-group form-primary">



        <div class="col-md-12" style="padding-top: 10px;">
          <div class="form-group" style="font-size: 12px;">
            <label for="cbutipo" class="col-sm-1 control-label">Filtro de Fecha:*</label>
           <div class="col-sm-8">
              <select class="form-control input-xs" id="cbutipo" name="cbutipo" v-model="tipo"  @change="cambioTipo">
              <option value="0">Diario</option>
              <option value="1">Mensual</option>
              <option value="2">Anual</option>
            </select>
            </div>
            </div>
          </div>



          <div class="col-md-12" style="padding-top: 10px;" v-if="tipo == '0'">
            <div class="form-group" style="font-size: 12px;">
              <label for="txtfecha" class="col-sm-1 control-label">Seleccione Día:*</label>
              <div class="col-sm-3">
                <input type="date" class="form-control" id="txtfecha" name="txtfecha" placeholder="dd/mm/aaaa"
                maxlength="10" @keydown="$event.keyCode === 13 ? $event.preventDefault() : false" v-model="fecha"  @change="cambioFiltro">
              </div>
            </div>
          </div>


        <div class="col-md-12" style="padding-top: 10px;" v-if="tipo == '1' || tipo == '2'">
          <div class="form-group" style="font-size: 12px;">
            <label for="cbuAnio" class="col-sm-1 control-label">Año:*</label>
            <div class="col-sm-3">
              <select class="form-control input-xs" id="cbuAnio" name="cbuAnio" v-model="anio" @change="cambioFiltro">
                <option disabled value="0">Seleccione Año</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                </select>


            </div>

            <label for="cbuMes" class="col-sm-1 control-label" v-if="tipo == '1'">Mes:*</label>
            <div class="col-sm-3" v-if="tipo == '1'">
                <select class="form-control input-xs" id="cbuMes" name="cbuMes" v-model="mes" @change="cambioFiltro">
                  <option disabled value="0">Seleccione Año</option>
                  <option value="1">ENERO</option>
                  <option value="2">FEBRERO</option>
                  <option value="3">MARZO</option>
                  <option value="4">ABRIL</option>
                  <option value="5">MAYO</option>
                  <option value="6">JUNIO</option>
                  <option value="7">JULIO</option>
                  <option value="8">AGOSTO</option>
                  <option value="9">SETIEMBRE</option>
                  <option value="10">OCTUBRE</option>
                  <option value="11">NOVIEMBRE</option>
                  <option value="12">DICIEMBRE</option>
                </select>
            </div>
          </div>
      </div>





          <div class="col-md-12" style="padding-top: 35px;">


        <button type="button" class="btn btn-primary" id="btnBuscarReporte" @click.prevent="getReporte()"><i class="fa fa-search" aria-hidden="true" ></i> Realizar Consulta</button>

        <button v-if="verReporte" type="button" class="btn btn-success" id="btncrearReporte" @click.prevent="imprimirReporte()"><i class="fa fa-print" aria-hidden="true" ></i> Imprimir Reporte</button>

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
      
      
      
      
      <div class="box box-primary" style="border: 1px solid #3c8dbc;" v-if="verReporte">
        <div class="box-header" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
          <h3 class="box-title">Reporte Estadísticos</h3>
      
          {{-- <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 300px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar" v-model="buscar" @keyup.enter="buscarBtn()">
      
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default" @click.prevent="buscarBtn()"><i class="fa fa-search"></i></button>
              </div>
      
      
            </div>
          </div> --}}
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">

          <h4>
            Criterio de búsqueda @{{buscar}}
          </h4>

          <table class="table table-hover table-bordered table-dark table-condensed table-striped" >
            <tbody><tr>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 25%;">Cantidad de Registros de Recepción y Gestión de Llamadas 106</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 25%;">Cantidad de Registros de Consejería Medica Telefónica de Urgencia</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 25%;">Cantidad de Registros de Despacho de la Unidad Movil</th>
              <th style="text-align:center; border:1px solid #ddd;padding: 5px; width: 25%;">Cantidad de Registros de Asistencia Médica en Foco</th>
  
            </tr>
            <tr >
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ dataImp.res1 }}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ dataImp.res2 }}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ dataImp.res3 }}</td>
              <td style="border:1px solid #ddd;font-size: 14px; padding: 5px;">@{{ dataImp.res4 }}</td>
           </tr>
      
         </tbody></table>
      
       </div>
       <!-- /.box-body -->
{{--        <div style="padding: 15px;">
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
      </div> --}}
      </div>
      
      


      


  <div class="box box-primary" style="display:none;" v-if="verReporte">
    
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
            <center>REPORTE ESTADÍSTICO DE PROCESOS DE ATENCIÓN</center>
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
              <th style="font-size:14px; text-align:center; border:1px solid #000000;padding: 5px; width: 25%;">Cantidad de Registros de Recepción y Gestión de Llamadas 106</th>
              <th style="font-size:14px; text-align:center; border:1px solid #000000;padding: 5px; width: 25%;">Cantidad de Registros de Consejería Medica Telefónica de Urgencia</th>
              <th style="font-size:14px; text-align:center; border:1px solid #000000;padding: 5px; width: 25%;">Cantidad de Registros de Despacho de la Unidad Movil</th>
              <th style="font-size:14px; text-align:center; border:1px solid #000000;padding: 5px; width: 25%;">Cantidad de Registros de Asistencia Médica en Foco</th>
  
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

         <tr >
              <td style="border:1px solid #000000;font-size: 14px; padding: 5px;">@{{ dataImp.res1 }}</td>
              <td style="border:1px solid #000000;font-size: 14px; padding: 5px;">@{{ dataImp.res2 }}</td>
              <td style="border:1px solid #000000;font-size: 14px; padding: 5px;">@{{ dataImp.res3 }}</td>
              <td style="border:1px solid #000000;font-size: 14px; padding: 5px;">@{{ dataImp.res4 }}</td>
        </tr>
       </tbody></table>

      </div>


      

    </div>
    </div>
</div>