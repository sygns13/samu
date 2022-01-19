<div class="box box-primary panel-group">

    <div class="box-header with-border" style="border: 1px solid #3c8dbc;background-color: #3c8dbc; color: white;">
        <h3 class="box-title">Menú Principal</h3>
    </div>

    <div class="box-body" style="border: 1px solid #3c8dbc;">


        @if(accesoUser([1,2,3]))
        <div class="col-md-12">
            <h3><b>Tablas Base</b></h3>
        </div>
        @endif

        @if(accesoUser([1,2,3]))


        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple" style="box-shadow: 0px 10px 30px 0px #8d8686;">
              <div class="inner">
                <h3 style="font-size: 30px">Diagnósticos</h3>
  
                <p>Gestión de Diagnósticos CIEE</p>
              </div>
              <div class="icon" style="top: 7px;">
               <i class="fa fa-tasks"></i> 
              </div>
              <a href="{{URL::to('diagnosticoscie')}}" id="recibosH" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
            </div>
          </div>
    

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green" style="box-shadow: 0px 10px 30px 0px #8d8686;">
            <div class="inner">
                <h3 style="font-size: 30px">Personal</h3>

                <p>Registro de Personal de Salud</p>
            </div>
            <div class="icon" style="top: 7px;">
                <i class="fa fa-user-md"></i>
            </div>
            <a href="{{URL::to('personalsalud')}}" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
            </div>
        </div>


      @endif



          @if(accesoUser([1,2,4]))
          <div class="col-md-12">
              <h3><b>Procesos de Atención Médica</b></h3>
          </div>
          @endif
  
          @if(accesoUser([1,2,4]))
  
  
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary" style="box-shadow: 0px 10px 30px 0px #8d8686;">
                <div class="inner">
                  <h3 style="font-size: 30px">Llamadas</h3>
    
                  <p>Recepción y Gestión de Llamadas</p>
                </div>
                <div class="icon" style="top: 7px;">
                 <i class="fa fa-phone"></i> 
                </div>
                <a href="{{URL::to('recepcion_llamadas')}}" id="recibosH" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
              </div>
            </div>
      
  
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow" style="box-shadow: 0px 10px 30px 0px #8d8686;">
              <div class="inner">
                  <h3 style="font-size: 30px">Consejería</h3>
  
                  <p>Consejería Telefónica Médica</p>
              </div>
              <div class="icon" style="top: 7px;">
                  <i class="fa fa-stethoscope"></i>
              </div>
              <a href="{{URL::to('consejeria_medica')}}" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
              </div>
          </div>
  
  
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-Teal" style="box-shadow: 0px 10px 30px 0px #8d8686;">
              <div class="inner">
                  <h3 style="font-size: 30px">Despacho</h3>
          
                  <p>Despacho de la Unidad Móvil</p>
              </div>
              <div class="icon" style="top: 7px;">
          <i class="fa fa-ambulance"></i> 
              </div>
              <a href="{{URL::to('despacho_unidad')}}" id="recibosP" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
              </div>
          </div>
  
  
  
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red" style="box-shadow: 0px 10px 30px 0px #8d8686;">
              <div class="inner">
                  <h3 style="font-size: 30px">Asistencia</h3>
          
                  <p>Asistencia Médica en Foco</p>
              </div>
              <div class="icon" style="top: 7px;">
          <i class="fa fa-user-md"></i> 
              </div>
              <a href="{{URL::to('asistencia_medica')}}" id="recibosP" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
              </div>
          </div> 
  
        @endif


        @if(accesoUser([1]))
        <div class="col-md-12">
            <h3><b>Módulo de Configuraciones</b></h3>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-maroon" style="box-shadow: 0px 10px 30px 0px #8d8686;">
              <div class="inner">
                <h3 style="font-size: 30px">Usuarios</h3>
    
                <p>Gestión de Usuarios</p>
              </div>
              <div class="icon" style="top: 7px;">
                <i class="fa fa-users"></i>
              </div>
              <a href="usuarios" class="small-box-footer" style="height: 37px"><i class="fa fa-arrow-circle-right" style="font-size: 30px"></i></a>
            </div>
          </div>

        @endif
      
</div>
</div>