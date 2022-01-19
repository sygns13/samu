<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CieDiagnostico extends Model
{
    protected $table = 'cie_diagnosticos';
    protected $fillable = ['descripcion', 'codigo', 'activo', 'borrado', 'user_id'];
	protected $guarded = ['id'];
}
