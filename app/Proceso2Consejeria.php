<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso2Consejeria extends Model
{
    protected $table = 'proceso2_consejerias';
    protected $fillable = ['codigo',
                            'hora',
                            'personal_id',
                            'codigo_atencion',
                            'hora_derivacion',
                            'personal_id2',
                            'prioridad_id',
                            'cie_diagnostico_id',
                            'requiere_despacho',
                            'activo',
                            'borrado',
                            'user_id'
                        ];
	protected $guarded = ['id'];
}
