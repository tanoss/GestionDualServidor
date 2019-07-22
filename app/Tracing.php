<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    protected $table ="follow"; 
    protected $fillable = ['cordinadorCarrera','horasFormacion'];

    public function Student()
    {
        return $this->belongsTo("App\Student");
    }


    public function TrainingFrameworkPlans()
    {
        return $this->hasMany("App\TrainingFrameworkPlan");
    }

}



