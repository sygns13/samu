<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

use App\Personal;
use App\Tipouser;
use App\User;
use App\Cargo;




use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator as LaravelValidator;

use stdClass;


class UserController extends Controller     
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        if(accesoUser([1])){


            $idtipouser=Auth::user()->tipouser_id;
            $tipouser=Tipouser::find($idtipouser);


            $modulo="usuario";
            $tipousers=Tipouser::orderBy('id')->where('borrado','0')->get();

            $personals=Personal::orderBy('id')->where('borrado','0')->get();

            foreach ($personals as $personal) {
                $cargo=Cargo::where('id', $personal->cargo_id)->first();
                $personal->cargo=$cargo;
            }


            return view('usuario.index',compact('tipouser','modulo','tipousers','personals'));
        }
        else
        {
            return redirect('home');    
        }
    }

    public function index2()
    {
        if(accesoUser([1,2,3,4,5])){


            $idtipouser=Auth::user()->tipouser_id;
            $tipouser=Tipouser::find($idtipouser);



            $modulo="miperfil";
            return view('miperfil.index',compact('tipouser','modulo'));
        }
        else
        {
            return redirect('home');           
        }
    }

    public function index(Request $request)
    {
        $buscar=$request->busca;

        $usuarios = DB::table('users')
        ->join('tipousers', 'tipousers.id', '=', 'users.tipouser_id')
        ->join('personals', 'personals.id', '=', 'users.personal_id')

        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'personals.tipo_documento_id')
        ->join('estado_civils', 'estado_civils.id', '=', 'personals.estado_civil_id')
        ->join('cargos', 'cargos.id', '=', 'personals.cargo_id')



        ->where('users.borrado','0')
        ->where(function($query) use ($buscar){
            $query->Where('users.name','like','%'.$buscar.'%');
            $query->orWhere('users.email','like','%'.$buscar.'%');
            $query->orWhere('personals.nro_documento','like','%'.$buscar.'%');
            $query->orWhere('personals.apellidos','like','%'.$buscar.'%');
            $query->orWhere('personals.nombres','like','%'.$buscar.'%');
            }) 
         ->orderBy('tipousers.id')
        ->orderBy('personals.apellidos')
        ->orderBy('personals.nombres')
     ->orderBy('users.name')
        ->select('users.id as id','users.name','users.email','users.activo','users.borrado','users.personal_id','users.tipouser_id',
        'personals.codigo as codPersonal',

        'tipousers.nombre as tipouser',

        'personals.nro_documento as docPersonal',
        'personals.apellidos as apePersonal',
        'personals.nombres as nomPersonal',
        'personals.telefono as telPersonal',
        'personals.genero as genPersonal',
        'personals.ocupacion as ocuPersonal',

        'tipo_documentos.tipo as tipoDocPersonal',
        'cargos.descripcion as cargoPersonal',
        'estado_civils.descripcion as estadoCivilPersonal' 
         )
        ->paginate(30);

      /*   $usuarios = DB::table('users')
        ->where('users.borrado','0')
        ->orderBy('users.name')
        ->select('users.id as id','users.name','users.email','users.activo','users.borrado','users.personal_id','users.tipouser_id')
        ->paginate(30); */


          return [
            'pagination'=>[
                'total'=> $usuarios->total(),
                'current_page'=> $usuarios->currentPage(),
                'per_page'=> $usuarios->perPage(),
                'last_page'=> $usuarios->lastPage(),
                'from'=> $usuarios->firstItem(),
                'to'=> $usuarios->lastItem(),
            ],
            'usuarios'=>$usuarios
        ];
    }



    public function miperfil(Request $request)
    {
        //$buscar=$request->busca;

        $usuario = DB::table('users')
        ->join('tipousers', 'tipousers.id', '=', 'users.tipouser_id')
        ->join('personals', 'personals.id', '=', 'users.personal_id')

        ->join('tipo_documentos', 'tipo_documentos.id', '=', 'personals.tipo_documento_id')
        ->join('estado_civils', 'estado_civils.id', '=', 'personals.estado_civil_id')
        ->join('cargos', 'cargos.id', '=', 'personals.cargo_id')



        ->where('users.id',Auth::user()->id)

         ->orderBy('tipousers.id')
        ->orderBy('personals.apellidos')
        ->orderBy('personals.nombres')
     ->orderBy('users.name')
        ->select('users.id as id','users.name','users.email','users.activo','users.borrado','users.personal_id','users.tipouser_id',
        'personals.codigo as codPersonal',

        'tipousers.nombre as tipouser',

        'personals.nro_documento as docPersonal',
        'personals.apellidos as apePersonal',
        'personals.nombres as nomPersonal',
        'personals.telefono as telPersonal',
        'personals.genero as genPersonal',
        'personals.ocupacion as ocuPersonal',

        'tipo_documentos.tipo as tipoDocPersonal',
        'cargos.descripcion as cargoPersonal',
        'estado_civils.descripcion as estadoCivilPersonal' 
         )
         ->first();

        return [
            'usuario'=>$usuario
        ];
    }

    public function modificarclave(Request $request)
    {
        $result='1';
        $msj='';
        $selector='';

        $pswa=$request->pswa;
        $pswn1=$request->pswn1;
        $pswn2=$request->pswn2;

        $iduser=Auth::user()->id;
     

        $input1  = array('clave' => $pswa);
        $reglas1 = array('clave' => 'required');

        $input2  = array('ncalve1' => $pswn1);
        $reglas2 = array('ncalve1' => 'required');

        $input3  = array('ncalve2' => $pswn2);
        $reglas3 = array('ncalve2' => 'required');



        //$input6  = array('carrera' => $newCarrerasunasam);
       // $reglas6 = array('carrera' => 'required');

        // Segunda Carrera OP chekiar $newcarrera_id2

         $validator1 = Validator::make($input1, $reglas1);
         $validator2 = Validator::make($input2, $reglas2);
         $validator3 = Validator::make($input3, $reglas3);


          if ($validator1->fails())
        {
            $result='0';
            $msj='Ingrese la Contraseña Actual de la Cuenta';
            $selector='txtdato2';
        }elseif ($validator2->fails()) {
            $result='0';
            $msj='Ingrese la Nueva Contraseña de la Cuenta';
            $selector='txtdato3';
        }elseif ($validator3->fails()) {
            $result='0';
            $msj='Ingrese nuevamente la Nueva Contraseña de la Cuenta';
            $selector='txtdato4';
        }elseif (!Hash::check($pswa, Auth::user()->password)) {
            $result='0';
            $msj='La Contraseña Actual Ingresada No es Correcta, Ingrése una Contraseña Correcta';
            $selector='txtdato2';
        }elseif (strval($pswn1)!=strval($pswn2)) {
            $result='0';
            $msj='Las Nuevas Contraseñas Indicadas son Diferentes, Por favor Ingrese Correctamente las Contraseñas';
            $selector='txtdato3';
        }elseif (Hash::check($pswn1, Auth::user()->password)) {
            $result='0';
            $msj='La Contraseña Actual y La Nueva Contraseña Son Iguales, Debe Ingresar una Nueva Contraseña Diferente';
            $selector='txtdato3';
        }
        else{

            $editUser = User::findOrFail($iduser);
            $editUser->password=bcrypt($pswn1);          
            $editUser->save();


            $msj='Contraseña de Usuario modificado con éxito';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
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
        $result='1';
        $msj='';
        $selector='';

        $name=$request->name;
        $email=$request->email;
        $activo=$request->activo;
        $personal_id=$request->personal_id;
        $tipouser_id=$request->tipouser_id;
       
        $password=$request->password;
        


        
        $regla0=DB::table('users')
        ->join('personals', 'personals.id', '=', 'users.personal_id')
        ->where('users.borrado','0')
        ->where('users.tipouser_id',$tipouser_id)
        ->where('personals.id',$personal_id)->count();

        $regla02=User::where('name',$name)->where('borrado','0')->count();
        $regla03=User::where('email',$email)->where('borrado','0')->count();


        $input5  = array('email' => $email);
        $reglas5 = array('email' => 'required');

        $input6  = array('name' => $name);
        $reglas6 = array('name' => 'required');

        $input7  = array('password' => $password);
        $reglas7 = array('password' => 'required');


        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);


        if($regla0>0){
            $result='0';
            $msj='Ya se encuentra registrado un Usuario con ese tipo de Usuario y con el DNI ingresado';
            $selector='txtdni';
        }

        elseif($regla02>0){
            $result='0';
            $msj='Ya se encuentra registrado un Usuario con el Username ingresado';
            $selector='txtname';
        }

        elseif($regla03>0){
            $result='0';
            $msj='Ya se encuentra registrado un email con el Username ingresado';
            $selector='txtemail';
        }
       
        elseif ($validator5->fails()) {
            $result='0';
            $msj='Ingrese el email del usuario';
            $selector='txtemail';
        }
        elseif ($validator6->fails()) {
            $result='0';
            $msj='Ingrese el Username del Usuario';
            $selector='txtname';
        }
        elseif ($validator7->fails()) {
            $result='0';
            $msj='Ingrese el Password del usuario';
            $selector='txtpassword';
        }
        elseif (intval($tipouser_id)==0) {
            $result='0';
            $msj='Seleccione el Tipo de Usuario';
            $selector='cbutipouser_id';
        }
        elseif (intval($personal_id)==0) {
            $result='0';
            $msj='Seleccione un Personal válido';
            $selector='cbupersonal_id';
        }

       
            else{

        
                    $newUser = new User();
                    $newUser->name=$name;
                    $newUser->email=$email;
                    $newUser->password=bcrypt($password);
                    $newUser->personal_id=$personal_id;
                    $newUser->tipouser_id=$tipouser_id;
                    $newUser->activo=$activo;
                    $newUser->borrado='0';                   

                    $newUser->save();
        
    

                    $msj='Nuevo Usuario del Sistema registrado con éxito';

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
        
        $result='1';
        $msj='';
        $selector='';

        $name=$request->name;
        $email=$request->email;
        $activo=$request->activo;
        $personal_id=$request->personal_id;
        $tipouser_id=$request->tipouser_id;
       
        $password=$request->password;
        $programaestudio_id=$request->programaestudio_id;

        $modifpassword=$request->modifpassword;




        
        $regla0=DB::table('users')
        ->join('personals', 'personals.id', '=', 'users.personal_id')
        ->where('users.tipouser_id',$tipouser_id)
        ->where('users.borrado','0')
        ->where('users.id','<>',$id)
        ->where('personals.id',$personal_id)->count();

        $regla02=User::where('name',$name)->where('users.id','<>',$id)->where('borrado','0')->count();
        $regla03=User::where('email',$email)->where('users.id','<>',$id)->where('borrado','0')->count();



        $input5  = array('email' => $email);
        $reglas5 = array('email' => 'required');

        $input6  = array('name' => $name);
        $reglas6 = array('name' => 'required');

        $input7  = array('password' => $password);
        $reglas7 = array('password' => 'required');



    
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);


        if($regla0>0){
            $result='0';
            $msj='Ya se encuentra registrado un Usuario con ese tipo de Usuario y con el DNI ingresado';
            $selector='txtdniE';
        }

        elseif($regla02>0){
            $result='0';
            $msj='Ya se encuentra registrado un Usuario con el Username ingresado';
            $selector='txtnameE';
        }

        elseif($regla03>0){
            $result='0';
            $msj='Ya se encuentra registrado un email con el Username ingresado';
            $selector='txtemailE';
        }

        elseif ($validator5->fails()) {
            $result='0';
            $msj='Ingrese el email del usuario';
            $selector='txtemailE';
        }
        elseif ($validator6->fails()) {
            $result='0';
            $msj='Ingrese el Username del Usuario';
            $selector='txtnameE';
        }
        /* elseif ($validator7->fails()) {
            $result='0';
            $msj='Ingrese el Password del usuario';
            $selector='txtpassword';
        } */
        elseif (intval($personal_id)==0) {
            $result='0';
            $msj='Seleccione un Personal válido';
            $selector='cbupersonal_idE';
        }

        elseif (intval($tipouser_id)==0) {
            $result='0';
            $msj='Seleccione el Tipo de Usuario';
            $selector='cbutipouser_idE';
        }

 
        elseif ($validator7->fails() && intval($modifpassword)==1) {
            $result='0';
            $msj='Ingrese el Password del usuario';
            $selector='txtpasswordE';
        }



       
            else{

                if(intval($modifpassword)==1){
                    $newUser = User::find($id);;
                        $newUser->name=$name;
                        $newUser->email=$email;
                        $newUser->personal_id=$personal_id;
                        $newUser->tipouser_id=$tipouser_id;
                        $newUser->activo=$activo;
                        $newUser->password=bcrypt($password);

                    $newUser->save();

                    }
                    else{
                        $newUser = User::find($id);;
                        $newUser->name=$name;
                        $newUser->email=$email;
                        $newUser->personal_id=$personal_id;
                        $newUser->tipouser_id=$tipouser_id;
                        $newUser->activo=$activo;
        
                        $newUser->save();    
                    }

                

          $msj='Usuario modificado con éxito';


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

        $borrarUsuario = User::findOrFail($id);
        //$task->delete();

        $borrarUsuario->borrado='1';

        $borrarUsuario->save();

        $msj='Usuario seleccionado eliminado exitosamente';


        return response()->json(["result"=>$result,'msj'=>$msj]);
    }

    public function altabaja($id,$estado)
    {
        $result='1';
        $msj='';
        $selector='';

        $updateUsuario = User::findOrFail($id);
        $updateUsuario->activo=$estado;
        $updateUsuario->save();

        if(strval($estado)=="0"){
            $msj='El Usuario fue Desactivado exitosamente';
        }elseif(strval($estado)=="1"){
            $msj='El Usuario fue Activado exitosamente';
        }

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);

    }


    public function verpersona($dni)
    {
       $persona=Persona::where('dni_ruc',$dni)->get();

       $id="0";
       $idUser="0";

        foreach ($persona as $key => $dato) {
          $id=$dato->id;
        }

        $user=User::where('persona_id',$id)->where('borrado','0')->get();

        foreach ($user as $key => $dato) {
            $idUser=$dato->id;
        }


      return response()->json(["persona"=>$persona, "id"=>$id, "user"=>$user , "idUser"=>$idUser]);

    }
}
