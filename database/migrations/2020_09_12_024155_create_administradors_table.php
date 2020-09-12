<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->id();
            $table->string('nombreDelUsuarioAdministrador');
            $table->string('primerApellidoAdministrador');
            $table->string('segundoApellidoAdministrador');
            $table->integer('dniDelUsuarioAdministrador');
            $table->string('correoDelUsuarioAdministrador');
            $table->integer('telefonoDelUsuarioAdministrador');
            $table->string('contrasenaDelUsuarioAdministrador');
            $table->string('rol');
            $table->string('estadoDelUsuarioAdministrador');
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
        Schema::dropIfExists('administradors');
    }
}
