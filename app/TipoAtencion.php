<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAtencion extends Model
{
    protected $table = 'tipo_atencions';
    protected $fillable = ['tipo','activo','borrado'];
	protected $guarded = ['id'];
}
