<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso1RecepcionLlamada extends Model
{
    protected $table = 'proceso1_recepcion_llamadas';
    protected $fillable = ['codigo',
                            'samu_id',
                            'personal_id',
                            'turno_id',
                            'fecha',
                            'hora_ingreso',
                            'llamada_pertinente',
                            'tipo_llamada_id',
                            'localizacion_llamada_id',
                            'derivada',
                            'observaciones',
                            'user_id',
                            'activo',
                            'borrado',
                        ];
	protected $guarded = ['id'];
}
