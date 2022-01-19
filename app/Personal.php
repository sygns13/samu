<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';
    protected $fillable = [ 'codigo',
                            'tipo_documento_id',
                            'nro_documento',
                            'fecha_nacimiento',
                            'apellidos',
                            'nombres',
                            'telefono',
                            'genero',
                            'edad',
                            'estado_civil_id',
                            'ocupacion',
                            'nro_colegiatura',
                            'cargo_id',
                            'activo',
                            'borrado',
                            'user_id'
                        ];
	protected $guarded = ['id'];
}
