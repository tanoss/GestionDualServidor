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
}
