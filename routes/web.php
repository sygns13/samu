<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    //return view('web/fec/index');
    return redirect('login');
});



Route::group(['middleware' => 'auth'], function () {


    Route::get('salir', function () {
        Auth::logout();
        return redirect('login');
    });


    Route::get('usuarios','UserController@index1');
    Route::get('miperfil','UserController@index2');

    Route::get('diagnosticoscie', 'CieDiagnosticoController@index1');
    Route::get('personalsalud', 'PersonalController@index1');
    Route::get('recepcion_llamadas', 'Proceso1RecepcionLlamadaController@index1');


    Route::resource('intranet/diagnosticoscie','CieDiagnosticoController');
    Route::resource('intranet/personal','PersonalController');
    Route::resource('intranet/proceso1','Proceso1RecepcionLlamadaController');


    Route::get('intranet/diagnosticoscie/altabaja/{id}/{var}','CieDiagnosticoController@altabaja');
    Route::get('intranet/personal/altabaja/{id}/{var}','PersonalController@altabaja');

   /*  
    Route::get('intranet/banner', 'BannerController@index1');
    Route::get('intranet/presentacion', 'PresentacionController@index1');
    Route::get('intranet/datosfec', 'FacultadController@index1');
    Route::get('intranet/noticias', 'NoticiaController@index1');
    Route::get('intranet/eventos', 'EventoController@index1');
    Route::get('intranet/comunicados', 'ComunicadoController@index1');
    Route::get('intranet/redessolicales', 'RedsocialController@index1');
    Route::get('intranet/historia', 'HistoriaController@index1');
    Route::get('intranet/misionvision', 'MisionvisionController@index1');
    Route::get('intranet/politicas', 'PoliticacalidadController@index1');
    Route::get('intranet/objetivos', 'ObjetivoController@index1');
    Route::get('intranet/directorio', 'DirectorioController@index1');
    Route::get('intranet/documentosnormativos', 'DocumentoController@index1');
    Route::get('intranet/gestioncalidad', 'GestioncalidadController@index1');
    Route::get('intranet/revistas', 'RevistaController@index1');
    Route::get('intranet/basedatos', 'AccesobasedatoController@index1');
    Route::get('intranet/antiplagio', 'AntiplagioController@index1');
    Route::get('intranet/galeria', 'GaleriaController@index1');
    Route::get('intranet/estudiantesfec', 'EstudianteController@index1');
    Route::get('intranet/docentesfec', 'DocentesfacultadController@index1');
    Route::get('intranet/resoluciones', 'DocumentoController@index2');
    Route::get('intranet/actas', 'DocumentoController@index3');
    Route::get('intranet/tupa', 'FacultadController@index2');
    
    Route::get('intranet/bannerprograma', 'BannerController@index2');
    Route::get('intranet/presentacionprograma', 'PresentacionController@index2');
    Route::get('intranet/organigramaprograma', 'ProgramaestudioController@index2');
    Route::get('intranet/datosprograma', 'ProgramaestudioController@index1');
    Route::get('intranet/estadisticosprograma', 'DatoestadisticoController@index1');
    Route::get('intranet/historiaprograma', 'HistoriaController@index2');
    Route::get('intranet/misionvisionprograma', 'MisionvisionController@index2');
    Route::get('intranet/objetivosprograma', 'ObjetivoController@index2');
    Route::get('intranet/perfilingresoprograma', 'PerfileController@index1');
    Route::get('intranet/perfilegresoprograma', 'PerfileController@index2');
    Route::get('intranet/competenciasprograma', 'CompetenciaController@index1');
    Route::get('intranet/camposocupacionalesprograma', 'CampoocupacionalController@index1');
    Route::get('intranet/planestudiosprograma', 'PlanestudioController@index1');
    Route::get('intranet/gradosprograma', 'GradotituloController@index1');
    Route::get('intranet/docentesprograma', 'DocenteController@index1');
    Route::get('intranet/infraestructuraprograma', 'InfraestructuraController@index1');






    Route::resource('usuario','UserController');
    Route::resource('intranet/bannerre', 'BannerController');
    Route::resource('intranet/presentacionre', 'PresentacionController');
    Route::resource('intranet/datosfecre', 'FacultadController');
    Route::resource('intranet/noticiasre', 'NoticiaController');
    Route::resource('intranet/eventosre', 'EventoController');
    Route::resource('intranet/comunicadosre', 'ComunicadoController');
    Route::resource('intranet/redessolicalesre', 'RedsocialController');
    Route::resource('intranet/historiare', 'HistoriaController');
    Route::resource('intranet/misionvisionre', 'MisionvisionController');
    Route::resource('intranet/politicasre', 'PoliticacalidadController');
    Route::resource('intranet/objetivosre', 'ObjetivoController');
    Route::resource('intranet/directoriore', 'DirectorioController');
    Route::resource('intranet/documentosnormativosre', 'DocumentoController');
    Route::resource('intranet/gestioncalidadre', 'GestioncalidadController');
    Route::resource('intranet/revistasre', 'RevistaController');
    Route::resource('intranet/basedatosre', 'AccesobasedatoController');
    Route::resource('intranet/antiplagiore', 'AntiplagioController');
    Route::resource('intranet/galeriare', 'GaleriaController');
    Route::resource('intranet/estudiantesfecre', 'EstudianteController');
    Route::resource('intranet/docentesfecre', 'DocentesfacultadController');
    Route::resource('intranet/resolucionesre', 'DocumentoController');
    
    Route::resource('intranet/bannerprogramare', 'BannerController');
    Route::resource('intranet/presentacionprogramare', 'PresentacionController');
    Route::resource('intranet/datosprogramare', 'ProgramaestudioController');
    Route::resource('intranet/estadisticosprogramare', 'DatoestadisticoController');
    Route::resource('intranet/historiaprogramare', 'HistoriaController');
    Route::resource('intranet/misionvisionprogramare', 'MisionvisionController');
    Route::resource('intranet/objetivosprogramare', 'ObjetivoController');
    Route::resource('intranet/perfilprogramare', 'PerfileController');
    Route::resource('intranet/competenciasprogramare', 'CompetenciaController');
    Route::resource('intranet/camposocupacionalesprogramare', 'CampoocupacionalController');
    Route::resource('intranet/planestudiosprogramare', 'PlanestudioController');
    Route::resource('intranet/gradosprogramare', 'GradotituloController');
    Route::resource('intranet/docentesprogramare', 'DocenteController');
    Route::resource('intranet/infraestructuraprogramare', 'InfraestructuraController');

    

    Route::resource('intranet/imagennoticiasre', 'ImagennoticiaController');
    Route::resource('intranet/imageneventosre', 'ImageneventoController');
    Route::resource('intranet/imagencomunicadosre', 'ImagencomunicadoController');
    Route::resource('intranet/imagenhistoriare', 'ImagenhistoriaController');
    Route::resource('intranet/imagengaleriare', 'ImagengaleriaController');

    Route::get('usuario/altabaja/{id}/{var}','UserController@altabaja');
    Route::get('usuario/verpersona/{dni}','UserController@verpersona');

    Route::get('intranet/bannerre/altabaja/{id}/{var}', 'BannerController@altabaja');
    Route::get('intranet/presentacionre/altabaja/{id}/{var}', 'PresentacionController@altabaja');
    Route::get('intranet/datosfecre/altabaja/{id}/{var}', 'FacultadController@altabaja');
    Route::get('intranet/noticiasre/altabaja/{id}/{var}', 'NoticiaController@altabaja');
    Route::get('intranet/eventosre/altabaja/{id}/{var}', 'EventoController@altabaja');
    Route::get('intranet/comunicadosre/altabaja/{id}/{var}', 'ComunicadoController@altabaja');
    Route::get('intranet/redessolicalesre/altabaja/{id}/{var}', 'RedsocialController@altabaja');
    Route::get('intranet/historiare/altabaja/{id}/{var}', 'HistoriaController@altabaja');
    Route::get('intranet/misionvisionre/altabaja/{id}/{var}', 'MisionvisionController@altabaja');
    Route::get('intranet/politicasre/altabaja/{id}/{var}', 'PoliticacalidadController@altabaja');
    Route::get('intranet/objetivosre/altabaja/{id}/{var}', 'ObjetivoController@altabaja');
    Route::get('intranet/directoriore/altabaja/{id}/{var}', 'DirectorioController@altabaja');
    Route::get('intranet/documentosnormativosre/altabaja/{id}/{var}', 'DocumentoController@altabaja');
    Route::get('intranet/gestioncalidadre/altabaja/{id}/{var}', 'GestioncalidadController@altabaja');
    Route::get('intranet/revistasre/altabaja/{id}/{var}', 'RevistaController@altabaja');
    Route::get('intranet/basedatosre/altabaja/{id}/{var}', 'AccesobasedatoController@altabaja');
    Route::get('intranet/antiplagiore/altabaja/{id}/{var}', 'AntiplagioController@altabaja');
    Route::get('intranet/galeriare/altabaja/{id}/{var}', 'GaleriaController@altabaja');
    Route::get('intranet/estudiantesfecre/altabaja/{id}/{var}', 'EstudianteController@altabaja');
    Route::get('intranet/docentesfecre/altabaja/{id}/{var}', 'DocentesfacultadController@altabaja');
    Route::get('intranet/resolucionesre/altabaja/{id}/{var}', 'DocumentoController@altabaja');
    Route::get('intranet/bannerprogramare/altabaja/{id}/{var}', 'BannerController@altabaja');
    Route::get('intranet/presentacionprogramare/altabaja/{id}/{var}', 'PresentacionController@altabaja');
    Route::get('intranet/estadisticosprogramare/altabaja/{id}/{var}', 'DatoestadisticoController@altabaja');
    Route::get('intranet/historiaprogramare/altabaja/{id}/{var}', 'HistoriaController@altabaja');
    Route::get('intranet/misionvisionprogramare/altabaja/{id}/{var}', 'MisionvisionController@altabaja');
    Route::get('intranet/objetivosprogramare/altabaja/{id}/{var}', 'ObjetivoController@altabaja');
    Route::get('intranet/perfilprogramare/altabaja/{id}/{var}', 'PerfileController@altabaja');
    Route::get('intranet/competenciasprogramare/altabaja/{id}/{var}', 'CompetenciaController@altabaja');
    Route::get('intranet/camposocupacionalesprogramare/altabaja/{id}/{var}', 'CampoocupacionalController@altabaja');
    Route::get('intranet/planestudiosprogramare/altabaja/{id}/{var}', 'PlanestudioController@altabaja');
    Route::get('intranet/gradosprogramare/altabaja/{id}/{var}', 'GradotituloController@altabaja');
    Route::get('intranet/docentesprogramare/altabaja/{id}/{var}', 'DocenteController@altabaja');
    Route::get('intranet/infraestructuraprogramare/altabaja/{id}/{var}', 'InfraestructuraController@altabaja');


    Route::post('usuario/miperfil','UserController@miperfil');
    Route::post('usuario/modificarclave','UserController@modificarclave');

    Route::post('persona/buscarDNI','PersonaController@buscarDNI');

    Route::post('intranet/datosfecre/tupa','FacultadController@tupa');
    Route::post('intranet/datosprogramare/configuracion','ProgramaestudioController@configuracion');
    Route::post('intranet/datosprogramare/organigrama','ProgramaestudioController@organigrama');


    Route::delete('intranet/politicasre/deleteimg/{id}', 'PoliticacalidadController@deleteImg');
    Route::delete('intranet/politicasre/deletefile/{id}', 'PoliticacalidadController@deleteFile');
    Route::delete('intranet/directoriore/deleteimg/{id}', 'DirectorioController@deleteImg');
    Route::delete('intranet/revistasre/deleteimg/{id}', 'RevistaController@deleteImg');
    Route::delete('intranet/revistasre/deletefile/{id}', 'RevistaController@deleteFile');
    Route::delete('intranet/basedatosre/deleteimg/{id}', 'AccesobasedatoController@deleteImg');
    Route::delete('intranet/basedatosre/deletefile/{id}', 'AccesobasedatoController@deleteFile');
    Route::delete('intranet/antiplagiore/deleteimg/{id}', 'AntiplagioController@deleteImg');
    Route::delete('intranet/antiplagiore/deletefile/{id}', 'AntiplagioController@deleteFile');
    Route::delete('intranet/estudiantesfecre/deleteimg/{id}', 'EstudianteController@deleteImg');
    Route::delete('intranet/estudiantesfecre/deletefile/{id}', 'EstudianteController@deleteFile');
    Route::delete('intranet/docentesfecre/deleteimg/{id}', 'DocentesfacultadController@deleteImg');
    Route::delete('intranet/docentesfecre/deletefile/{id}', 'DocentesfacultadController@deleteFile');
    Route::delete('intranet/perfilprogramare/deleteimg/{id}', 'PerfileController@deleteImg');
    Route::delete('intranet/perfilprogramare/deletefile/{id}', 'PerfileController@deleteFile');
    Route::delete('intranet/competenciasprogramare/deleteimg/{id}', 'CompetenciaController@deleteImg');
    Route::delete('intranet/competenciasprogramare/deletefile/{id}', 'CompetenciaController@deleteFile');
    Route::delete('intranet/camposocupacionalesprogramare/deleteimg/{id}', 'CampoocupacionalController@deleteImg');
    Route::delete('intranet/camposocupacionalesprogramare/deletefile/{id}', 'CampoocupacionalController@deleteFile');
    Route::delete('intranet/planestudiosprogramare/deleteimg/{id}', 'PlanestudioController@deleteImg');
    Route::delete('intranet/planestudiosprogramare/deletefile/{id}', 'PlanestudioController@deleteFile');
    Route::delete('intranet/gradosprogramare/deleteimg/{id}', 'GradotituloController@deleteImg');
    Route::delete('intranet/infraestructuraprogramare/deleteimg/{id}', 'InfraestructuraController@deleteImg');
    Route::delete('intranet/infraestructuraprogramare/deletefile/{id}', 'InfraestructuraController@deleteFile');
     */
 
});
