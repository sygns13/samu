<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenPreferencial extends Model
{
    protected $table = 'examen_preferencials';
    protected $fillable = ['fc',
                            'fr',
                            'pa',
                            'temperatura',
                            'saturacion',
                            'glicemia',
                            'ocular',
                            'verbal',
                            'motora',
                            'piel_check1',
                            'piel_check2',
                            'piel_check3',
                            'piel_check4',
                            'pupilas',
                            'cabeza_check1',
                            'cabeza_check2',
                            'cabeza_check3',
                            'cabeza_check4',
                            'cabeza_check5',
                            'cabeza_check6',
                            'torax_check1',
                            'torax_check2',
                            'torax_check3',
                            'torax_check4',
                            'torax_check5',
                            'torax_check6',
                            'cardiovascular_check1',
                            'cardiovascular_check2',
                            'cardiovascular_check3',
                            'cardiovascular_check4',
                            'cardiovascular_obs',
                            'abdomen_check1',
                            'abdomen_check2',
                            'abdomen_check3',
                            'abdomen_check4',
                            'abdomen_check5',
                            'abdomen_check6',
                            'abdomen_otros',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
