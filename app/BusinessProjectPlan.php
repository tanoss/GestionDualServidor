<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProjectPlan extends Model
{
    protected $fillable = ['titulo','analisis','objetivo','descripcion','indicador','medicion','meta','fuenteDatos','presupuesto','beneficiosEsperados','prioridad','frameorkplanplantraining_id'];

    public function planmarcoformacion()
    {
        return $this->belongsTo(FrameworkPlanTraining::class);
    }
}