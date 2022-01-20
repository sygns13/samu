<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\CieDiagnostico;

use stdClass;
use DB;
use Storage;
set_time_limit(600);

class CieDiagnosticoController extends Controller
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

            $modulo="ciediagnostico";

            return view('base.ciediagnostico.index',compact('tipouser','modulo'));
        }
        else
        {
            return redirect('home');    
        }
    }

    public function index(Request $request)
    {
        $buscar=$request->busca;

        $queryZero=CieDiagnostico::where('borrado','0')
        ->where(function($query) use ($buscar){
            $query->where('codigo','like','%'.$buscar.'%');
            $query->orWhere('descripcion','like','%'.$buscar.'%');
            });


        $registros = $queryZero
        ->orderBy('codigo')
        ->orderBy('id')
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

        $descripcion=$request->descripcion;
        $codigo=$request->codigo;
        $activo=$request->activo;

        $result='1';
        $msj='';
        $selector='';


        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:cie_diagnosticos,codigo'.',1,borrado');

        $input3  = array('descripcion' => $descripcion);
        $reglas3 = array('descripcion' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código del Diagnóstico CIE 10';
            $selector='txtcodigo';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código del Diagnóstico CIE 10 ya se encuentra registrado';
            $selector='txtcodigo';
        }
        elseif ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar la Descripción del Diagnóstico CIE 10';
            $selector='txtdescripcion';
        }
        else{
            $registro = new CieDiagnostico;

            $registro->descripcion=$descripcion;
            $registro->codigo=$codigo;
            $registro->activo=$activo;
            $registro->borrado='0';
            $registro->user_id=Auth::user()->id;

            $registro->save();

            $msj='Nuevo Diagnóstico CIE 10 Registrado con Éxito';

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

        $descripcion=$request->descripcion;
        $codigo=$request->codigo;
        $activo=$request->activo;

        $result='1';
        $msj='';
        $selector='';


        
        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input2  = array('codigo' => $codigo);
        $reglas2 = array('codigo' => 'unique:cie_diagnosticos,codigo,'.$id.',id,borrado,0');

        $input3  = array('descripcion' => $descripcion);
        $reglas3 = array('descripcion' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código del Diagnóstico CIE 10';
            $selector='txtcodigoE';
        }
        elseif ($validator2->fails())
        {
            $result='0';
            $msj='El código del Diagnóstico CIE 10 ya se encuentra registrado';
            $selector='txtcodigoE';
        }
        elseif ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar la Descripción del Diagnóstico CIE 10';
            $selector='txtdescripcionE';
        }
        else{

            $registro = CieDiagnostico::findOrFail($id);

            $registro->descripcion=$descripcion;
            $registro->codigo=$codigo;
            $registro->activo=$activo;
            $registro->user_id=Auth::user()->id;

            $registro->save();


        $msj='El Diagnóstico CIE 10 ha sido modificado con éxito';

        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
    }

    public function altabaja($id,$estado)
    {
        $result='1';
        $msj='';
        $selector='';

        $registro = CieDiagnostico::findOrFail($id);
        $registro->activo = $estado;
        $registro->user_id=Auth::user()->id;
        $registro->save();

        if(strval($estado)=="0"){
            $msj='El Diagnóstico CIE 10 fue dado de Baja exitosamente';
        }elseif(strval($estado)=="1"){
            $msj='El Diagnóstico CIE 10 fue dado de Alta exitosamente';
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

        $registro = CieDiagnostico::findOrFail($id);
        
        //$task->delete();
        $registro->borrado='1';
        $registro->user_id=Auth::user()->id;
        $registro->save();

        $msj='Diagnóstico CIE 10 eliminado exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }
}
