<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $fillable = ['descripcion','activo','borrado'];
	protected $guarded = ['id'];
}
