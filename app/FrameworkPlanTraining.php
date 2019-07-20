<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrameworkPlanTraining extends Model
{
    protected $fillable = ['prioridad',] ;

    public function planrotacion()
    {
        return $this->hasOne(RotationPlan::class);
    }
    
    public function BusinessProjectPlan()
    {
        return $this->hasMany(App\BusinessProjectPlan);
    }
}
