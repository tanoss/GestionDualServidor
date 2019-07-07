<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idEntidadFormadora');
            $table->integer('idPeriodoLectivo');
            $table->integer('idPeriodoAcademico');
            $table->integer('idTutorAcademico');
            $table->integer('idTutorGeneral');
            $table->integer('idTutorEspecifico');
            $table->string('cordinadorCarrera');
            $table->integer('horasFormacion');
            $table->integer('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            // $table->timestamps();
            // $table->timestamps();
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
        Schema::dropIfExists('follow');
    }
}
