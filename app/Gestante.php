<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestante extends Model
{
    protected $table = 'gestantes';
    protected $fillable = ['au',
                            'fcf',
                            'mf',
                            'situacion',
                            'posicion',
                            'mo',
                            'du',
                            'i',
                            'f',
                            'dilatacion',
                            'b',
                            'ap',
                            'pla',
                            'genitourinario_check1',
                            'genitourinario_check2',
                            'genitourinario_check3',
                            'genitourinario_check4',
                            'genitourinario_check5',
                            'locomotor_check1',
                            'locomotor_check2',
                            'locomotor_check3',
                            'neurologico_check1',
                            'neurologico_check2',
                            'neurologico_check3',
                            'neurologico_check4',
                            'neurologico_check5',
                            'neurologico_check6',
                            'neurologico_check7',
                            'neurologico_check8',
                            'otros',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
