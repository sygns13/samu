<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';
    protected $fillable = ['cie10', 'descripcion', 'activo', 'borrado', 'proceso4_asistencia_medica_id', 'cie_diagnostico_id'];
	protected $guarded = ['id'];
}
