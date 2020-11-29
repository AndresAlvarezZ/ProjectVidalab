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
            $table->increments('id');
            $table->string('nombreDelUsuarioAdministrador');
            $table->string('primerApellidoAdministrador');
            $table->string('segundoApellidoAdministrador');
            $table->integer('dniDelUsuarioAdministrador');
            $table->string('email');
            $table->integer('telefonoDelUsuarioAdministrador');
            $table->string('password');
            $table->boolean('rol');
            $table->boolean('estadoDelUsuarioAdministrador');
            $table->string('motivoDeEstadoDelUsuarioAdministrador');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
