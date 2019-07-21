<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLearningReport extends Model
{
    protected $fillable = ['descripcion','tipo','fecha','horaIngreso','horaSalida','horaAlmuerzo','horasTotales','prioridad'] ;
    public function LearningReport()
    {
        return $this->belongsTo("App\LearningReport");
    }

}
