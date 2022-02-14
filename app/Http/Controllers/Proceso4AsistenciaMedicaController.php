<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

use App\Personal;
use App\Tipouser;
use App\User;

use App\Proceso4AsistenciaMedica;
use App\TipoDocumentoPaciente;
use App\Seguro;

use App\Antecedente;
use App\PacienteAsistencia;
use App\EnfermedadActual;
use App\ExamenPreferencial;
use App\Gestante;
use App\MecanismosLesion;
use App\Diagnostico;
use App\Tratamiento;
use App\Procedimiento;
use App\EstablecimientoDestino;
use App\Responsable;

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
    public function cargarfile(Request $request){

        $codigo = $request->codigo;
        $file = $request->archivo;

        
        $archivo="";
        $segureFile=0;

        $result='1';
        $msj='';
        $selector='';

        if($request->hasFile('archivo')){
            
            $nombreArchivo=$request->nombrefile;
            
            $aux2='documento_'.date('d-m-Y').'-'.date('H-i-s');
            $input2  = array('archivo' => $file) ;
            $reglas2 = array('archivo' => 'required|file:1,1024000');
            $validatorF = Validator::make($input2, $reglas2);     

            if ($validatorF->fails())
            {
                $segureFile=1;
                $msj="Se ingresó correctamente el registro, pero el archivo adjunto ingresado tiene un tamaño superior a 100 MB, no se cargó el archivo";
                $result='0';
                $selector='archivo';
            }
            else
            {
                $nombre2=$file->getClientOriginalName();
                $extension2=$file->getClientOriginalExtension();
                $nuevoNombre2=$aux2.".".$extension2;
                //$subir2=Storage::disk('infoFile')->put($nuevoNombre2, \File::get($file));

                if($extension2=="pdf" || $extension2=="doc" || $extension2=="docx" || $extension2=="xls" || $extension2=="xlsx" || $extension2=="ppt" || $extension2=="pptx" || $extension2=="PDF" || $extension2=="DOC" || $extension2=="DOCX" || $extension2=="XLS" || $extension2=="XLSX" || $extension2=="PPT" || $extension2=="PTTX")
                {

                    $subir2=false;
                    $subir2=Storage::disk('fichamedica')->put($nuevoNombre2, \File::get($file));

                if($subir2){
                    $archivo=$nuevoNombre2;
                }
                else{
                    $msj="Se ingresó correctamente el registro, pero se tuvo un error al subir el archivo adjunto";
                    $segureFile=1;
                    $result='0';
                    $selector='archivo';
                }
                }
                else {
                    $segureFile=1;
                    $msj="Se ingresó correctamente el registro, pero el archivo adjunto ingresado tiene una extensión no válida, no se cargó el archivo";
                    $result='0';
                    $selector='archivo';
                }
            }

        }

        if($segureFile==1){

            Storage::disk('fichamedica')->delete($archivo);

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }




        $proceso4 = Proceso4AsistenciaMedica::where('borrado','0')->where('codigo', $codigo)->first();

        $proceso4->url=$archivo;

        $proceso4->save();

        $msj='Se ingresó correctamente el registro';

        

        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);



    }
    public function store(Request $request)
    {

        ini_set('memory_limit','256M');
        ini_set('upload_max_filesize','20M');

        $codigo = $request->codigo;
        $relato_evento = $request->relato_evento;
        $es_gestante = $request->es_gestante;
        $ocurrencias_atencion = $request->ocurrencias_atencion;
        $personal_medico_id = $request->personal_medico_id;
        $personal_enfermera_id = $request->personal_enfermera_id;
        $requirio_traslado = $request->requirio_traslado;

        $url=$request->url;
        $archivo="";
        $file = $request->archivo;
        $segureFile=0;

        $result='1';
        $msj='';
        $selector='';

        $input1  = array('codigo' => $codigo);
        $reglas1 = array('codigo' => 'required');

        $input1a  = array('codigo' => $codigo);
        $reglas1a = array('codigo' => 'unique:proceso4_asistencia_medicas,codigo'.',1,borrado');

        $input2  = array('relato_evento' => $relato_evento);
        $reglas2 = array('relato_evento' => 'required');

        $input3  = array('es_gestante' => $es_gestante);
        $reglas3 = array('es_gestante' => 'required');

        $input4  = array('ocurrencias_atencion' => $ocurrencias_atencion);
        $reglas4 = array('ocurrencias_atencion' => 'required');

        $input5  = array('personal_medico_id' => $personal_medico_id);
        $reglas5 = array('personal_medico_id' => 'required');

        $input6  = array('personal_enfermera_id' => $personal_enfermera_id);
        $reglas6 = array('personal_enfermera_id' => 'required');

        $input7  = array('requirio_traslado' => $requirio_traslado);
        $reglas7 = array('requirio_traslado' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator1a = Validator::make($input1a, $reglas1a);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        $validator5 = Validator::make($input5, $reglas5);
        $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);

        if ($validator1->fails())
        {
            $result='0';
            $msj='Debe ingresar el código de Atención';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator1a->fails())
        {
            $result='0';
            $msj='El código de Atención ya se encuentra registrado';
            $selector='txtcodigo';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator2->fails())
        {
            $result='0';
            $msj='Debe ingresar el relato del evento';
            $selector='txtrelato_evento';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator3->fails())
        {
            $result='0';
            $msj='Debe ingresar si es gestante';
            $selector='es_gestante';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator4->fails())
        {
            $result='0';
            $msj='Debe ingresar las ocurrencias de la atención';
            $selector='txtocurrencias_atencion';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator5->fails() || intval($personal_medico_id)==0)
        {
            $result='0';
            $msj='Debe de seleccionar el Médico responsable de la ateción';
            $selector='cbupersonal_medico_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator6->fails() || intval($personal_enfermera_id)==0)
        {
            $result='0';
            $msj='Debe de seleccionar la Enfermera responsable de la ateción';
            $selector='cbupersonal_enfermera_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator7->fails())
        {
            $result='0';
            $msj='Debe ingresar si requirio traslado';
            $selector='cburequirio_traslado';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }


        $antecedentes_patologia_previa = $request->antecedentes['patologia_previa'];
        $antecedentes_medicacion = $request->antecedentes['medicacion'];
        $antecedentes_alergias = $request->antecedentes['alergias'];
        $antecedentes_fur = $request->antecedentes['fur'];
        $antecedentes_gestacion = $request->antecedentes['gestacion'];
        $antecedentes_parto = $request->antecedentes['parto'];
        $antecedentes_aborto = $request->antecedentes['aborto'];

        if($antecedentes_patologia_previa == null)
        {
            $antecedentes_patologia_previa="";
        }

        if($antecedentes_medicacion == null)
        {
            $antecedentes_medicacion="";
        }

        if($antecedentes_alergias == null)
        {
            $antecedentes_alergias="";
        }

        if($antecedentes_gestacion == null)
        {
            $antecedentes_gestacion="";
        }

        if($antecedentes_parto == null)
        {
            $antecedentes_parto="";
        }

        if($antecedentes_aborto == null)
        {
            $antecedentes_aborto="";
        }

        $pacientes_asistencia_tipo_documento_paciente_id = $request->pacientes_asistencia['tipo_documento_paciente_id'];
        $pacientes_asistencia_nro_documento = $request->pacientes_asistencia['nro_documento'];
        $pacientes_asistencia_apellidos = $request->pacientes_asistencia['apellidos'];
        $pacientes_asistencia_nombres = $request->pacientes_asistencia['nombres'];
        $pacientes_asistencia_tipo_telefono = $request->pacientes_asistencia['tipo_telefono'];
        $pacientes_asistencia_telefono = $request->pacientes_asistencia['telefono'];
        $pacientes_asistencia_genero = $request->pacientes_asistencia['genero'];
        $pacientes_asistencia_edad = $request->pacientes_asistencia['edad'];
        $pacientes_asistencia_tipo_edad = $request->pacientes_asistencia['tipo_edad'];
        $pacientes_asistencia_seguro_id = $request->pacientes_asistencia['seguro_id'];


        $input8  = array('pacientes_asistencia_tipo_documento_paciente_id' => $pacientes_asistencia_tipo_documento_paciente_id);
        $reglas8 = array('pacientes_asistencia_tipo_documento_paciente_id' => 'required');

        $input9  = array('pacientes_asistencia_nro_documento' => $pacientes_asistencia_nro_documento);
        $reglas9 = array('pacientes_asistencia_nro_documento' => 'required');

        $input10  = array('pacientes_asistencia_apellidos' => $pacientes_asistencia_apellidos);
        $reglas10 = array('pacientes_asistencia_apellidos' => 'required');

        $input11  = array('pacientes_asistencia_nombres' => $pacientes_asistencia_nombres);
        $reglas11 = array('pacientes_asistencia_nombres' => 'required');

        $input12  = array('pacientes_asistencia_tipo_telefono' => $pacientes_asistencia_tipo_telefono);
        $reglas12 = array('pacientes_asistencia_tipo_telefono' => 'required');

        $input13  = array('pacientes_asistencia_genero' => $pacientes_asistencia_genero);
        $reglas13 = array('pacientes_asistencia_genero' => 'required');

        $input14  = array('pacientes_asistencia_tipo_edad' => $pacientes_asistencia_tipo_edad);
        $reglas14 = array('pacientes_asistencia_tipo_edad' => 'required');

        $input15  = array('pacientes_asistencia_seguro_id' => $pacientes_asistencia_seguro_id);
        $reglas15 = array('pacientes_asistencia_seguro_id' => 'required');

        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);
        $validator10 = Validator::make($input10, $reglas10);
        $validator11 = Validator::make($input11, $reglas11);
        $validator12 = Validator::make($input12, $reglas12);
        $validator13 = Validator::make($input13, $reglas13);
        $validator14 = Validator::make($input14, $reglas14);
        $validator15 = Validator::make($input15, $reglas15);

        if ($validator8->fails() || strlen($pacientes_asistencia_tipo_documento_paciente_id) == 0)
        {
            $result='0';
            $msj='Debe seleccionar un registro de Tipo de Documento de paciente Válido';
            $selector='cbutipo_documento_paciente_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }

        if ($validator10->fails())
        {
            $result='0';
            $msj='Ingrese los Apellidos del Paciente';
            $selector='txtapellidos';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator11->fails())
        {
            $result='0';
            $msj='Ingrese los Nombres del Paciente';
            $selector='txtnombres';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator12->fails())
        {
            $result='0';
            $msj='Seleccione el tipo de teléfono del Paciente';
            $selector='cbutipo_telefono';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator13->fails())
        {
            $result='0';
            $msj='Seleccione el género del Paciente';
            $selector='cbugenero';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator14->fails())
        {
            $result='0';
            $msj='Seleccione el tipo de edad del Paciente';
            $selector='cbutipo_edad';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }
        if ($validator15->fails())
        {
            $result='0';
            $msj='Seleccione el Seguro del Paciente';
            $selector='cbuseguro_id';

            return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector]);
        }



        $enfermedad_actuals_tiempo = $request->enfermedad_actuals['tiempo'];
        $enfermedad_actuals_inicio = $request->enfermedad_actuals['inicio'];
        $enfermedad_actuals_curso = $request->enfermedad_actuals['curso'];
        $enfermedad_actuals_sintomas = $request->enfermedad_actuals['sintomas'];

        if($enfermedad_actuals_tiempo == null)
        {
            $enfermedad_actuals_tiempo="";
        }

        if(intval($enfermedad_actuals_inicio) == 0)
        {
            $enfermedad_actuals_inicio="NO APLICA";
        }

        if(intval($enfermedad_actuals_curso) == 0)
        {
            $enfermedad_actuals_curso="NO APLICA";
        }

        if($enfermedad_actuals_sintomas == null)
        {
            $enfermedad_actuals_sintomas="";
        }

        $examen_preferencials_fc = $request->examen_preferencials['fc'];
        $examen_preferencials_fr = $request->examen_preferencials['fr'];
        $examen_preferencials_pa = $request->examen_preferencials['pa'];
        $examen_preferencials_temperatura = $request->examen_preferencials['temperatura'];
        $examen_preferencials_saturacion = $request->examen_preferencials['saturacion'];
        $examen_preferencials_glicemia = $request->examen_preferencials['glicemia'];
        $examen_preferencials_ocular = $request->examen_preferencials['ocular'];
        $examen_preferencials_verbal = $request->examen_preferencials['verbal'];
        $examen_preferencials_motora = $request->examen_preferencials['motora'];
        $examen_preferencials_piel_check1 = $request->examen_preferencials['piel_check1'];
        $examen_preferencials_piel_check2 = $request->examen_preferencials['piel_check2'];
        $examen_preferencials_piel_check3 = $request->examen_preferencials['piel_check3'];
        $examen_preferencials_piel_check4 = $request->examen_preferencials['piel_check4'];
        $examen_preferencials_pupilas = $request->examen_preferencials['pupilas'];
        $examen_preferencials_cabeza_check1 = $request->examen_preferencials['cabeza_check1'];
        $examen_preferencials_cabeza_check2 = $request->examen_preferencials['cabeza_check2'];
        $examen_preferencials_cabeza_check3 = $request->examen_preferencials['cabeza_check3'];
        $examen_preferencials_cabeza_check4 = $request->examen_preferencials['cabeza_check4'];
        $examen_preferencials_cabeza_check5 = $request->examen_preferencials['cabeza_check5'];
        $examen_preferencials_cabeza_check6 = $request->examen_preferencials['cabeza_check6'];
        $examen_preferencials_torax_check1 = $request->examen_preferencials['torax_check1'];
        $examen_preferencials_torax_check2 = $request->examen_preferencials['torax_check2'];
        $examen_preferencials_torax_check3 = $request->examen_preferencials['torax_check3'];
        $examen_preferencials_torax_check4 = $request->examen_preferencials['torax_check4'];
        $examen_preferencials_torax_check5 = $request->examen_preferencials['torax_check5'];
        $examen_preferencials_torax_check6 = $request->examen_preferencials['torax_check6'];
        $examen_preferencials_cardiovascular_check1 = $request->examen_preferencials['cardiovascular_check1'];
        $examen_preferencials_cardiovascular_check2 = $request->examen_preferencials['cardiovascular_check2'];
        $examen_preferencials_cardiovascular_check3 = $request->examen_preferencials['cardiovascular_check3'];
        $examen_preferencials_cardiovascular_check4 = $request->examen_preferencials['cardiovascular_check4'];
        $examen_preferencials_cardiovascular_obs = $request->examen_preferencials['cardiovascular_obs'];
        $examen_preferencials_abdomen_check1 = $request->examen_preferencials['abdomen_check1'];
        $examen_preferencials_abdomen_check2 = $request->examen_preferencials['abdomen_check2'];
        $examen_preferencials_abdomen_check3 = $request->examen_preferencials['abdomen_check3'];
        $examen_preferencials_abdomen_check4 = $request->examen_preferencials['abdomen_check4'];
        $examen_preferencials_abdomen_check5 = $request->examen_preferencials['abdomen_check5'];
        $examen_preferencials_abdomen_check6 = $request->examen_preferencials['abdomen_check6'];
        $examen_preferencials_abdomen_otros = $request->examen_preferencials['abdomen_otros'];


        if($examen_preferencials_fc == null)
        {
            $examen_preferencials_fc="";
        }
        if($examen_preferencials_fr == null)
        {
            $examen_preferencials_fr="";
        }
        if($examen_preferencials_pa == null)
        {
            $examen_preferencials_pa="";
        }
        if($examen_preferencials_temperatura == null)
        {
            $examen_preferencials_temperatura="";
        }
        if($examen_preferencials_saturacion == null)
        {
            $examen_preferencials_saturacion="";
        }
        if($examen_preferencials_glicemia == null)
        {
            $examen_preferencials_glicemia="";
        }
        if($examen_preferencials_ocular == null)
        {
            $examen_preferencials_ocular="";
        }
        if($examen_preferencials_verbal == null)
        {
            $examen_preferencials_verbal="";
        }
        if($examen_preferencials_motora == null)
        {
            $examen_preferencials_motora="";
        }
        
        if($examen_preferencials_piel_check1)
        {
            $examen_preferencials_piel_check1="Normal";
        }
        else{
            $examen_preferencials_piel_check1="";
        }
        
        if($examen_preferencials_piel_check2)
        {
            $examen_preferencials_piel_check2="Palidez";
        }
        else{
            $examen_preferencials_piel_check2="";
        }
        
        if($examen_preferencials_piel_check3)
        {
            $examen_preferencials_piel_check3="Cianosis";
        }
        else{
            $examen_preferencials_piel_check3="";
        }
        
        if($examen_preferencials_piel_check4)
        {
            $examen_preferencials_piel_check4="Signo de continuidad";
        }
        else{
            $examen_preferencials_piel_check4="";
        }
        
        if($examen_preferencials_pupilas == null)
        {
            $examen_preferencials_pupilas="";
        }
        
        if($examen_preferencials_cabeza_check1)
        {
            $examen_preferencials_cabeza_check1="Normal";
        }
        else{
            $examen_preferencials_cabeza_check1="";
        }
        
        if($examen_preferencials_cabeza_check2)
        {
            $examen_preferencials_cabeza_check2="Anisocoria";
        }
        else{
            $examen_preferencials_cabeza_check2="";
        }
        
        if($examen_preferencials_cabeza_check3)
        {
            $examen_preferencials_cabeza_check3="Mioticas";
        }
        else{
            $examen_preferencials_cabeza_check3="";
        }
        
        if($examen_preferencials_cabeza_check4)
        {
            $examen_preferencials_cabeza_check4="Midriaticas";
        }
        else{
            $examen_preferencials_cabeza_check4="";
        }
        
        if($examen_preferencials_cabeza_check5)
        {
            $examen_preferencials_cabeza_check5="Foto reactivas";
        }
        else{
            $examen_preferencials_cabeza_check5="";
        }
        
        if($examen_preferencials_cabeza_check6)
        {
            $examen_preferencials_cabeza_check6="Ingurgitación Yugular";
        }
        else{
            $examen_preferencials_cabeza_check6="";
        }
        
        if($examen_preferencials_torax_check1)
        {
            $examen_preferencials_torax_check1="Normal";
        }
        else{
            $examen_preferencials_torax_check1="";
        }
        
        if($examen_preferencials_torax_check2)
        {
            $examen_preferencials_torax_check2="Torax Inestable";
        }
        else{
            $examen_preferencials_torax_check2="";
        }
        
        if($examen_preferencials_torax_check3)
        {
            $examen_preferencials_torax_check3="Respiración Abdominal";
        }
        else{
            $examen_preferencials_torax_check3="";
        }
        
        if($examen_preferencials_torax_check4)
        {
            $examen_preferencials_torax_check4="Roncantes";
        }
        else{
            $examen_preferencials_torax_check4="";
        }
        
        if($examen_preferencials_torax_check5)
        {
            $examen_preferencials_torax_check5="Sibilantes";
        }
        else{
            $examen_preferencials_torax_check5="";
        }
        
        if($examen_preferencials_torax_check6)
        {
            $examen_preferencials_torax_check6="Crepitantes";
        }
        else{
            $examen_preferencials_torax_check6="";
        }
        
        
        if($examen_preferencials_cardiovascular_check1)
        {
            $examen_preferencials_cardiovascular_check1="Normal";
        }
        else{
            $examen_preferencials_cardiovascular_check1="";
        }
        
        if($examen_preferencials_cardiovascular_check2)
        {
            $examen_preferencials_cardiovascular_check2="Arritmia";
        }
        else{
            $examen_preferencials_cardiovascular_check2="";
        }
        
        if($examen_preferencials_cardiovascular_check3)
        {
            $examen_preferencials_cardiovascular_check3="Soplos";
        }
        else{
            $examen_preferencials_cardiovascular_check3="";
        }
        
        if($examen_preferencials_cardiovascular_check4)
        {
            $examen_preferencials_cardiovascular_check4="Frote pericardico";
        }
        else{
            $examen_preferencials_cardiovascular_check4="";
        }
        
        if($examen_preferencials_cardiovascular_obs == null)
        {
            $examen_preferencials_cardiovascular_obs="";
        }
        
        if($examen_preferencials_abdomen_check1)
        {
            $examen_preferencials_abdomen_check1="Normal";
        }
        else{
            $examen_preferencials_abdomen_check1="";
        }
        
        if($examen_preferencials_abdomen_check2)
        {
            $examen_preferencials_abdomen_check2="Dolor";
        }
        else{
            $examen_preferencials_abdomen_check2="";
        }
        
        if($examen_preferencials_abdomen_check3)
        {
            $examen_preferencials_abdomen_check3="Rigidez abd";
        }
        else{
            $examen_preferencials_abdomen_check3="";
        }
        
        if($examen_preferencials_abdomen_check4)
        {
            $examen_preferencials_abdomen_check4="Blumberg";
        }
        else{
            $examen_preferencials_abdomen_check4="";
        }
        
        if($examen_preferencials_abdomen_check5)
        {
            $examen_preferencials_abdomen_check5="Mac. Burney";
        }
        else{
            $examen_preferencials_abdomen_check5="";
        }
        
        if($examen_preferencials_abdomen_check6)
        {
            $examen_preferencials_abdomen_check6="Murphy";
        }
        else{
            $examen_preferencials_abdomen_check6="";
        }
        
        if($examen_preferencials_abdomen_otros == null)
        {
            $examen_preferencials_abdomen_otros="";
        }



        $gestantes_au = $request->gestantes['au'];
        $gestantes_fcf = $request->gestantes['fcf'];
        $gestantes_mf = $request->gestantes['mf'];
        $gestantes_situacion = $request->gestantes['situacion'];
        $gestantes_presentacion = $request->gestantes['presentacion'];
        $gestantes_posicion = $request->gestantes['posicion'];
        $gestantes_mo = $request->gestantes['mo'];
        $gestantes_du = $request->gestantes['du'];
        $gestantes_i = $request->gestantes['i'];
        $gestantes_f = $request->gestantes['f'];
        $gestantes_dilatacion = $request->gestantes['dilatacion'];
        $gestantes_b = $request->gestantes['b'];
        $gestantes_ap = $request->gestantes['ap'];
        $gestantes_pla = $request->gestantes['pla'];
        $gestantes_genitourinario_check1 = $request->gestantes['genitourinario_check1'];
        $gestantes_genitourinario_check2 = $request->gestantes['genitourinario_check2'];
        $gestantes_genitourinario_check3 = $request->gestantes['genitourinario_check3'];
        $gestantes_genitourinario_check4 = $request->gestantes['genitourinario_check4'];
        $gestantes_genitourinario_check5 = $request->gestantes['genitourinario_check5'];
        $gestantes_locomotor_check1 = $request->gestantes['locomotor_check1'];
        $gestantes_locomotor_check2 = $request->gestantes['locomotor_check2'];
        $gestantes_locomotor_check3 = $request->gestantes['locomotor_check3'];
        $gestantes_neurologico_check1 = $request->gestantes['neurologico_check1'];
        $gestantes_neurologico_check2 = $request->gestantes['neurologico_check2'];
        $gestantes_neurologico_check3 = $request->gestantes['neurologico_check3'];
        $gestantes_neurologico_check4 = $request->gestantes['neurologico_check4'];
        $gestantes_neurologico_check5 = $request->gestantes['neurologico_check5'];
        $gestantes_neurologico_check6 = $request->gestantes['neurologico_check6'];
        $gestantes_neurologico_check7 = $request->gestantes['neurologico_check7'];
        $gestantes_neurologico_check8 = $request->gestantes['neurologico_check8'];
        $gestantes_otros = $request->gestantes['otros'];

        if($gestantes_au == null)
        {
            $gestantes_au="";
        }

        if($gestantes_fcf == null)
        {
            $gestantes_fcf="";
        }

        if(intval($gestantes_mf) == 0)
        {
            $gestantes_mf="NO APLICA";
        }

        if(intval($gestantes_situacion) == 0)
        {
            $gestantes_situacion="NO APLICA";
        }

        if(intval($gestantes_presentacion) == 0)
        {
            $gestantes_presentacion="NO APLICA";
        }

        if(intval($gestantes_posicion) == 0)
        {
            $gestantes_posicion="NO APLICA";
        }

        if(intval($gestantes_mo) == 0)
        {
            $gestantes_mo="NO APLICA";
        }

        if($gestantes_du == null)
        {
            $gestantes_du="";
        }

        if(intval($gestantes_i) == 0)
        {
            $gestantes_i="NO APLICA";
        }

        if($gestantes_f == null)
        {
            $gestantes_f="";
        }

        if($gestantes_dilatacion == null)
        {
            $gestantes_dilatacion="";
        }

        if($gestantes_b == null)
        {
            $gestantes_b="";
        }

        if(intval($gestantes_ap) == 0)
        {
            $gestantes_ap="NO APLICA";
        }

        if($gestantes_genitourinario_check1)
        {
            $gestantes_genitourinario_check1="Normal";
        }
        else{
            $gestantes_genitourinario_check1="";
        }

        if($gestantes_genitourinario_check2)
        {
            $gestantes_genitourinario_check2="Globo Vesical";
        }
        else{
            $gestantes_genitourinario_check2="";
        }

        if($gestantes_genitourinario_check3)
        {
            $gestantes_genitourinario_check3="Ginecorragia";
        }
        else{
            $gestantes_genitourinario_check3="";
        }

        if($gestantes_genitourinario_check4)
        {
            $gestantes_genitourinario_check4="PPL";
        }
        else{
            $gestantes_genitourinario_check4="";
        }

        if($gestantes_genitourinario_check5)
        {
            $gestantes_genitourinario_check5="PRU";
        }
        else{
            $gestantes_genitourinario_check5="";
        }


        if($gestantes_locomotor_check1)
        {
            $gestantes_locomotor_check1="Normal";
        }
        else{
            $gestantes_locomotor_check1="";
        }

        if($gestantes_locomotor_check2)
        {
            $gestantes_locomotor_check2="Asimetria";
        }
        else{
            $gestantes_locomotor_check2="";
        }

        if($gestantes_locomotor_check3)
        {
            $gestantes_locomotor_check3="Hipotonia muscular";
        }
        else{
            $gestantes_locomotor_check3="";
        }


        if($gestantes_neurologico_check1)
        {
            $gestantes_neurologico_check1="Normal";
        }
        else{
            $gestantes_neurologico_check1="";
        }

        if($gestantes_neurologico_check2)
        {
            $gestantes_neurologico_check2="Parecia";
        }
        else{
            $gestantes_neurologico_check2="";
        }

        if($gestantes_neurologico_check3)
        {
            $gestantes_neurologico_check3="Plejia";
        }
        else{
            $gestantes_neurologico_check3="";
        }

        if($gestantes_neurologico_check4)
        {
            $gestantes_neurologico_check4="Sg. Babinsky";
        }
        else{
            $gestantes_neurologico_check4="";
        }

        if($gestantes_neurologico_check5)
        {
            $gestantes_neurologico_check5="Sg. Meningeos";
        }
        else{
            $gestantes_neurologico_check5="";
        }

        if($gestantes_neurologico_check6)
        {
            $gestantes_neurologico_check6="Romberg";
        }
        else{
            $gestantes_neurologico_check6="";
        }

        if($gestantes_neurologico_check7)
        {
            $gestantes_neurologico_check7="Hiperreflexia";
        }
        else{
            $gestantes_neurologico_check7="";
        }

        if($gestantes_neurologico_check8)
        {
            $gestantes_neurologico_check8="Hiporreflexia";
        }
        else{
            $gestantes_neurologico_check8="";
        }

        if($gestantes_otros == null)
        {
            $gestantes_otros="";
        }


        $mecanismos_lesions_tipo_accidente = $request->mecanismos_lesions['tipo_accidente'];
        $mecanismos_lesions_vehiculo = $request->mecanismos_lesions['vehiculo'];
        $mecanismos_lesions_impacto = $request->mecanismos_lesions['impacto'];
        $mecanismos_lesions_persona_afectada = $request->mecanismos_lesions['persona_afectada'];
        $mecanismos_lesions_proteccion_check1 = $request->mecanismos_lesions['proteccion_check1'];
        $mecanismos_lesions_proteccion_check2 = $request->mecanismos_lesions['proteccion_check2'];
        $mecanismos_lesions_proteccion_check3 = $request->mecanismos_lesions['proteccion_check3'];
        $mecanismos_lesions_situacion_check1 = $request->mecanismos_lesions['situacion_check1'];
        $mecanismos_lesions_situacion_check2 = $request->mecanismos_lesions['situacion_check2'];
        $mecanismos_lesions_situacion_check3 = $request->mecanismos_lesions['situacion_check3'];
        $mecanismos_lesions_agrecion = $request->mecanismos_lesions['agrecion'];
        $mecanismos_lesions_ahogamiento = $request->mecanismos_lesions['ahogamiento'];
        $mecanismos_lesions_caida_altura = $request->mecanismos_lesions['caida_altura'];
        $mecanismos_lesions_quemaduras = $request->mecanismos_lesions['quemaduras'];
        $mecanismos_lesions_sc_tipo = $request->mecanismos_lesions['sc_tipo'];
        $mecanismos_lesions_grado_check1 = $request->mecanismos_lesions['grado_check1'];
        $mecanismos_lesions_grado_check2 = $request->mecanismos_lesions['grado_check2'];
        $mecanismos_lesions_grado_check3 = $request->mecanismos_lesions['grado_check3'];
        $mecanismos_lesions_grado_check4 = $request->mecanismos_lesions['grado_check4'];

        if(intval($mecanismos_lesions_tipo_accidente) == 0)
        {
            $mecanismos_lesions_tipo_accidente="NO APLICA";
        }

        if(intval($mecanismos_lesions_vehiculo) == 0)
        {
            $mecanismos_lesions_vehiculo="NO APLICA";
        }

        if(intval($mecanismos_lesions_impacto) == 0)
        {
            $mecanismos_lesions_impacto="NO APLICA";
        }

        if(intval($mecanismos_lesions_persona_afectada) == 0)
        {
            $mecanismos_lesions_persona_afectada="NO APLICA";
        }

        if($mecanismos_lesions_proteccion_check1)
        {
            $mecanismos_lesions_proteccion_check1="Cinturon de Seguridad";
        }
        else{
            $mecanismos_lesions_proteccion_check1="";
        }

        if($mecanismos_lesions_proteccion_check2)
        {
            $mecanismos_lesions_proteccion_check2="Bolsa de Aire";
        }
        else{
            $mecanismos_lesions_proteccion_check2="";
        }

        if($mecanismos_lesions_proteccion_check3)
        {
            $mecanismos_lesions_proteccion_check3="Casco";
        }
        else{
            $mecanismos_lesions_proteccion_check3="";
        }



        if($mecanismos_lesions_situacion_check1)
        {
            $mecanismos_lesions_situacion_check1="Atrapado";
        }
        else{
            $mecanismos_lesions_situacion_check1="";
        }

        if($mecanismos_lesions_situacion_check2)
        {
            $mecanismos_lesions_situacion_check2="Aplastamiento";
        }
        else{
            $mecanismos_lesions_situacion_check2="";
        }

        if($mecanismos_lesions_situacion_check3)
        {
            $mecanismos_lesions_situacion_check3="Eyectado";
        }
        else{
            $mecanismos_lesions_situacion_check3="";
        }


        if(intval($mecanismos_lesions_agrecion) == 0)
        {
            $mecanismos_lesions_agrecion="NO APLICA";
        }

        if($mecanismos_lesions_caida_altura == null)
        {
            $mecanismos_lesions_caida_altura="";
        }

        if($mecanismos_lesions_quemaduras == null)
        {
            $mecanismos_lesions_quemaduras="";
        }

        if(intval($mecanismos_lesions_sc_tipo) == 0)
        {
            $mecanismos_lesions_sc_tipo="NO APLICA";
        }


        if($mecanismos_lesions_grado_check1)
        {
            $mecanismos_lesions_grado_check1="Primer";
        }
        else{
            $mecanismos_lesions_grado_check1="";
        }

        if($mecanismos_lesions_grado_check2)
        {
            $mecanismos_lesions_grado_check2="Segundo";
        }
        else{
            $mecanismos_lesions_grado_check2="";
        }

        if($mecanismos_lesions_grado_check3)
        {
            $mecanismos_lesions_grado_check3="Tercero";
        }
        else{
            $mecanismos_lesions_grado_check3="";
        }

        if($mecanismos_lesions_grado_check4)
        {
            $mecanismos_lesions_grado_check4="Cuarto";
        }
        else{
            $mecanismos_lesions_grado_check4="";
        }



        $diagnosticos1_cie10 = $request->diagnosticos1['cie10'];
        $diagnosticos1_descripcion = $request->diagnosticos1['descripcion'];
        $diagnosticos1_cie_diagnostico_id = $request->diagnosticos1['cie_diagnostico_id'];

        $diagnosticos2_cie10 = $request->diagnosticos2['cie10'];
        $diagnosticos2_descripcion = $request->diagnosticos2['descripcion'];
        $diagnosticos2_cie_diagnostico_id = $request->diagnosticos2['cie_diagnostico_id'];

        $diagnosticos3_cie10 = $request->diagnosticos3['cie10'];
        $diagnosticos3_descripcion = $request->diagnosticos3['descripcion'];
        $diagnosticos3_cie_diagnostico_id = $request->diagnosticos3['cie_diagnostico_id'];

        $diagnosticos4_cie10 = $request->diagnosticos4['cie10'];
        $diagnosticos4_descripcion = $request->diagnosticos4['descripcion'];
        $diagnosticos4_cie_diagnostico_id = $request->diagnosticos4['cie_diagnostico_id'];


        $tratamientos_oxigenoterapia = $request->tratamientos['oxigenoterapia'];
        $tratamientos_flujo = $request->tratamientos['flujo'];
        $tratamientos_fluidoterapia = $request->tratamientos['fluidoterapia'];
        $tratamientos_fluidoterapia_a = $request->tratamientos['fluidoterapia_a'];
        $tratamientos_medicamentos = $request->tratamientos['medicamentos'];
        $tratamientos_via = $request->tratamientos['via'];
        $tratamientos_hora = $request->tratamientos['hora'];


        if(intval($tratamientos_oxigenoterapia) == 0)
        {
            $tratamientos_oxigenoterapia="NO APLICA";
        }

        if($tratamientos_flujo == null)
        {
            $tratamientos_flujo="";
        }

        if(intval($tratamientos_fluidoterapia) == 0)
        {
            $tratamientos_fluidoterapia="NO APLICA";
        }

        if($tratamientos_fluidoterapia_a == null)
        {
            $tratamientos_fluidoterapia_a="";
        }

        if($tratamientos_medicamentos == null)
        {
            $tratamientos_medicamentos="";
        }

        if(intval($tratamientos_via) == 0)
        {
            $tratamientos_via="NO APLICA";
        }


        $procedimientos_proc_check1 = $request->procedimientos['proc_check1'];
        $procedimientos_proc_check2 = $request->procedimientos['proc_check2'];
        $procedimientos_proc_check3 = $request->procedimientos['proc_check3'];
        $procedimientos_proc_check4 = $request->procedimientos['proc_check4'];
        $procedimientos_proc_check5 = $request->procedimientos['proc_check5'];
        $procedimientos_proc_check6 = $request->procedimientos['proc_check6'];
        $procedimientos_proc_check7 = $request->procedimientos['proc_check7'];
        $procedimientos_proc_check8 = $request->procedimientos['proc_check8'];
        $procedimientos_proc_check9 = $request->procedimientos['proc_check9'];
        $procedimientos_proc_check10 = $request->procedimientos['proc_check10'];
        $procedimientos_proc_check11 = $request->procedimientos['proc_check11'];
        $procedimientos_proc_check12 = $request->procedimientos['proc_check12'];
        $procedimientos_proc_check13 = $request->procedimientos['proc_check13'];
        $procedimientos_proc_check14 = $request->procedimientos['proc_check14'];
        $procedimientos_proc_check15 = $request->procedimientos['proc_check15'];

        if($procedimientos_proc_check1)
        {
            $procedimientos_proc_check1="INMOVILIZACIÓN";
        }
        else{
            $procedimientos_proc_check1="";
        }

        if($procedimientos_proc_check2)
        {
            $procedimientos_proc_check2="CURACIÓN";
        }
        else{
            $procedimientos_proc_check2="";
        }

        if($procedimientos_proc_check3)
        {
            $procedimientos_proc_check3="COLLAR CERVICAL";
        }
        else{
            $procedimientos_proc_check3="";
        }

        if($procedimientos_proc_check4)
        {
            $procedimientos_proc_check4="SUTURA";
        }
        else{
            $procedimientos_proc_check4="";
        }

        if($procedimientos_proc_check5)
        {
            $procedimientos_proc_check5="TORNIQUETE";
        }
        else{
            $procedimientos_proc_check5="";
        }

        if($procedimientos_proc_check6)
        {
            $procedimientos_proc_check6="I. ENDOTRAQUEAL";
        }
        else{
            $procedimientos_proc_check6="";
        }

        if($procedimientos_proc_check7)
        {
            $procedimientos_proc_check7="HEMOSTASIA";
        }
        else{
            $procedimientos_proc_check7="";
        }

        if($procedimientos_proc_check8)
        {
            $procedimientos_proc_check8="ASPIRACIÓN SECRECIÓN";
        }
        else{
            $procedimientos_proc_check8="";
        }

        if($procedimientos_proc_check9)
        {
            $procedimientos_proc_check9="PARTO";
        }
        else{
            $procedimientos_proc_check9="";
        }

        if($procedimientos_proc_check10)
        {
            $procedimientos_proc_check10="NEBULIZACIÓN";
        }
        else{
            $procedimientos_proc_check10="";
        }

        if($procedimientos_proc_check11)
        {
            $procedimientos_proc_check11="V. MECANICA";
        }
        else{
            $procedimientos_proc_check11="";
        }

        if($procedimientos_proc_check12)
        {
            $procedimientos_proc_check12="DESFIBRILACIÓN";
        }
        else{
            $procedimientos_proc_check12="";
        }

        if($procedimientos_proc_check13)
        {
            $procedimientos_proc_check13="LAVADO GASTRICO";
        }
        else{
            $procedimientos_proc_check13="";
        }

        if($procedimientos_proc_check14)
        {
            $procedimientos_proc_check14="SONDA VESICAL";
        }
        else{
            $procedimientos_proc_check14="";
        }

        if($procedimientos_proc_check15)
        {
            $procedimientos_proc_check15="R.C.P";
        }
        else{
            $procedimientos_proc_check15="";
        }


        $establecimiento_destinos_hora_llegada = $request->establecimiento_destinos['hora_llegada'];
        $establecimiento_destinos_establecimiento = $request->establecimiento_destinos['establecimiento'];
        $establecimiento_destinos_categoria = $request->establecimiento_destinos['categoria'];
        $establecimiento_destinos_hora_recepcion = $request->establecimiento_destinos['hora_recepcion'];
        $establecimiento_destinos_profesional_acepta = $request->establecimiento_destinos['profesional_acepta'];
        $establecimiento_destinos_apellidos_nombres_profecional = $request->establecimiento_destinos['apellidos_nombres_profecional'];
        $establecimiento_destinos_hora_salida = $request->establecimiento_destinos['hora_salida'];


        if(intval($establecimiento_destinos_establecimiento) == 0)
        {
            $establecimiento_destinos_establecimiento="NO APLICA";
        }

        if($establecimiento_destinos_categoria == null)
        {
            $establecimiento_destinos_categoria="";
        }

        if($establecimiento_destinos_profesional_acepta == null)
        {
            $establecimiento_destinos_profesional_acepta="";
        }

        $responsables_tipo_documento_id = $request->responsables['tipo_documento_id'];
        $responsables_nro_documento = $request->responsables['nro_documento'];
        $responsables_apellidos = $request->responsables['apellidos'];
        $responsables_nombres = $request->responsables['nombres'];
        $responsables_parentesco = $request->responsables['parentesco'];
        $responsables_pertenencias_paciente = $request->responsables['pertenencias_paciente'];

        if($responsables_nro_documento == null)
        {
            $responsables_nro_documento="";
        }

        if($responsables_apellidos == null)
        {
            $responsables_apellidos="";
        }

        if($responsables_nombres == null)
        {
            $responsables_nombres="";
        }

        if($responsables_pertenencias_paciente == null)
        {
            $responsables_pertenencias_paciente="";
        }


        
        

        $registro = new Proceso4AsistenciaMedica;

            $registro->codigo=$codigo;
            $registro->relato_evento=$relato_evento;
            $registro->es_gestante=$es_gestante;
            $registro->ocurrencias_atencion=$ocurrencias_atencion;
            $registro->personal_medico_id=$personal_medico_id;
            $registro->personal_enfermera_id=$personal_enfermera_id;
            $registro->requirio_traslado=$requirio_traslado;
            $registro->url=$archivo;
            $registro->activo='1';
            $registro->borrado='0';
            $registro->user_id=Auth::user()->id;

        $registro->save();

        $antecedente = new Antecedente;

            $antecedente->patologia_previa=$antecedentes_patologia_previa;
            $antecedente->medicacion=$antecedentes_medicacion;
            $antecedente->alergias=$antecedentes_alergias;
            $antecedente->fur=$antecedentes_fur;
            $antecedente->gestacion=$antecedentes_gestacion;
            $antecedente->parto=$antecedentes_parto;
            $antecedente->aborto=$antecedentes_aborto;
            $antecedente->activo='1';
            $antecedente->borrado='0';
            $antecedente->proceso4_asistencia_medica_id=$registro->id;

        $antecedente->save();

        $pacientes_asistencia = new PacienteAsistencia;

            $pacientes_asistencia->tipo_documento_paciente_id=$pacientes_asistencia_tipo_documento_paciente_id;
            $pacientes_asistencia->nro_documento=$pacientes_asistencia_nro_documento;
            $pacientes_asistencia->apellidos=$pacientes_asistencia_apellidos;
            $pacientes_asistencia->nombres=$pacientes_asistencia_nombres;
            $pacientes_asistencia->tipo_telefono=$pacientes_asistencia_tipo_telefono;
            $pacientes_asistencia->telefono=$pacientes_asistencia_telefono;
            $pacientes_asistencia->genero=$pacientes_asistencia_genero;
            $pacientes_asistencia->edad=$pacientes_asistencia_edad;
            $pacientes_asistencia->tipo_edad=$pacientes_asistencia_tipo_edad;
            $pacientes_asistencia->seguro_id=$pacientes_asistencia_seguro_id;
            $pacientes_asistencia->activo='1';
            $pacientes_asistencia->borrado='0';
            $pacientes_asistencia->proceso4_asistencia_medica_id=$registro->id;

        $pacientes_asistencia->save();

        $enfermedad_actuals = new EnfermedadActual;

            $enfermedad_actuals->tiempo=$enfermedad_actuals_tiempo;
            $enfermedad_actuals->inicio=$enfermedad_actuals_inicio;
            $enfermedad_actuals->curso=$enfermedad_actuals_curso;
            $enfermedad_actuals->sintomas=$enfermedad_actuals_sintomas;
            $enfermedad_actuals->activo='1';
            $enfermedad_actuals->borrado='0';
            $enfermedad_actuals->proceso4_asistencia_medica_id=$registro->id;

        $enfermedad_actuals->save();

        $examen_preferencials = new ExamenPreferencial;

            $examen_preferencials->fc=$examen_preferencials_fc;
            $examen_preferencials->fr=$examen_preferencials_fr;
            $examen_preferencials->pa=$examen_preferencials_pa;
            $examen_preferencials->temperatura=$examen_preferencials_temperatura;
            $examen_preferencials->saturacion=$examen_preferencials_saturacion;
            $examen_preferencials->glicemia=$examen_preferencials_glicemia;
            $examen_preferencials->ocular=$examen_preferencials_ocular;
            $examen_preferencials->verbal=$examen_preferencials_verbal;
            $examen_preferencials->motora=$examen_preferencials_motora;
            $examen_preferencials->piel_check1=$examen_preferencials_piel_check1;
            $examen_preferencials->piel_check2=$examen_preferencials_piel_check2;
            $examen_preferencials->piel_check3=$examen_preferencials_piel_check3;
            $examen_preferencials->piel_check4=$examen_preferencials_piel_check4;
            $examen_preferencials->pupilas=$examen_preferencials_pupilas;
            $examen_preferencials->cabeza_check1=$examen_preferencials_cabeza_check1;
            $examen_preferencials->cabeza_check2=$examen_preferencials_cabeza_check2;
            $examen_preferencials->cabeza_check3=$examen_preferencials_cabeza_check3;
            $examen_preferencials->cabeza_check4=$examen_preferencials_cabeza_check4;
            $examen_preferencials->cabeza_check5=$examen_preferencials_cabeza_check5;
            $examen_preferencials->cabeza_check6=$examen_preferencials_cabeza_check6;
            $examen_preferencials->torax_check1=$examen_preferencials_torax_check1;
            $examen_preferencials->torax_check2=$examen_preferencials_torax_check2;
            $examen_preferencials->torax_check3=$examen_preferencials_torax_check3;
            $examen_preferencials->torax_check4=$examen_preferencials_torax_check4;
            $examen_preferencials->torax_check5=$examen_preferencials_torax_check5;
            $examen_preferencials->torax_check6=$examen_preferencials_torax_check6;
            $examen_preferencials->cardiovascular_check1=$examen_preferencials_cardiovascular_check1;
            $examen_preferencials->cardiovascular_check2=$examen_preferencials_cardiovascular_check2;
            $examen_preferencials->cardiovascular_check3=$examen_preferencials_cardiovascular_check3;
            $examen_preferencials->cardiovascular_check4=$examen_preferencials_cardiovascular_check4;
            $examen_preferencials->cardiovascular_obs=$examen_preferencials_cardiovascular_obs;
            $examen_preferencials->abdomen_check1=$examen_preferencials_abdomen_check1;
            $examen_preferencials->abdomen_check2=$examen_preferencials_abdomen_check2;
            $examen_preferencials->abdomen_check3=$examen_preferencials_abdomen_check3;
            $examen_preferencials->abdomen_check4=$examen_preferencials_abdomen_check4;
            $examen_preferencials->abdomen_check5=$examen_preferencials_abdomen_check5;
            $examen_preferencials->abdomen_check6=$examen_preferencials_abdomen_check6;
            $examen_preferencials->abdomen_otros=$examen_preferencials_abdomen_otros;
            $examen_preferencials->activo='1';
            $examen_preferencials->borrado='0';
            $examen_preferencials->proceso4_asistencia_medica_id=$registro->id;

        $examen_preferencials->save();

        $gestantes = new Gestante;

            $gestantes->au=$gestantes_au;
            $gestantes->fcf=$gestantes_fcf;
            $gestantes->mf=$gestantes_mf;
            $gestantes->situacion=$gestantes_situacion;
            $gestantes->posicion=$gestantes_posicion;
            $gestantes->mo=$gestantes_mo;
            $gestantes->du=$gestantes_du;
            $gestantes->i=$gestantes_i;
            $gestantes->f=$gestantes_f;
            $gestantes->dilatacion=$gestantes_dilatacion;
            $gestantes->b=$gestantes_b;
            $gestantes->ap=$gestantes_ap;
            $gestantes->pla=$gestantes_pla;
            $gestantes->genitourinario_check1=$gestantes_genitourinario_check1;
            $gestantes->genitourinario_check2=$gestantes_genitourinario_check2;
            $gestantes->genitourinario_check3=$gestantes_genitourinario_check3;
            $gestantes->genitourinario_check4=$gestantes_genitourinario_check4;
            $gestantes->genitourinario_check5=$gestantes_genitourinario_check5;
            $gestantes->locomotor_check1=$gestantes_locomotor_check1;
            $gestantes->locomotor_check2=$gestantes_locomotor_check2;
            $gestantes->locomotor_check3=$gestantes_locomotor_check3;
            $gestantes->neurologico_check1=$gestantes_neurologico_check1;
            $gestantes->neurologico_check2=$gestantes_neurologico_check2;
            $gestantes->neurologico_check3=$gestantes_neurologico_check3;
            $gestantes->neurologico_check4=$gestantes_neurologico_check4;
            $gestantes->neurologico_check5=$gestantes_neurologico_check5;
            $gestantes->neurologico_check6=$gestantes_neurologico_check6;
            $gestantes->neurologico_check7=$gestantes_neurologico_check7;
            $gestantes->neurologico_check8=$gestantes_neurologico_check8;
            $gestantes->otros=$gestantes_otros;
            $gestantes->presentacion=$gestantes_presentacion;
            $gestantes->activo='1';
            $gestantes->borrado='0';
            $gestantes->proceso4_asistencia_medica_id=$registro->id;

        $gestantes->save();

        $mecanismos_lesions = new MecanismosLesion;

            $mecanismos_lesions->tipo_accidente=$mecanismos_lesions_tipo_accidente;
            $mecanismos_lesions->vehiculo=$mecanismos_lesions_vehiculo;
            $mecanismos_lesions->impacto=$mecanismos_lesions_impacto;
            $mecanismos_lesions->persona_afectada=$mecanismos_lesions_persona_afectada;
            $mecanismos_lesions->proteccion_check1=$mecanismos_lesions_proteccion_check1;
            $mecanismos_lesions->proteccion_check2=$mecanismos_lesions_proteccion_check2;
            $mecanismos_lesions->proteccion_check3=$mecanismos_lesions_proteccion_check3;
            $mecanismos_lesions->situacion_check1=$mecanismos_lesions_situacion_check1;
            $mecanismos_lesions->situacion_check2=$mecanismos_lesions_situacion_check2;
            $mecanismos_lesions->situacion_check3=$mecanismos_lesions_situacion_check3;
            $mecanismos_lesions->agrecion=$mecanismos_lesions_agrecion;
            $mecanismos_lesions->ahogamiento=$mecanismos_lesions_ahogamiento;
            $mecanismos_lesions->caida_altura=$mecanismos_lesions_caida_altura;
            $mecanismos_lesions->quemaduras=$mecanismos_lesions_quemaduras;
            $mecanismos_lesions->sc_tipo=$mecanismos_lesions_sc_tipo;
            $mecanismos_lesions->grado_check1=$mecanismos_lesions_grado_check1;
            $mecanismos_lesions->grado_check2=$mecanismos_lesions_grado_check2;
            $mecanismos_lesions->grado_check3=$mecanismos_lesions_grado_check3;
            $mecanismos_lesions->grado_check4=$mecanismos_lesions_grado_check4;
            $mecanismos_lesions->activo='1';
            $mecanismos_lesions->borrado='0';
            $mecanismos_lesions->proceso4_asistencia_medica_id=$registro->id;

        $mecanismos_lesions->save();

        if( intval($diagnosticos1_cie_diagnostico_id) > 0 ){
            
            $diagnosticos1 = new Diagnostico;

                $diagnosticos1->cie10=$diagnosticos1_cie10;
                $diagnosticos1->descripcion=$diagnosticos1_descripcion;
                $diagnosticos1->cie_diagnostico_id=$diagnosticos1_cie_diagnostico_id;
                $diagnosticos1->activo='1';
                $diagnosticos1->borrado='0';
                $diagnosticos1->proceso4_asistencia_medica_id=$registro->id;

            $diagnosticos1->save();
        }

        if( intval($diagnosticos2_cie_diagnostico_id) > 0 ){
            
            $diagnosticos2 = new Diagnostico;

                $diagnosticos2->cie10=$diagnosticos2_cie10;
                $diagnosticos2->descripcion=$diagnosticos2_descripcion;
                $diagnosticos2->cie_diagnostico_id=$diagnosticos2_cie_diagnostico_id;
                $diagnosticos2->activo='1';
                $diagnosticos2->borrado='0';
                $diagnosticos2->proceso4_asistencia_medica_id=$registro->id;

            $diagnosticos2->save();
        }

        if( intval($diagnosticos3_cie_diagnostico_id) > 0 ){
            
            $diagnosticos3 = new Diagnostico;

                $diagnosticos3->cie10=$diagnosticos3_cie10;
                $diagnosticos3->descripcion=$diagnosticos3_descripcion;
                $diagnosticos3->cie_diagnostico_id=$diagnosticos3_cie_diagnostico_id;
                $diagnosticos3->activo='1';
                $diagnosticos3->borrado='0';
                $diagnosticos3->proceso4_asistencia_medica_id=$registro->id;

            $diagnosticos3->save();
        }

        if( intval($diagnosticos4_cie_diagnostico_id) > 0 ){
            
            $diagnosticos4 = new Diagnostico;

                $diagnosticos4->cie10=$diagnosticos4_cie10;
                $diagnosticos4->descripcion=$diagnosticos4_descripcion;
                $diagnosticos4->cie_diagnostico_id=$diagnosticos4_cie_diagnostico_id;
                $diagnosticos4->activo='1';
                $diagnosticos4->borrado='0';
                $diagnosticos4->proceso4_asistencia_medica_id=$registro->id;

            $diagnosticos4->save();
        }

        $tratamientos = new Tratamiento;

            $tratamientos->oxigenoterapia=$tratamientos_oxigenoterapia;
            $tratamientos->flujo=$tratamientos_flujo;
            $tratamientos->fluidoterapia=$tratamientos_fluidoterapia;
            $tratamientos->fluidoterapia_a=$tratamientos_fluidoterapia_a;
            $tratamientos->medicamentos=$tratamientos_medicamentos;
            $tratamientos->via=$tratamientos_via;
            $tratamientos->hora=$tratamientos_hora;
            $tratamientos->activo='1';
            $tratamientos->borrado='0';
            $tratamientos->proceso4_asistencia_medica_id=$registro->id;

        $tratamientos->save();

        $procedimientos = new Procedimiento;

            $procedimientos->proc_check1=$procedimientos_proc_check1;
            $procedimientos->proc_check2=$procedimientos_proc_check2;
            $procedimientos->proc_check3=$procedimientos_proc_check3;
            $procedimientos->proc_check4=$procedimientos_proc_check4;
            $procedimientos->proc_check5=$procedimientos_proc_check5;
            $procedimientos->proc_check6=$procedimientos_proc_check6;
            $procedimientos->proc_check7=$procedimientos_proc_check7;
            $procedimientos->proc_check8=$procedimientos_proc_check8;
            $procedimientos->proc_check9=$procedimientos_proc_check9;
            $procedimientos->proc_check10=$procedimientos_proc_check10;
            $procedimientos->proc_check11=$procedimientos_proc_check11;
            $procedimientos->proc_check12=$procedimientos_proc_check12;
            $procedimientos->proc_check13=$procedimientos_proc_check13;
            $procedimientos->proc_check14=$procedimientos_proc_check14;
            $procedimientos->proc_check15=$procedimientos_proc_check15;
            $procedimientos->activo='1';
            $procedimientos->borrado='0';
            $procedimientos->proceso4_asistencia_medica_id=$registro->id;

        $procedimientos->save();

        $establecimiento_destinos = new EstablecimientoDestino;

            $establecimiento_destinos->hora_llegada=$establecimiento_destinos_hora_llegada;
            $establecimiento_destinos->establecimiento=$establecimiento_destinos_establecimiento;
            $establecimiento_destinos->categoria=$establecimiento_destinos_categoria;
            $establecimiento_destinos->hora_recepcion=$establecimiento_destinos_hora_recepcion;
            $establecimiento_destinos->profesional_acepta=$establecimiento_destinos_profesional_acepta;
            $establecimiento_destinos->apellidos_nombres_profecional=$establecimiento_destinos_apellidos_nombres_profecional;
            $establecimiento_destinos->hora_salida=$establecimiento_destinos_hora_salida;
            $establecimiento_destinos->activo='1';
            $establecimiento_destinos->borrado='0';
            $establecimiento_destinos->proceso4_asistencia_medica_id=$registro->id;

        $establecimiento_destinos->save();

        $responsables = new Responsable;

            $responsables->tipo_documento_id=$responsables_tipo_documento_id;
            $responsables->nro_documento=$responsables_nro_documento;
            $responsables->apellidos_nombres=$responsables_apellidos.' '.$responsables_nombres;
            $responsables->parentesco=$responsables_parentesco;
            $responsables->pertenencias_paciente=$responsables_pertenencias_paciente;
            $responsables->activo='1';
            $responsables->borrado='0';
            $responsables->proceso4_asistencia_medica_id=$registro->id;

        $responsables->save();

        $msj='Se ingresó correctamente el registro';

        

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
