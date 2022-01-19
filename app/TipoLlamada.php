<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoLlamada extends Model
{
    protected $table = 'tipo_llamadas';
    protected $fillable = ['tipo','activo','borrado'];
	protected $guarded = ['id'];
}
