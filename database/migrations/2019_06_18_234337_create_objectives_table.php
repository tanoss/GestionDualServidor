<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->integer('nivelLogroEsperado');
            $table->integer('nivelLogroAlcanzado');
            $table->string('tareas');
            $table->string('puestoAprendizaje');
            $table->integer('semanasTrabajo');
            $table->integer('semana');
            $table->string('responsable');
            $table->integer('prioridad');
            $table->integer('frameworkplantraining_id');
            $table->foreign('frameworkplantraining_id')->references('id')->on('training_framework_plans');
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
        Schema::dropIfExists('objectives');
    }
}
