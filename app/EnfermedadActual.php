<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnfermedadActual extends Model
{
    protected $table = 'enfermedad_actuals';
    protected $fillable = ['tiempo',
                            'inicio',
                            'curso',
                            'sintomas',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
