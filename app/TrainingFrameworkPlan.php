<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingFrameworkPlan extends Model
{
    protected $fillable = ['prioridad',] ;

    // public function planrotacion()
    // {
    //     return $this->hasOne("App\BusinessProjectPlan");
    // }
    
    public function businessprojectplan()
    {
        return $this->hasMany("App\BusinessProjectPlan");
    }
}
