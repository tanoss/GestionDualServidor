<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProjectPlan extends Model
{
    protected $fillable = ['titulo',
    'analisis',
    'objetivo',
    'descripcion',
    'indicador',
    'medicion',
    'meta',
    'fuenteDatos',
    'presupuesto',
    'beneficiosEsperados',
    'prioridad',
];

    public function TrainingFrameworkPlan()
    {
        return $this->belongsTo("App\TrainingFrameworkPlan");
    }
}