<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samu extends Model
{
    protected $table = 'samus';
    protected $fillable = ['nombre','activo','borrado'];
	protected $guarded = ['id'];
}
