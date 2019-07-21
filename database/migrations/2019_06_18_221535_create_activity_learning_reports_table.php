<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLearningReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_learning_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('tipo');
            $table->date('fecha');
            $table->string('horaIngreso');
            $table->string('horaSalida');
            $table->string('horaAlmuerzo');
            $table->string('horasTotales');
            $table->integer('prioridad');
            $table->integer('learning_report_id');
            $table->foreign('learning_report_id')->references('id')->on('learning_reports');
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
        Schema::dropIfExists('activity_learning_reports');
    }
}
