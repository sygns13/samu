<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Tipouser;
use App\User;

use App\TipoDocumento;
use App\EstadoCivil;
use App\Cargo;
use App\Personal;

use stdClass;
use DB;
use Storage;
set_time_limit(600);

class PersonalController extends Controller
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

            $tipoDocumentos=TipoDocumento::orderBy('id')->where('borrado','0')->get();
            $estadoCivils=EstadoCivil::orderBy('id')->where('borrado','0')->get();
            $cargos=Cargo::orderBy('id')->where('borrado','0')->get();

            $modulo="personal";

            return view('base.personal.index',compact('tipouser','modulo','tipoDocumentos','estadoCivils','cargos'));
        }
        else
        {
            return redirect('home');    
        }
    }

    public function index(Request $request)
    {
        $buscar=$request->busca;

        $registros = DB::table('personals')
     ->join('tipo_documentos', 'tipo_documentos.id', '=', 'personals.tipo_documento_id')
     ->join('estado_civils', 'estado_civils.id', '=', 'personals.estado_civil_id')
     ->join('cargos', 'cargos.id', '=', 'personals.cargo_id')
     /* ->leftjoin('escuelas', 'escuelas.id', '=', 'personals.escuela_id') */
     ->where('personals.borrado','0')
     ->where(function($query) use ($buscar){
        $query->where('personals.nombres','like','%'.$buscar.'%');
        $query->orWhere('personals.apellidos','like','%'.$buscar.'%');
        $query->orWhere('personals.nro_documento','like','%'.$buscar.'%');
        $query->orWhere('cargos.descripcion','like','%'.$buscar.'%');
        $query->orWhere('personals.ocupacion','like','%'.$buscar.'%');
        })
     ->orderBy('cargos.descripcion')
     ->orderBy('personals.apellidos')
     ->orderBy('personals.nombres')
     ->orderBy('personals.nro_documento')
     ->select('personals.id',
                'personals.codigo',
                'personals.tipo_documento_id',
                'personals.nro_documento',
                'personals.fecha_nacimiento',
                'personals.apellidos',
                'personals.nombres',
                'personals.telefono',
                'personals.genero',
                'personals.edad',
                'personals.estado_civil_id',
                'personals.ocupacion',
                'personals.nro_colegiatura',
                'personals.cargo_id',
                'personals.activo',
                'personals.borrado',
                'personals.created_at',
                'personals.updated_at',
                'personals.user_id',
                'tipo_documentos.tipo as tipo_documento',
                'estado_civils.descripcion as estado_civil',
                'cargos.descripcion as cargo')
     ->paginate(30);

          return [
            'pagination'=>[
                'total'=> $registros->total(),
                'current_page'=> $registros->currentPage(),
                'per_page'=> $registros->perPage(),
                'last_page'=> $registros->lastPage(),
                'from'=> $registros->firstItem(),
                'to'=> $registros->lastItem(),
            ],
            'registros'=>$registros
        ];
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
        $tipo_documento_id=$request->tipo_documento_id;
        $nro_documento=$request->nro_documento;
        $fecha_nacimiento=$request->fecha_nacimiento;
        $apellidos=$request->apellidos;
        $nombres=$request->nombres;
        $telefono=$request->telefono;
        $genero=$request->genero;
        $edad=$request->edad;
        $estado_civil_id=$request->estado_civil_id;
        $ocupacion=$request->ocupacion;
        $nro_colegiatura=$request->nro_colegiatura;
        $cargo_id=$request->cargo_id;
        $activo=$request->activo;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:cie_diagnosticos,codigo'.',1,borrado');

        $input3  = array('nro_documento' => $nro_documento);
        $reglas3 = array('nro_documento' => 'required');

        $input4  = array('apellidos' => $apellidos);
        $reglas4 = array('apellidos' => 'required');

        $input5  = array('nombres' => $nombres);
        $reglas5 = array('nombres' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código del Personal';
            $selector='txtcodigo';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código del Personal ya se encuentra registrado';
            $selector='txtcodigo';
        }
        elseif ($validator3->fails() && \intval($tipo_documento_id) < 4)
        {
            $result='0';
            $msj='Debe ingresar el documento de identidad del Personal';
            $selector='txtnro_documento';
        }
        elseif ($validator4->fails())
        {
            $result='0';
            $msj='Debe de ingresar los Apellidos del Personal';
            $selector='txtapellidos';
        }
        elseif ($validator5->fails())
        {
            $result='0';
            $msj='Debe de ingresar los Nombres del Personal';
            $selector='txtnombres';
        }
        else{

            $regla0=DB::table('personals')
            ->where('personals.borrado','0')
            ->where('personals.tipo_documento_id',$tipo_documento_id)
            ->where('personals.nro_documento',$nro_documento)->count();

            if($regla0>0){
                $result='0';
                $msj='Ya se encuentra registrado un Personal con el documento de identidad ingresado';
                $selector='txtnro_documento';
            }
            else{
                $registro = new Personal;

                $registro->codigo=$codigo;
                $registro->tipo_documento_id=$tipo_documento_id;
                $registro->nro_documento=$nro_documento;
                $registro->fecha_nacimiento=$fecha_nacimiento;
                $registro->apellidos=$apellidos;
                $registro->nombres=$nombres;
                $registro->telefono=$telefono;
                $registro->genero=$genero;
                $registro->edad=$edad;
                $registro->estado_civil_id=$estado_civil_id;
                $registro->ocupacion=$ocupacion;
                $registro->nro_colegiatura=$nro_colegiatura;
                $registro->cargo_id=$cargo_id;
                $registro->activo=$activo;
                $registro->borrado='0';
                $registro->user_id=Auth::user()->id;
    
                $registro->save();

                $msj='Nuevo Personal Registrado con Éxito';
            }

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
        ini_set('memory_limit','256M');

        $codigo=$request->codigo;
        $tipo_documento_id=$request->tipo_documento_id;
        $nro_documento=$request->nro_documento;
        $fecha_nacimiento=$request->fecha_nacimiento;
        $apellidos=$request->apellidos;
        $nombres=$request->nombres;
        $telefono=$request->telefono;
        $genero=$request->genero;
        $edad=$request->edad;
        $estado_civil_id=$request->estado_civil_id;
        $ocupacion=$request->ocupacion;
        $nro_colegiatura=$request->nro_colegiatura;
        $cargo_id=$request->cargo_id;
        $activo=$request->activo;

        $result='1';
        $msj='';
        $selector='';


        
        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:cie_diagnosticos,codigo'.',1,borrado');

        $input3  = array('nro_documento' => $nro_documento);
        $reglas3 = array('nro_documento' => 'required');

        $input4  = array('apellidos' => $apellidos);
        $reglas4 = array('apellidos' => 'required');

        $input5  = array('nombres' => $nombres);
        $reglas5 = array('nombres' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código del Personal';
            $selector='txtcodigoE';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código del Personal ya se encuentra registrado';
            $selector='txtcodigoE';
        }
        elseif ($validator3->fails() && \intval($tipo_documento_id) < 4)
        {
            $result='0';
            $msj='Debe ingresar el documento de identidad del Personal';
            $selector='txtnro_documentoE';
        }
        elseif ($validator4->fails())
        {
            $result='0';
            $msj='Debe de ingresar los Apellidos del Personal';
            $selector='txtapellidosE';
        }
        elseif ($validator5->fails())
        {
            $result='0';
            $msj='Debe de ingresar los Nombres del Personal';
            $selector='txtnombresE';
        }
        else{

            $regla0=DB::table('personals')
            ->where('personals.borrado','0')
            ->where('personals.id','<>',$id)
            ->where('personals.tipo_documento_id',$tipo_documento_id)
            ->where('personals.nro_documento',$nro_documento)->count();

            if($regla0>0){
                $result='0';
                $msj='Ya se encuentra registrado un Personal con el documento de identidad ingresado';
                $selector='txtnro_documento';
            }
            else{
                
                $registro = Personal::findOrFail($id);

                $registro->codigo=$codigo;
                $registro->tipo_documento_id=$tipo_documento_id;
                $registro->nro_documento=$nro_documento;
                $registro->fecha_nacimiento=$fecha_nacimiento;
                $registro->apellidos=$apellidos;
                $registro->nombres=$nombres;
                $registro->telefono=$telefono;
                $registro->genero=$genero;
                $registro->edad=$edad;
                $registro->estado_civil_id=$estado_civil_id;
                $registro->ocupacion=$ocupacion;
                $registro->nro_colegiatura=$nro_colegiatura;
                $registro->cargo_id=$cargo_id;
                $registro->activo=$activo;
                $registro->user_id=Auth::user()->id;
    
                $registro->save();

                $msj='El Personal ha sido modificado con éxito';
            }

        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function altabaja($id,$estado)
    {
        $result='1';
        $msj='';
        $selector='';

        $registro = Personal::findOrFail($id);
        $registro->activo = $estado;
        $registro->user_id=Auth::user()->id;
        $registro->save();

        if(strval($estado)=="0"){
            $msj='El Personal fue dado de Baja exitosamente';
        }elseif(strval($estado)=="1"){
            $msj='El Personal fue dado de Alta exitosamente';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result='1';
        $msj='1';

        $registro = Personal::findOrFail($id);
        
        //$task->delete();
        $registro->borrado='1';
        $registro->user_id=Auth::user()->id;
        $registro->save();

        $msj='Personal eliminado exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
