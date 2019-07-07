<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessProjectPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_project_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('titulo');
             $table->string('analisis');
             $table->string('objetivo');
             $table->string('descripcion');
             $table->string('indicador');
             $table->string('medicion');
             $table->string('meta');
             $table->string('fuenteDatos');
             $table->double('presupuesto');
             $table->string('beneficiosEsperados');
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
        Schema::dropIfExists('business_project_plans');
    }
}
