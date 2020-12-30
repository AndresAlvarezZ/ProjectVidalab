<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFondosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondos', function (Blueprint $table) {
            $table->id();
            $table->string('imagenDeBienvenida');
            $table->string('imagenDeHistoria');
            $table->string('imagenDeMision');
            $table->string('imagenDeVision');
            $table->string('imagenDeValores');
            $table->string('imagenDeCompromiso');
            $table->string('imagenDeProfesionales');
            $table->string('imagenDeContactos');
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
        Schema::dropIfExists('fondos');
    }
}
