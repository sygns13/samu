<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    protected $table = 'procedimientos';
    protected $fillable = ['proc_check1',
                            'proc_check2',
                            'proc_check3',
                            'proc_check4',
                            'proc_check5',
                            'proc_check6',
                            'proc_check7',
                            'proc_check8',
                            'proc_check9',
                            'proc_check10',
                            'proc_check11',
                            'proc_check12',
                            'proc_check13',
                            'proc_check14',
                            'proc_check15',
                            'activo',
                            'borrado',
                            'proceso4_asistencia_medica_id'
                        ];
	protected $guarded = ['id'];
}
