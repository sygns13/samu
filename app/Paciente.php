<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
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
                            'proceso2_consejeria_id',
                            'activo',
                            'borrado'
                        ];
	protected $guarded = ['id'];
}
