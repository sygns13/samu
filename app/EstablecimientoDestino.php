<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstablecimientoDestino extends Model
{
    protected $table = 'establecimiento_destinos';
    protected $fillable = ['hora_llegada',
                            'establecimiento',
                            'categoria',
                            'hora_recepcion',
                            'profesional_acepta',
                            'apellidos_nombres_profecional',
                            'hora_salida',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
