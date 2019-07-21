<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningReport extends Model
{
    protected $fillable = ['semana','calificacion','fechaEntrega','reflexion','observaciones','prioridad'] ;


    public function TrainingFrameworkPlan()
    {
        return $this->belongsTo("App\TrainingFrameworkPlan");
    }

}
