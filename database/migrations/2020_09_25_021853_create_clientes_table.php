<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('idUsuario')->unsigned();
            $table->integer('dniDelCliente')->primary();
            $table->string('nombreDelCliente');
            $table->string('imagenDelCliente')->nullable();
            $table->string('primerApellidoDelCliente');
            $table->string('segundoApellidoDelCliente');
            $table->date('fechaDeNacimientoDelCliente');
            $table->integer('edadDelCliente');
            $table->string('correoDelCliente');
            $table->integer('telefonoDelCliente');
            $table->text('domicilioDelCliente');
            $table->boolean('aceptacionDeTerminos');
            $table->timestamps();
            //relaciones
            $table->foreign('idUsuario')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
