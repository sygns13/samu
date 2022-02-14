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
use App\Proceso3DespachoMovil;
use App\Proceso4AsistenciaMedica;
use App\Samu;
use App\Turno;
use App\TipoLlamada;
use App\LocalizacionLlamadas;

use App\Paciente;
use App\Prioridad;
use App\CieDiagnostico;
use App\Cargo;
use App\TipoDocumentoPaciente;
use App\Seguro;

use App\TipoAtencion;
use App\Departamento;
use App\Provincia;
use App\Distrito;

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


class ReporteController extends Controller
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

           /*  $samus=Samu::orderBy('id')->where('borrado','0')->get();
            $turnos=Turno::orderBy('id')->where('borrado','0')->get();
            $tipoLlamadas=TipoLlamada::orderBy('id')->where('borrado','0')->get();
            $localizacionLlamadas=LocalizacionLlamadas::orderBy('id')->where('borrado','0')->get();
            $operadors=Personal::where('cargo_id','4')->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get(); */

            $modulo="reporte1";

            return view('reportes.reporte1.index',compact('tipouser','modulo'));
        }
        else
        {
            return redirect('home');    
        }
    }


    public function index2()
    {
        if(accesoUser([1,2,3])){


            $idtipouser=Auth::user()->tipouser_id;
            $tipouser=Tipouser::find($idtipouser);

           /*  $samus=Samu::orderBy('id')->where('borrado','0')->get();
            $turnos=Turno::orderBy('id')->where('borrado','0')->get();
            $tipoLlamadas=TipoLlamada::orderBy('id')->where('borrado','0')->get();
            $localizacionLlamadas=LocalizacionLlamadas::orderBy('id')->where('borrado','0')->get();
            $operadors=Personal::where('cargo_id','4')->where('borrado','0')->orderBy('apellidos')->orderBy('id')->get(); */

            $modulo="reporte2";

            return view('reportes.reporte2.index',compact('tipouser','modulo'));
        }
        else
        {
            return redirect('home');    
        }
    }

    public function reporteestadistico(Request $request)
    {

        $tipo=$request->tipo;
        $fecha=$request->fecha;
        $anio=$request->anio;
        $mes=$request->mes;

        $reporte = new stdClass();
        $resquery = null;


        $result='1';
        $msj='';
        $selector='';

        $proceso1=Proceso1RecepcionLlamada::where('borrado','0');
        $proceso2=Proceso2Consejeria::where('borrado','0');
        $proceso3=Proceso3DespachoMovil::where('borrado','0');
        $proceso4=Proceso4AsistenciaMedica::where('borrado','0');

        if(intval($tipo) == 0){

            $input1  = array('fecha' => $fecha);
            $reglas1 = array('fecha' => 'required');

            $validator1 = Validator::make($input1, $reglas1);

            if ($validator1->fails())
            {
                $result='0';
                $msj='Debe ingresar la fecha de búsqueda';
                $selector='txtfecha';

                return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'reporte'=>$reporte]);
            }

            $res1 = $proceso1
            ->where('fecha',$fecha)
            ->count();

            $res2 = $proceso2
            ->whereRaw('date(created_at) = ?', [$fecha])
            ->count();

            $res3 = $proceso3
            ->whereRaw('date(created_at) = ?', [$fecha])
            ->count();

            $res4 = $proceso4
            ->whereRaw('date(created_at) = ?', [$fecha])
            ->count();

            $reporte->res1=$res1;
            $reporte->res2=$res2;
            $reporte->res3=$res3;
            $reporte->res4=$res4;

            $msj='Se obtuvo el reporte solicitado ';
        }

        elseif(intval($tipo) == 1){

            $input1  = array('anio' => $anio);
            $reglas1 = array('anio' => 'required');

            $input2  = array('mes' => $mes);
            $reglas2 = array('mes' => 'required');

            $validator1 = Validator::make($input1, $reglas1);
            $validator2 = Validator::make($input2, $reglas2);

            if ($validator1->fails() || intval($anio) == 0)
            {
                $result='0';
                $msj='Debe seleccionar el año de búsqueda';
                $selector='cbuAnio';

                return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'reporte'=>$reporte]);
            }

            if ($validator2->fails() || intval($mes) == 0)
            {
                $result='0';
                $msj='Debe seleccionar el mes de búsqueda';
                $selector='cbuMes';

                return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'reporte'=>$reporte]);
            }

            $res1 = $proceso1
            ->whereRaw('year(fecha) = ?', [$anio])
            ->whereRaw('month(fecha) = ?', [$mes])
            ->count();

            $res2 = $proceso2
            ->whereRaw('year(created_at) = ?', [$anio])
            ->whereRaw('month(created_at) = ?', [$mes])
            ->count();

            $res3 = $proceso3
            ->whereRaw('year(created_at) = ?', [$anio])
            ->whereRaw('month(created_at) = ?', [$mes])
            ->count();

            $res4 = $proceso4
            ->whereRaw('year(created_at) = ?', [$anio])
            ->whereRaw('month(created_at) = ?', [$mes])
            ->count();

            $reporte->res1=$res1;
            $reporte->res2=$res2;
            $reporte->res3=$res3;
            $reporte->res4=$res4;

            $msj='Se obtuvo el reporte solicitado ';
        }

        elseif(intval($tipo) == 2){

            $input1  = array('anio' => $anio);
            $reglas1 = array('anio' => 'required');

            $validator1 = Validator::make($input1, $reglas1);

            if ($validator1->fails() || intval($anio) == 0)
            {
                $result='0';
                $msj='Debe seleccionar el año de búsqueda';
                $selector='cbuAnio';

                return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'reporte'=>$reporte]);
            }


            $res1 = $proceso1
            ->whereRaw('year(fecha) = ?', [$anio])
            ->count();

            $res2 = $proceso2
            ->whereRaw('year(created_at) = ?', [$anio])
            ->count();

            $res3 = $proceso3
            ->whereRaw('year(created_at) = ?', [$anio])
            ->count();

            $res4 = $proceso4
            ->whereRaw('year(created_at) = ?', [$anio])
            ->count();

            $reporte->res1=$res1;
            $reporte->res2=$res2;
            $reporte->res3=$res3;
            $reporte->res4=$res4;

            $msj='Se obtuvo el reporte solicitado ';
        }


        return response()->json(["result"=>$result,'msj'=>$msj,'selector'=>$selector, 'reporte'=>$reporte]);

    }


    public function index(Request $request)
    {
        $buscar=$request->busca;

     $procesos = DB::table('proceso1_recepcion_llamadas')
     ->join('samus', 'samus.id', '=', 'proceso1_recepcion_llamadas.samu_id')
     ->join('personals', 'personals.id', '=', 'proceso1_recepcion_llamadas.personal_id')
     ->join('turnos', 'turnos.id', '=', 'proceso1_recepcion_llamadas.turno_id')
     ->join('tipo_llamadas', 'tipo_llamadas.id', '=', 'proceso1_recepcion_llamadas.tipo_llamada_id')
     ->join('localizacion_llamadas', 'localizacion_llamadas.id', '=', 'proceso1_recepcion_llamadas.localizacion_llamada_id')

     ->join('tipo_documentos', 'tipo_documentos.id', '=', 'personals.tipo_documento_id')
     ->join('estado_civils', 'estado_civils.id', '=', 'personals.estado_civil_id')
     ->join('cargos', 'cargos.id', '=', 'personals.cargo_id')
     //->leftjoin('escuelas', 'escuelas.id', '=', 'personas.escuela_id')
     ->where('proceso1_recepcion_llamadas.borrado','0')
     ->where(function($query) use ($buscar){
        $query->where('proceso1_recepcion_llamadas.codigo','like','%'.$buscar.'%');
        $query->orWhere('samus.nombre','like','%'.$buscar.'%');
        $query->orWhere('personals.nro_documento','like','%'.$buscar.'%');
        $query->orWhere('personals.apellidos','like','%'.$buscar.'%');
        $query->orWhere('personals.nombres','like','%'.$buscar.'%');
        $query->orWhere('turnos.turno','like','%'.$buscar.'%');
        $query->orWhere('tipo_llamadas.tipo','like','%'.$buscar.'%');
        $query->orWhere('localizacion_llamadas.localizacion','like','%'.$buscar.'%');
   
    })
     ->orderBy('proceso1_recepcion_llamadas.id')
     ->select(
        'proceso1_recepcion_llamadas.id',
        'proceso1_recepcion_llamadas.codigo',
        'proceso1_recepcion_llamadas.samu_id',
        'proceso1_recepcion_llamadas.personal_id',
        'proceso1_recepcion_llamadas.turno_id',
        'proceso1_recepcion_llamadas.fecha',
        'proceso1_recepcion_llamadas.hora_ingreso',
        'proceso1_recepcion_llamadas.llamada_pertinente',
        'proceso1_recepcion_llamadas.tipo_llamada_id',
        'proceso1_recepcion_llamadas.localizacion_llamada_id',
        'proceso1_recepcion_llamadas.derivada',
        'proceso1_recepcion_llamadas.observaciones',
        'proceso1_recepcion_llamadas.user_id',
        'samus.nombre as samu',

        'personals.codigo as codPersonal',

        'personals.nro_documento as docPersonal',
        'personals.apellidos as apePersonal',
        'personals.nombres as nomPersonal',
        'personals.telefono as telPersonal',
        'personals.genero as genPersonal',
        'personals.ocupacion as ocuPersonal',

        'tipo_documentos.tipo as tipoDocPersonal',
        'cargos.descripcion as cargoPersonal',
        'estado_civils.descripcion as estadoCivilPersonal',

        'turnos.turno as turno',
        'tipo_llamadas.tipo as tipoLlamada',
        'localizacion_llamadas.localizacion as localizacionLlamada',
     )
     ->paginate(30);

     //$procesos=Proceso1RecepcionLlamada::where('borrado','0')->orderBy('id') ->paginate(30);

     foreach ($procesos as $key => $dato) {

        $proceso2=Proceso2Consejeria::where('borrado','0')->where('codigo', $dato->codigo)->first();

        if($proceso2 != null){
            $personalResponsable=Personal::where('id', $proceso2->personal_id)->first();
            $cargo=Cargo::where('id', $personalResponsable->cargo_id)->first();
            $personalResponsable->cargo=$cargo;
            
            $prioridad=Prioridad::where('id', $proceso2->prioridad_id)->first();
            $cieDiagnostico=CieDiagnostico::where('id', $proceso2->cie_diagnostico_id)->first();

            $paciente=Paciente::where('proceso2_consejeria_id', $proceso2->id)->first();
            $tipoDocumento=TipoDocumentoPaciente::where('id', $paciente->tipo_documento_paciente_id)->first();
            $seguro=Seguro::where('id', $paciente->seguro_id)->first();
            $paciente->tipoDocumento=$tipoDocumento;
            $paciente->seguro=$seguro;
            
            $proceso2->personalResponsable=$personalResponsable;
            $proceso2->prioridad=$prioridad;
            $proceso2->cieDiagnostico=$cieDiagnostico;
            $proceso2->paciente=$paciente;
            
        }
        
        $dato->proceso2 = $proceso2;
        
        $proceso3=Proceso3DespachoMovil::where('borrado','0')->where('codigo', $dato->codigo)->first();
        
        if($proceso3 != null){
            $tipoAtencion=TipoAtencion::where('id', $proceso3->tipo_atencion_id)->first();
            $distrito=Distrito::where('id', $proceso3->distrito_id)->first();
            $provincia=Provincia::where('id', $distrito->provincia_id)->first();
            $departemento=Departamento::where('id', $provincia->departamento_id)->first();
            $personalResponsable=Personal::where('id', $proceso3->personal_id)->first();
            $cargo=Cargo::where('id', $personalResponsable->cargo_id)->first();
            $personalResponsable->cargo=$cargo;
            
            $proceso3->tipoAtencion=$tipoAtencion;
            $proceso3->distrito=$distrito;
            $proceso3->provincia=$provincia;
            $proceso3->departemento=$departemento;
            $proceso3->personalResponsable=$personalResponsable;
            
            
        }
        
        $dato->proceso3 = $proceso3;
        
        $proceso4=Proceso4AsistenciaMedica::where('borrado','0')->where('codigo', $dato->codigo)->first();

        if($proceso4 != null){
            $antecedente=Antecedente::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $paciente=PacienteAsistencia::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $tipoDocumento=TipoDocumentoPaciente::where('id', $paciente->tipo_documento_paciente_id)->first();
            $seguro=Seguro::where('id', $paciente->seguro_id)->first();
            $paciente->tipoDocumento=$tipoDocumento;
            $paciente->seguro=$seguro;

            $enfermedadActual=EnfermedadActual::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $examenPreferencial=ExamenPreferencial::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $gestante=Gestante::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $mecanismosLesion=MecanismosLesion::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $diagnosticos=Diagnostico::where('proceso4_asistencia_medica_id', $proceso4->id)->get();
            $tratamiento=Tratamiento::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $procedimiento=Procedimiento::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $establecimientoDestino=EstablecimientoDestino::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $responsablePaciente=Responsable::where('proceso4_asistencia_medica_id', $proceso4->id)->first();
            $tipoDocumentoResponsable=TipoDocumentoPaciente::where('id', $responsablePaciente->tipo_documento_id)->first();
            $responsablePaciente->tipoDocumento=$tipoDocumentoResponsable;

            $medico=Personal::where('id', $proceso4->personal_medico_id)->first();
            $cargo=Cargo::where('id', $medico->cargo_id)->first();
            $medico->cargo=$cargo;

            $enfermera=Personal::where('id', $proceso4->personal_enfermera_id)->first();
            $cargo=Cargo::where('id', $enfermera->cargo_id)->first();
            $enfermera->cargo=$cargo;
            
            $proceso4->antecedente=$antecedente;
            $proceso4->paciente=$paciente;
            $proceso4->enfermedadActual=$enfermedadActual;
            $proceso4->examenPreferencial=$examenPreferencial;
            $proceso4->gestante=$gestante;
            $proceso4->mecanismosLesion=$mecanismosLesion;
            $proceso4->diagnosticos=$diagnosticos;
            $proceso4->tratamiento=$tratamiento;
            $proceso4->procedimiento=$procedimiento;
            $proceso4->establecimientoDestino=$establecimientoDestino;
            $proceso4->responsablePaciente=$responsablePaciente;
            $proceso4->medico=$medico;
            $proceso4->enfermera=$enfermera;
                    
        }

        $dato->proceso4 = $proceso4;

     }

          return [
            'pagination'=>[
                'total'=> $procesos->total(),
                'current_page'=> $procesos->currentPage(),
                'per_page'=> $procesos->perPage(),
                'last_page'=> $procesos->lastPage(),
                'from'=> $procesos->firstItem(),
                'to'=> $procesos->lastItem(),
            ],
            'procesos'=>$procesos
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
        //
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
