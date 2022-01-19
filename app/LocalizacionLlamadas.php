<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalizacionLlamadas extends Model
{
    protected $table = 'localizacion_llamadas';
    protected $fillable = ['localizacion','activo','borrado'];
	protected $guarded = ['id'];
}
