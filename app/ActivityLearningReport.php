<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLearningReport extends Model
{
    protected $fillable = ['descripcion','tipo','horaIngreso','horaSalida','horaAlmuerzo','horaTotales','prioridad','learningreport_id'] ;
}
