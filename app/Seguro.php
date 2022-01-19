<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $table = 'seguros';
    protected $fillable = ['descripcion','activo','borrado'];
	protected $guarded = ['id'];
}
