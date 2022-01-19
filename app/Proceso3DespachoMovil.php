<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso3DespachoMovil extends Model
{
    protected $table = 'proceso3_despacho_movils';
    protected $fillable = ['codigo',
                            'despacho_efectivo',
                            'oportuno',
                            'hora_indicacion',
                            'hora_salida_base',
                            'hora_llegada',
                            'tipo_atencion_id',
                            'distrito_id',
                            'direccion',
                            'tipo_emergencia',
                            'hora_salida_foco',
                            'hora_regreso_base',
                            'personal_id',
                            'observaciones',
                            'activo',
                            'borrado',
                            'user_id'
                        ];
	protected $guarded = ['id'];
}
