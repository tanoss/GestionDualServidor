<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $fillable = ['descripcion','nivelLogroEsperado','nivelLogroAlcanzado','tareas','puestoAprendizaje','semanasTrabajo','semana','responsable','prioridad'] ;
    public function TrainingFrameworkPlan()
    {
        return $this->belongsTo("App\TrainingFrameworkPlan");
    }
}
