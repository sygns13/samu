<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoPaciente extends Model
{
    protected $table = 'tipo_documento_pacientes';
    protected $fillable = ['tipo','activo','borrado'];
	protected $guarded = ['id'];
}
