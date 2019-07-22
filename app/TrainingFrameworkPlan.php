<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingFrameworkPlan extends Model
{
    protected $fillable = ['prioridad',] ;

     public function RotationPlan()
     {
         return $this->hasMany("App\RotationPlan");
     }
    
    public function BusinessProjectPlan()
    {
        return $this->hasMany("App\BusinessProjectPlan");
    }

    public function Objective()
    {
        return $this->hasMany("App\Objective");
    }

    public function LearningReport()
    {
        return $this->hasMany("App\LearningReport");
    }
    public function Tracing()
    {
        return $this->belongsTo("App\Tracing");
    }

}
