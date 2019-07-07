<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningReport extends Model
{
    protected $fillable = ['semana','calificacion','reflexion','observaciones','prioridad','frameworkplantraining_id'] ;
}
