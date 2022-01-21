<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\Proceso1RecepcionLlamada;
use App\Samu;
use App\Turno;
use App\TipoLlamada;
use App\LocalizacionLlamadas;

use stdClass;
use DB;
use Storage;
set_time_limit(600);

class Proceso1RecepcionLlamadaController extends Controller
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

            $samus=Samu::orderBy('id')->where('borrado','0')->get();
            $turnos=Turno::orderBy('id')->where('borrado','0')->get();
            $tipoLlamadas=TipoLlamada::orderBy('id')->where('borrado','0')->get();
            $localizacionLlamadas=LocalizacionLlamadas::orderBy('id')->where('borrado','0')->get();
            $operadors=Personal::where('cargo_id','4')->where('borrado','0')->orderBy('id')->get();

            $modulo="proceso1";

            return view('proceso1.recepcionllamadas.index',compact('tipouser','modulo','samus','turnos','tipoLlamadas','localizacionLlamadas','operadors'));
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
        ini_set('memory_limit','256M');
        ini_set('upload_max_filesize','20M');

        
/*         $fillobject = $request->fillobject;

        var_dump($fillobject);


        return $fillobject;
 */
        $codigo=$request->codigo;
        $samu_id=$request->samu_id;
        $personal_id=$request->personal_id;
        $turno_id=$request->turno_id;
        $fecha=$request->fecha;
        $hora_ingreso=$request->hora_ingreso;
        $llamada_pertinente=$request->llamada_pertinente;
        $tipo_llamada_id=$request->tipo_llamada_id;
        $localizacion_llamada_id=$request->localizacion_llamada_id;
        $derivada=$request->derivada;
        $observaciones=$request->observaciones;

        if($observaciones == null)
        {
            $observaciones="";
        }

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:proceso1_recepcion_llamadas,codigo'.',1,borrado');

        $input3  = array('samu_id' => $samu_id);
        $reglas3 = array('samu_id' => 'required');

        $input4  = array('personal_id' => $personal_id);
        $reglas4 = array('personal_id' => 'required');

        $input5  = array('turno_id' => $turno_id);
        $reglas5 = array('turno_id' => 'required');

        $input6  = array('fecha' => $fecha);
        $reglas6 = array('fecha' => 'required');

        $input7  = array('hora_ingreso' => $hora_ingreso);
        $reglas7 = array('hora_ingreso' => 'required');

        $input8  = array('llamada_pertinente' => $llamada_pertinente);
        $reglas8 = array('llamada_pertinente' => 'required');

        $input9  = array('tipo_llamada_id' => $tipo_llamada_id);
        $reglas9 = array('tipo_llamada_id' => 'required');

        $input10  = array('localizacion_llamada_id' => $localizacion_llamada_id);
        $reglas10 = array('localizacion_llamada_id' => 'required');

        $input11  = array('derivada' => $derivada);
        $reglas11 = array('derivada' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);
        $validator11 = Validator::make($input11, $reglas11);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código del Proceso';
            $selector='txtcodigo';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código del Proceso ya se encuentra registrado';
            $selector='txtcodigo';
        }
        elseif ($validator3->fails() || \intval($samu_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar una Base Válida';
            $selector='cbusamu_id';
        }
        elseif ($validator4->fails() || \intval($personal_id) == 0)
        {
            $result='0';
            $msj='Debe de seleccionar un Operador de Registro de Llamada';
            $selector='cbupersonal_id';
        }
        elseif ($validator5->fails() || \intval($turno_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un Turno Válido';
            $selector='cbuturno_id';
        }
        elseif ($validator6->fails() || strlen($fecha) != 10)
        {
            $result='0';
            $msj='Ingrese una Fecha válida';
            $selector='txtfecha';
        }
        elseif ($validator7->fails())
        {
            $result='0';
            $msj='Ingrese una Hora válida';
            $selector='txthora_ingreso';
        }
        elseif ($validator8->fails())
        {
            $result='0';
            $msj='Seleccione si es una Llamada Pertinente';
            $selector='cbullamada_pertinente';
        }
        elseif ($validator9->fails())
        {
            $result='0';
            $msj='Debe seleccionar un Tipo de Llamada';
            $selector='cbutipo_llamada_id';
        }
        elseif ($validator10->fails())
        {
            $result='0';
            $msj='Debe seleccionar una Localización de Llamada';
            $selector='cbulocalizacion_llamada_id';
        }
        elseif ($validator11->fails())
        {
            $result='0';
            $msj='Seleccione si es una Llamada Derivada';
            $selector='cbuderivada';
        }
        else{

            $registro = new Proceso1RecepcionLlamada;

            $registro->codigo=$codigo;
            $registro->samu_id=$samu_id;
            $registro->personal_id=$personal_id;
            $registro->turno_id=$turno_id;
            $registro->fecha=$fecha;
            $registro->hora_ingreso=$hora_ingreso;
            $registro->llamada_pertinente=$llamada_pertinente;
            $registro->tipo_llamada_id=$tipo_llamada_id;
            $registro->localizacion_llamada_id=$localizacion_llamada_id;
            $registro->derivada=$derivada;
            $registro->observaciones=$observaciones;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->user_id=Auth::user()->id;

            $registro->save();

            $msj='Se ingresó correctamente el registro';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
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
