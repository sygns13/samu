@extends('adminlte::layouts.app')

@section('htmlheader_title')
Recepción y Gestión de llamadas 106
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

		@if(accesoUser([1,2,3]))

		<template v-if="divprincipal" id="divprincipal">
			@include('proceso1.recepcionllamadas.main')
		</template>
		@endif


	</div>
</div>
@endsection
