<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolPeriod extends Model
{
    protected $fillable = ['descripcion','fechaInicio','fechaFin','matriculable','codigo'];
}
