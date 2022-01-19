@extends('adminlte::layouts.app')

@section('htmlheader_title')
Gestión de Datos Estadísticos de los Programas de Estudios de la FEC
@endsection

<style type="text/css">         

#modaltamanio{
	width: 70% !important;
}
.swal2-popup{
	font-size: 1.175em !important;
}
</style>
@section('main-content')
<div class="container-fluid spark-screen">

	<div class="row">

		@include('adminlte::layouts.partials.loaders')

		@if(accesoUser([1,2,4]))

		<template v-if="divprincipal" id="divprincipal">

			{{--         <div class="box box-success" style="border: 1px solid #00a65a;">
          <div class="box-header with-border" style="border: 1px solid #00a65a;background-color: #00a65a; color: white;"> --}}

            <div class="panel panel-primary" v-if="mostrarPalenIni && programa_id ==0">
				<div class="panel-heading" style="padding-bottom: 15px;" >
			  <h3 class="panel-title" id="tituloAgregar">Seleccione Programa de Estudio <a style="float: right; padding: all; color: black;" type="button" class="btn btn-default btn-sm" href="{{URL::to('home')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> 
				  Volver</a>
			  </h3>
			</div>
		
			<div class="panel-body">
			  <div class="col-md-12">
		
				<div class="col-md-12">
				  <div class="form-group">
					<label for="cbuprograma_id" class="col-sm-2 control-label">Programa de Estudio:*</label>
					<div class="col-sm-10">
					  <select class="form-control" id="cbuprograma_id" name="cbuprograma_id" v-model="programa_id" @change="cambioPrograma">
						<option disabled value="0">Seleccione un Programa de Estudio</option>
						@foreach ($programas as $dato)
						  <option value="{{$dato->id}}">{{$dato->nombre}}</option> 
						@endforeach
					  </select>
					</div>
				  </div>
				</div>
  
				</div>
  
				@if($programas == null || count($programas) == 0)
				<div class="col-md-12" style="padding-top: 15px;">
				  <span style="color:red"><b>Nota:</b> el Usuario tiene acceso al módulo pero no tiene ningún Programa de Estudio asignado, por favor comuníquese con el administrador del sistema</span>
				</div>
				@endif
			</div>
		
  
		</div>


			<div class="col-md-12" v-if="mostrarPalenIni && programa_id!=0">
				<!-- Custom Tabs -->
				<div class="nav-tabs-custom">
				  <ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab" @click.prevent="cambioTipo(1)"><b>N° de Ingresantes</b></a></li>
					<li><a href="#tab_2" data-toggle="tab" @click.prevent="cambioTipo(2)"><b>N° de Matriculados</b></a></li>
					<li><a href="#tab_3" data-toggle="tab" @click.prevent="cambioTipo(3)"><b>N° de Egresados</b></a></li>
					<li><a href="#tab_4" data-toggle="tab" @click.prevent="cambioTipo(4)"><b>N° de Docentes</b></a></li>
					<li><a href="#tab_5" data-toggle="tab" @click.prevent="cambioTipo(5)"><b>N° de Sílabus</b></a></li>
					<li><a href="#tab_6" data-toggle="tab" @click.prevent="cambioTipo(6)"><b>N° de Trámites Realizados</b></a></li>
					
				  </ul>
				  <div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<template v-if="tipo == 1">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_2">
						<template v-if="tipo == 2">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_3">
						<template v-if="tipo == 3">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_4">
						<template v-if="tipo == 4">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_5">
						<template v-if="tipo == 5">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
					<!-- /.tab-pane -->
					<div class="tab-pane" id="tab_6">
						<template v-if="tipo == 6">
							@include('adminprograma.estadistico.main')
						</template>
					</div>
					<!-- /.tab-pane -->
				  </div>
				  <!-- /.tab-content -->
				</div>
				<!-- nav-tabs-custom -->
			  </div>
			  <!-- /.col -->


			
		</template>
		@endif


	</div>
</div>
@endsection
