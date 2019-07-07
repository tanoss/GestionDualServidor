<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //fotos de perfil
        Schema::create('profile_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idPersona');
            $table->foreign('idPersona')->references('id')->on('people');;
            $table->string('tipoArchivo');
            $table->string('nombreArchivo');
           // $table->longblob('adjunto');
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
        Schema::dropIfExists('profile_images');
    }
}
