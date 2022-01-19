<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';
    protected $fillable = ['nombre', 'provincia_id', 'codigo','activo','borrado'];
	protected $guarded = ['id'];
}
