<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['identificacion','nombre1','nombre2','apellido1','apellido2','telefonoDomicilio','correoElectronicoInstitucional','correoElectronicoPersonal','gender_id'] ;

    public function student(){
        return $this->hasMany("App\Student");
    }

}

