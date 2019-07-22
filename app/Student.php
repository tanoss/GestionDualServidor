<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['notaPostulacion','tituloBachiller'];

   public function people(){
       return $this->belongsTo("App\Person");
   }

   public function Tracing()
   {
       return $this->hasMany("App\Tracing");
   }

}

