<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    protected $table = 'antecedentes';
    protected $fillable = ['patologia_previa',
                            'medicacion',
                            'alergias',
                            'fur',
                            'gestacion',
                            'parto',
                            'aborto',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
