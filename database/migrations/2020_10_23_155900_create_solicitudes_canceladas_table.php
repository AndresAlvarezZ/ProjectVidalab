<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesCanceladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_canceladas', function (Blueprint $table) {
          $table->increments('idDeSolicitudCancelada');
          $table->integer('idDeSolicitudEnEspera')->nullable();
          $table->integer('idDeSolicitudConfirmada')->nullable();
          $table->integer('idFactura');
          $table->string('nombreDelCiente');
          $table->string('domicilioDelCiente');
          $table->string('telefonoDelCliente');
          $table->string('analisisSolicitados');
          $table->decimal('costoDelServicio');
          $table->timestamps();
          //relaciones
          $table->foreign('idFactura')->references('idFactura')->on('facturas')
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
        Schema::dropIfExists('solicitudes_canceladas');
    }
}
