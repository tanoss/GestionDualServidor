<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotationPlan extends Model
{
    protected $fillable = ['idPlanMarcoFormacion','conocimientosTeoricos','conocimientosProcedimentales','conocimientosActitudinales','prioridad'];

    public function planmarcoformacionrotacion()
    {
        return $this->belongsTo(FrameworkPlanTraining::class);
    }
}
