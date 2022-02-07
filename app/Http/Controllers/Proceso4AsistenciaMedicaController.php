<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\Proceso4AsistenciaMedica;
use App\PacienteAsistencia;
use App\EnfermedadActual;
use App\ExamenPreferencial;
use App\MecanismosLesion;
use App\Responsable;
use App\Diagnostico;
use App\Procedimiento;
use App\Tratamiento;
use App\EstablecimientoDestino;

use App\TipoDocumentoPaciente;
use App\Seguro;

use stdClass;
use DB;
use Storage;
set_time_limit(600);


class Proceso4AsistenciaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        if(accesoUser([1,2,3])){


            $idtipouser=Auth::user()->tipouser_id;
            $tipouser=Tipouser::find($idtipouser);

            $tipoDocumentos=TipoDocumentoPaciente::where('borrado','0')->orderBy('id')->get();
            $enfermeras=Personal::where('cargo_id','3')->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get();
            $medicos=Personal::where(function($query){
                $query->where('cargo_id','1');
                $query->orWhere('cargo_id','2');
                })
            ->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get();
            $seguros=Seguro::where('borrado','0')->orderBy('id')->get();

            $modulo="proceso4";

            return view('proceso4.asistenciamedica.index',compact('tipouser','modulo','tipoDocumentos','enfermeras','medicos', 'seguros'));
        }
        else
        {
            return redirect('home');    
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $request->diagnosticos1['cie_diagnostico_id'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
