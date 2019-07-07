<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['notaPostulacion','tituloBachiller','person_id'];

   public function people(){
       return $this->belongsTo("App\Person");
   }
}

