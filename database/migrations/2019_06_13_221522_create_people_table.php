<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identificacion');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('telefonoCelular');
            $table->string('telefonoDomicilio');
            $table->string('correoElectronicoInstitucional');
            $table->string('correoElectronicoPersonal');
            $table->integer('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
