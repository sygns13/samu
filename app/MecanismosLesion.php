<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MecanismosLesion extends Model
{
    protected $table = 'mecanismos_lesions';
    protected $fillable = ['tipo_accidente',
                            'vehiculo',
                            'impacto',
                            'persona_afectada',
                            'proteccion_check1',
                            'proteccion_check2',
                            'proteccion_check3',
                            'situacion_check1',
                            'situacion_check2',
                            'situacion_check3',
                            'agrecion',
                            'ahogamiento',
                            'caida_altura',
                            'quemaduras',
                            'sc_tipo',
                            'grado_check1',
                            'grado_check2',
                            'grado_check3',
                            'grado_check4',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
