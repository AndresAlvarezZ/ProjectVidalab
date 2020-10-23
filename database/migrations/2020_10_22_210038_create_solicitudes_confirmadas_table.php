<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesConfirmadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_confirmadas', function (Blueprint $table) {
            $table->increments('idDeSolicitudConfirmada');
            $table->integer('idDeSolicitudEnEspera');
            $table->integer('idFactura');
            $table->string('nombreDelCiente');
            $table->string('domicilioDelCiente');
            $table->string('telefonoDelCliente');
            $table->string('analisisSolicitados');
            $table->decimal('costoDelServicio');
            $table->string('estado');
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
        Schema::dropIfExists('solicitudes_confirmadas');
    }
}
