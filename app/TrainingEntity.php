<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingEntity extends Model
{
    protected $fillable = ['nombre','naturaleza','representanteLegal','ruc','actividadEconomica','correo','direccion','telefono'] ;
}
