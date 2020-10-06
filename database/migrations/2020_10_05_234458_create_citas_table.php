<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id('idDeLaCita');
            $table->unsignedBigInteger('idDeLaEmpresa');
            $table->foreign('idDeLaEmpresa')->references('idDeLaEmpresa')->on('empresas');
            $table->string('nombreDelSolicitante');
            $table->string('primerApellidoDelSolicitante');
            $table->string('segundoApellidoDelSolicitante');
            $table->string('numeroDeClientesPorAtender');
            $table->date('fechaDeCita');
            $table->time('horaDeCita');
            $table->text('tiposDeAnalisisRequeridos');
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
        Schema::dropIfExists('citas');
    }
}
