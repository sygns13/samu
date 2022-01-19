<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = 'estado_civils';
    protected $fillable = ['descripcion','activo','borrado'];
	protected $guarded = ['id'];
}
