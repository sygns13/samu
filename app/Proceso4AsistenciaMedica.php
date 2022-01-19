<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso4AsistenciaMedica extends Model
{
    protected $table = 'proceso4_asistencia_medicas';
    protected $fillable = ['relato_evento',
                            'es_gestante',
                            'ocurrencias_atencion',
                            'personal_medio_id',
                            'personal_enfermera_id',
                            'requirio_traslado',
                            'activo',
                            'borrado',
                            'user_id'
                        ];
	protected $guarded = ['id'];
}
