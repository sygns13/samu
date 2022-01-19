<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-red-light sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    {{-- <div class="content-wrapper" style="background-image: url(../img/fondo_gris2.gif);"> --}}
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>


@if($modulo=="inicioAdmin")
@include('inicio.vueAdmin')

@elseif($modulo=="usuario")
@include('usuario.vue')

@elseif($modulo=="miperfil")
@include('miperfil.vue')

{{-- Modulo 1 Portal Facultades --}}

@elseif($modulo=="bannerfacultad")
@include('adminfacultad.banner.vue')

@elseif($modulo=="presentacionfacultad")
@include('adminfacultad.presentacion.vue')

@elseif($modulo=="datosfacultad")
@include('adminfacultad.datosfacultad.vue')

@elseif($modulo=="noticiafacultad")
@include('adminfacultad.noticia.vue')

@elseif($modulo=="eventofacultad")
@include('adminfacultad.evento.vue')

@elseif($modulo=="comunicadofacultad")
@include('adminfacultad.comunicado.vue')

@elseif($modulo=="redsocialfacultad")
@include('adminfacultad.redsocial.vue')

{{-- Modulo 2 Facultades --}}

@elseif($modulo=="historiafacultad")
@include('modulofec1.historia.vue')

@elseif($modulo=="misionvisionfec")
@include('modulofec1.misionvision.vue')

@elseif($modulo=="politicafacultad")
@include('modulofec1.politica.vue')

@elseif($modulo=="objetivofacultad")
@include('modulofec1.objetivo.vue')

@elseif($modulo=="directoriofacultad")
@include('modulofec1.directorio.vue')

@elseif($modulo=="documentofacultad")
@include('modulofec1.documento.vue')

@elseif($modulo=="gestioncalidadfacultad")
@include('modulofec1.gestioncalidad.vue')

{{-- Modulo 3 Investigacion --}}

@elseif($modulo=="revistafacultad")
@include('modulofec2.revista.vue')

@elseif($modulo=="accesobasedatofacultad")
@include('modulofec2.accesobasedato.vue')

@elseif($modulo=="antiplagiofacultad")
@include('modulofec2.antiplagio.vue')

{{-- Modulo 4 Novedades --}}

@elseif($modulo=="galeriafacultad")
@include('modulofec3.galeria.vue')

{{-- Modulo 5 Responsabilidad Social --}}

@elseif($modulo=="estudiantefacultad")
@include('modulofec4.estudiante.vue')

@elseif($modulo=="docentesfacultadfacultad")
@include('modulofec4.docentesfacultad.vue')

{{-- Modulo 6 Transparencia --}}

@elseif($modulo=="resolucionfacultad")
@include('modulofec5.resolucion.vue')

@elseif($modulo=="actasfacultad")
@include('modulofec5.actas.vue')

@elseif($modulo=="tupafacultad")
@include('modulofec5.tupa.vue')

{{-- Modulo 7 Portal Programas de Estudios --}}

@elseif($modulo=="bannerprograma")
@include('adminprograma.banner.vue')

@elseif($modulo=="presentacionprograma")
@include('adminprograma.presentacion.vue')

@elseif($modulo=="organigramaprograma")
@include('adminprograma.organigrama.vue')

@elseif($modulo=="datosprograma")
@include('adminprograma.datosprograma.vue')

@elseif($modulo=="estadisticoprograma")
@include('adminprograma.estadistico.vue')

{{-- Modulo 8 El Programa --}}

@elseif($modulo=="historiaprograma")
@include('moduloprograma1.historia.vue')

@elseif($modulo=="misionvisionprograma")
@include('moduloprograma1.misionvision.vue')

@elseif($modulo=="objetivosprograma")
@include('moduloprograma1.objetivos.vue')

{{-- Modulo 9 La Carrera --}}

@elseif($modulo=="perfilingresoprograma")
@include('moduloprograma2.perfilingreso.vue')

@elseif($modulo=="perfilegresoprograma")
@include('moduloprograma2.perfilegreso.vue')

@elseif($modulo=="competenciasprograma")
@include('moduloprograma2.competencias.vue')

@elseif($modulo=="campoocupacionalprograma")
@include('moduloprograma2.campoocupacional.vue')

{{-- Modulo 9 La Carrera --}}

@elseif($modulo=="planestudioprograma")
@include('moduloprograma3.planestudio.vue')

{{-- Modulo 10 Grados y Titulos --}}

@elseif($modulo=="gradotituloprograma")
@include('moduloprograma4.gradotitulo.vue')

{{-- Modulo 11 Docente --}}

@elseif($modulo=="docenteprograma")
@include('moduloprograma5.docentes.vue')

{{-- Modulo 12 Infraestructura --}}

@elseif($modulo=="infraestructuraprograma")
@include('moduloprograma6.infraestructura.vue')

@endif

<script type="text/javascript">

function redondear(num) {
    return +(Math.round(num + "e+2")  + "e-2");
}

function recorrertb(idtb){

    var cont=1;
        $("#"+idtb+" tbody tr").each(function (index)
        {

            $(this).children("td").each(function (index2)
            {
               //alert(index+'-'+index2);

               if(index2==0){
                  $(this).text(cont);
                  cont++;
               }


            })

        })
  }

  function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg': case 'JPG': case 'GIF': case 'PNG': case 'JPEG': case 'jpe': case 'JPE':
            return true;
        break;
        default:
            return false;
        break;
    }
}

function soloNumeros(e){
  var key = window.Event ? e.which : e.keyCode
  return ((key >= 48 && key <= 57) || (key==8) || (key==35) || (key==34) || (key==46));
}

function noEscribe(e){
  var key = window.Event ? e.which : e.keyCode
  return (key==null);
}

function EscribeLetras(e,ele){
  var text=$(ele).val();
  text=text.toUpperCase();
   var pos=posicionCursor(ele);
  $(ele).val(text);

  ponCursorEnPos(pos,ele);
}


function ponCursorEnPos(pos,laCaja){  
    if(typeof document.selection != 'undefined' && document.selection){        //método IE 
        var tex=laCaja.value; 
        laCaja.value='';  
        laCaja.focus(); 
        var str = document.selection.createRange();  
        laCaja.value=tex; 
        str.move("character", pos);  
        str.moveEnd("character", 0);  
        str.select(); 
    } 
    else if(typeof laCaja.selectionStart != 'undefined'){                    //método estándar 
        laCaja.setSelectionRange(pos,pos);  
        //forzar_focus();            //debería ser focus(), pero nos salta el evento y no queremos 
    } 
}  

function posicionCursor(element)
{
       var tb = element;
        var cursor = -1;

        // IE
        if (document.selection && (document.selection != 'undefined'))
        {
            var _range = document.selection.createRange();
            var contador = 0;
            while (_range.move('character', -1))
                contador++;
            cursor = contador;
        }
       // FF
        else if (tb.selectionStart >= 0)
            cursor = tb.selectionStart;

       return cursor;
}

function pad (n, length) {
    var  n = n.toString();
    while(n.length < length)
         n = "0" + n;
    return n;
}

    </script>