<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\Proceso1RecepcionLlamada;
use App\Proceso3DespachoMovil;
use App\Samu;
use App\Turno;
use App\TipoLlamada;
use App\LocalizacionLlamadas;
use App\TipoAtencion;
use App\Departamento;
use App\Provincia;
use App\Distrito;

use stdClass;
use DB;
use Storage;
set_time_limit(600);


class Proceso3DespachoMovilController extends Controller
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

            $tipoAtencion=TipoAtencion::orderBy('id')->where('borrado','0')->get();
            //$departamentos=Departamento::orderBy('id')->where('borrado','0')->get();
            $provincias=Provincia::orderBy('id')->where('departamento_id','2')->where('borrado','0')->get();
            $distritos=DB::table('distritos')
            ->join('provincias', 'provincias.id', '=', 'distritos.provincia_id')
            ->where('provincias.departamento_id','2')
            ->orderBy('distritos.id')->where('distritos.borrado','0')
            ->select(
                'distritos.id',
                'distritos.nombre',
                'distritos.provincia_id',
                'distritos.codigo',
                'distritos.activo',
                'distritos.borrado'
            )
            ->get();

            $conductors=Personal::where('cargo_id','5')->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get();

            $modulo="proceso3";

            return view('proceso3.despachounidad.index',compact('tipouser','modulo','tipoAtencion','provincias','distritos','conductors'));
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
        $despacho_efectivo=$request->despacho_efectivo;
        $oportuno=$request->oportuno;
        $hora_indicacion=$request->hora_indicacion;
        $hora_salida_base=$request->hora_salida_base;
        $hora_llegada=$request->hora_llegada;
        $tipo_atencion_id=$request->tipo_atencion_id;
        $distrito_id=$request->distrito_id;
        $direccion=$request->direccion;
        $tipo_emergencia=$request->tipo_emergencia;
        $hora_salida_foco=$request->hora_salida_foco;
        $hora_regreso_base=$request->hora_regreso_base;
        $personal_id=$request->personal_id;
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
        $reglas2 = array('codigo' => 'unique:proceso3_despacho_movils,codigo'.',1,borrado');

        $input3  = array('despacho_efectivo' => $despacho_efectivo);
        $reglas3 = array('despacho_efectivo' => 'required');

        $input4  = array('oportuno' => $oportuno);
        $reglas4 = array('oportuno' => 'required');

        $input5  = array('hora_indicacion' => $hora_indicacion);
        $reglas5 = array('hora_indicacion' => 'required');

        $input6  = array('hora_salida_base' => $hora_salida_base);
        $reglas6 = array('hora_salida_base' => 'required');

        $input7  = array('hora_llegada' => $hora_llegada);
        $reglas7 = array('hora_llegada' => 'required');

        $input8  = array('tipo_atencion_id' => $tipo_atencion_id);
        $reglas8 = array('tipo_atencion_id' => 'required');

        $input9  = array('distrito_id' => $distrito_id);
        $reglas9 = array('distrito_id' => 'required');

        $input10  = array('direccion' => $direccion);
        $reglas10 = array('direccion' => 'required');

        $input11  = array('tipo_emergencia' => $tipo_emergencia);
        $reglas11 = array('tipo_emergencia' => 'required');
        
        $input12  = array('hora_salida_foco' => $hora_salida_foco);
        $reglas12 = array('hora_salida_foco' => 'required');
        
        $input13  = array('hora_regreso_base' => $hora_regreso_base);
        $reglas13 = array('hora_regreso_base' => 'required');

        $input14  = array('personal_id' => $personal_id);
        $reglas14 = array('personal_id' => 'required');

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
        $validator12 = Validator::make($input12, $reglas12);
        $validator13 = Validator::make($input13, $reglas13);
        $validator14 = Validator::make($input14, $reglas14);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código de Atención';
            $selector='txtcodigo';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código de Atención ya se encuentra registrado';
            $selector='txtcodigo';
        }
        elseif ($validator3->fails())
        {
            $result='0';
            $msj='Debe de seleccionar el Despacho Efectivo';
            $selector='cbudespacho_efectivo';
        }
        elseif ($validator4->fails())
        {
            $result='0';
            $msj='Debe de seleccionar si la Atención es Oportuna';
            $selector='cbuoportuno';
        }
        elseif ($validator5->fails())
        {
            $result='0';
            $msj='Debe de ingresar la Hora de Indicación';
            $selector='txthora_indicacion';
        }
        elseif ($validator6->fails())
        {
            $result='0';
            $msj='Debe de ingresar la Hora de Salida de Base';
            $selector='txthora_salida_base';
        }
        elseif ($validator7->fails())
        {
            $result='0';
            $msj='Debe de ingresar la Hora de Llegada';
            $selector='txthora_llegada';
        }
        elseif ($validator8->fails() || intval($tipo_atencion_id)==0)
        {
            $result='0';
            $msj='Debe de seleccionar el Tipo de Atención';
            $selector='cbutipo_atencion_id';
        }
        elseif ($validator9->fails() || intval($distrito_id)==0)
        {
            $result='0';
            $msj='Debe de seleccionar el Distrito';
            $selector='cbudistrito_id';
        }
        elseif ($validator10->fails())
        {
            $result='0';
            $msj='Ingrese la Dirección';
            $selector='txtdireccion';
        }
        elseif ($validator11->fails())
        {
            $result='0';
            $msj='Debe de seleccionar el Tipo de Emergencia';
            $selector='cbutipo_emergencia';
        }
        elseif ($validator12->fails())
        {
            $result='0';
            $msj='Ingrese la Hora de Salida de Foco';
            $selector='txthora_salida_foco';
        }
        elseif ($validator13->fails())
        {
            $result='0';
            $msj='Ingrese la Hora de Regreso a Base';
            $selector='txthora_regreso_base';
        }
        elseif ($validator14->fails() || intval($personal_id)==0)
        {
            $result='0';
            $msj='Debe de seleccionar el Personal Conductor';
            $selector='cbupersonal_id';
        }
        else{

            $registro = new Proceso3DespachoMovil;

            $registro->codigo=$codigo;
            $registro->despacho_efectivo=$despacho_efectivo;
            $registro->oportuno=$oportuno;
            $registro->hora_indicacion=$hora_indicacion;
            $registro->hora_salida_base=$hora_salida_base;
            $registro->hora_llegada=$hora_llegada;
            $registro->tipo_atencion_id=$tipo_atencion_id;
            $registro->distrito_id=$distrito_id;
            $registro->direccion=$direccion;
            $registro->tipo_emergencia=$tipo_emergencia;
            $registro->hora_salida_foco=$hora_salida_foco;
            $registro->hora_regreso_base=$hora_regreso_base;
            $registro->personal_id=$personal_id;
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
