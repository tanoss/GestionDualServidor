<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semana');
            $table->double('calificacion');
            //$table->timestamps('fechaEntrega');
            $table->string('reflexion');
            $table->string('observaciones');
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
        Schema::dropIfExists('learning_reports');
    }
}
