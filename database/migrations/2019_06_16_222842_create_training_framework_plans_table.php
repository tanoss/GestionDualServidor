<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTrainingFrameworkPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_framework_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prioridad');
            // $table->integer('tracing_id');
            // $table->foreign('tracing_id')->references('id')->on('follow');
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
        Schema::dropIfExists('training_framework_plans');
    }
}