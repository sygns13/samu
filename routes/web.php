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
    Route::get('consejeria_medica', 'Proceso2ConsejeriaController@index1');
    Route::get('despacho_unidad', 'Proceso3DespachoMovilController@index1');
    Route::get('asistencia_medica', 'Proceso4AsistenciaMedicaController@index1');

    Route::get('reporte1', 'ReporteController@index1');
    Route::get('reporte2', 'ReporteController@index2');


    Route::resource('intranet/diagnosticoscie','CieDiagnosticoController');
    Route::resource('intranet/personal','PersonalController');
    Route::resource('intranet/proceso1','Proceso1RecepcionLlamadaController');
    Route::resource('intranet/proceso2','Proceso2ConsejeriaController');
    Route::resource('intranet/proceso3','Proceso3DespachoMovilController');
    Route::resource('intranet/proceso4','Proceso4AsistenciaMedicaController');
    Route::resource('intranet/reporte','ReporteController');
    Route::resource('usuario','UserController');


    Route::get('intranet/diagnosticoscie/altabaja/{id}/{var}','CieDiagnosticoController@altabaja');
    Route::get('intranet/diagnosticos/getdiagnosticos','CieDiagnosticoController@GetDiagnosticosCIE');
    Route::get('intranet/personal/altabaja/{id}/{var}','PersonalController@altabaja');
    Route::get('usuario/altabaja/{id}/{var}','UserController@altabaja');

    Route::post('intranet/buscarDocPaciente','PersonaController@buscarDocPaciente');
    Route::post('intranet/buscardiagnosticoscie','CieDiagnosticoController@buscardiagnosticoscie');
    Route::post('intranet/proceso4cargarfile','Proceso4AsistenciaMedicaController@cargarfile');
    Route::post('intranet/reporteestadistico','ReporteController@reporteestadistico');


    Route::post('usuario/miperfil','UserController@miperfil');
    Route::post('usuario/modificarclave','UserController@modificarclave');


 
});
