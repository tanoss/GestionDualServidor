<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolPeriodsTable extends Migration
{
    /** PERIODOS LECTIVOS
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->tinyInteger('matriculable');
            $table->string('codigo');
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
        Schema::dropIfExists('school_periods');
    }
}
