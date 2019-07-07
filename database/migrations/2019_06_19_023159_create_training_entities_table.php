<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingEntitiesTable extends Migration
{ 
    /** ENTIDADES FORMADORAS
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('naturaleza');
            $table->string('representanteLegal');
            $table->string('ruc');
            $table->string('actividadEconomica');
            $table->string('correo');
            $table->string('direccion');
            $table->string('telefono');
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
        Schema::dropIfExists('training_entities');
    }
}
