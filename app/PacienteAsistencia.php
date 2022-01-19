<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacienteAsistencia extends Model
{
    protected $table = 'pacientes_asistencia';
    protected $fillable = ['tipo_documento_paciente_id',
                            'nro_documento',
                            'apellidos',
                            'nombres',
                            'tipo_telefono',
                            'telefono',
                            'genero',
                            'edad',
                            'tipo_edad',
                            'seguro_id',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
