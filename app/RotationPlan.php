<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotationPlan extends Model
{
    protected $fillable = ['conocimientosTeoricos','conocimientosProcedimentales','conocimientosActitudinales','prioridad'];

    public function TrainingFrameworkPlan()
    {
        return $this->belongsTo("App\TrainingFrameworkPlan");
    }
}
