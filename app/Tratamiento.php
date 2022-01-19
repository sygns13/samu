<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamientos';
    protected $fillable = ['oxigenoterapia',
                            'flujo',
                            'fluidoterapia',
                            'fluidoterapia_a',
                            'medicamentos',
                            'via',
                            'hora',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'];
	protected $guarded = ['id'];
}
