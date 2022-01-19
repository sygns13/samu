<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $fillable = ['tipo_documento_id',
                            'nro_documento',
                            'apellidos_nombres',
                            'parentesco',
                            'pertenencias_paciente',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
