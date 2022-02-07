<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\Proceso1RecepcionLlamada;
use App\Proceso2Consejeria;
use App\TipoDocumentoPaciente;
use App\Seguro;
use App\Prioridad;
use App\CieDiagnostico;
use App\Paciente;

use stdClass;
use DB;
use Storage;
set_time_limit(600);

class Proceso2ConsejeriaController extends Controller
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
            $seguros=Seguro::where('borrado','0')->orderBy('id')->get();
            $prioridads=Prioridad::where('borrado','0')->orderBy('id')->get();
            $medicos=Personal::where(function($query){
                $query->where('cargo_id','1');
                $query->orWhere('cargo_id','2');
                })
            ->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get();

            $modulo="proceso2";

            return view('proceso2.consejeriamedica.index',compact('tipouser','modulo','tipoDocumentos','seguros','prioridads','medicos'));
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

        $codigo=$request->codigo;
        $hora=$request->hora;
        $personal_id=$request->personal_id;
        $prioridad_id=$request->prioridad_id;
        $cie_diagnostico_id=$request->cie_diagnostico_id;
        $requiere_despacho=$request->requiere_despacho;

        //pacientes
        $tipo_documento_paciente_id=$request->tipo_documento_paciente_id;
        $nro_documento=$request->nro_documento;
        $apellidos=$request->apellidos;
        $nombres=$request->nombres;
        $tipo_telefono=$request->tipo_telefono;
        $telefono=$request->telefono;
        $genero=$request->genero;
        $edad=$request->edad;
        $tipo_edad=$request->tipo_edad;
        $seguro_id=$request->seguro_id;

        if($telefono == null)
        {
            $telefono="";
        }

        if($nro_documento == null)
        {
            $nro_documento="";
        }

        if($edad == null || $edad == "")
        {
            $edad = null;
        }


        $result='1';
        $msj='';
        $selector='';


        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:proceso2_consejerias,codigo'.',1,borrado');

        $input3  = array('hora' => $hora);
        $reglas3 = array('hora' => 'required');

        $input4  = array('personal_id' => $personal_id);
        $reglas4 = array('personal_id' => 'required');

        $input5  = array('prioridad_id' => $prioridad_id);
        $reglas5 = array('prioridad_id' => 'required');

        $input6  = array('cie_diagnostico_id' => $cie_diagnostico_id);
        $reglas6 = array('cie_diagnostico_id' => 'required');

        $input7  = array('requiere_despacho' => $requiere_despacho);
        $reglas7 = array('requiere_despacho' => 'required');

        $input8  = array('tipo_documento_paciente_id' => $tipo_documento_paciente_id);
        $reglas8 = array('tipo_documento_paciente_id' => 'required');

        $input9  = array('nro_documento' => $nro_documento);
        $reglas9 = array('nro_documento' => 'required');

        $input10  = array('apellidos' => $apellidos);
        $reglas10 = array('apellidos' => 'required');

        $input11  = array('nombres' => $nombres);
        $reglas11 = array('nombres' => 'required');

        $input12  = array('tipo_telefono' => $tipo_telefono);
        $reglas12 = array('tipo_telefono' => 'required');

        $input13  = array('genero' => $genero);
        $reglas13 = array('genero' => 'required');

        $input14  = array('tipo_edad' => $tipo_edad);
        $reglas14 = array('tipo_edad' => 'required');

        $input15  = array('seguro_id' => $seguro_id);
        $reglas15 = array('seguro_id' => 'required');

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
        $validator15 = Validator::make($input15, $reglas15);

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
            $msj='Debe de ingresar la hora de Atención';
            $selector='txthora';
        }
        elseif ($validator4->fails() || \intval($personal_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un Personal de Salud Responsable Válido';
            $selector='cbupersonal_id';
        }
        elseif ($validator5->fails() || \intval($prioridad_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un registro de Prioridad Válido';
            $selector='cbuprioridad_id';
        }
        elseif ($validator6->fails() || strlen($cie_diagnostico_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un registro de Diagnóstico CIE - 10 Válido';
            $selector='txtcie_diagnostico_id';
        }
        elseif ($validator7->fails() || strlen($requiere_despacho) == 0)
        {
            $result='0';
            $msj='Debe seleccionar si requiere o no Despacho';
            $selector='ccburequiere_despacho';
        }
        elseif ($validator8->fails() || strlen($tipo_documento_paciente_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un registro de Tipo de Documento de paciente Válido';
            $selector='cbutipo_documento_paciente_id';
        }

        elseif ($validator10->fails())
        {
            $result='0';
            $msj='Ingrese los Apellidos del Paciente';
            $selector='txtapellidos';
        }
        elseif ($validator11->fails())
        {
            $result='0';
            $msj='Ingrese los Nombres del Paciente';
            $selector='txtnombres';
        }
        elseif ($validator12->fails())
        {
            $result='0';
            $msj='Seleccione el tipo de teléfono del Paciente';
            $selector='cbutipo_telefono';
        }
        elseif ($validator13->fails())
        {
            $result='0';
            $msj='Seleccione el género del Paciente';
            $selector='cbugenero';
        }
        elseif ($validator14->fails())
        {
            $result='0';
            $msj='Seleccione el tipo de edad del Paciente';
            $selector='cbutipo_edad';
        }
        elseif ($validator15->fails())
        {
            $result='0';
            $msj='Seleccione el Seguro del Paciente';
            $selector='cbuseguro_id';
        }
        else{

            $registro = new Proceso2Consejeria;

            $registro->codigo=$codigo;
            $registro->hora=$hora;
            $registro->personal_id=$personal_id;
            $registro->prioridad_id=$prioridad_id;
            $registro->cie_diagnostico_id=$cie_diagnostico_id;
            $registro->requiere_despacho=$requiere_despacho;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->user_id=Auth::user()->id;

            $registro->save();

            $paciente = new Paciente;

            $paciente->tipo_documento_paciente_id=$tipo_documento_paciente_id;
            $paciente->nro_documento=$nro_documento;
            $paciente->apellidos=$apellidos;
            $paciente->nombres=$nombres;
            $paciente->tipo_telefono=$tipo_telefono;
            $paciente->telefono=$telefono;
            $paciente->genero=$genero;
            $paciente->edad=$edad;
            $paciente->tipo_edad=$tipo_edad;
            $paciente->seguro_id=$seguro_id;
            $paciente->proceso2_consejeria_id=$registro->id;
            $paciente->activo='1';
            $paciente->borrado='0';

            $paciente->save();

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
