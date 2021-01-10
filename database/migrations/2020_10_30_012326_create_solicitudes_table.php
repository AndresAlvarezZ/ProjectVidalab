<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
          $table->increments('idDeSolicitud');
          $table->integer('idFactura')->unsigned();
          $table->string('nombreDelCiente');
          $table->string('domicilioDelCiente');
          $table->string('telefonoDelCliente');
          $table->string('analisisSolicitados');
          $table->decimal('costoDelServicio', 25, 2);
          $table->string('estado');
          $table->timestamps();
          //relaciones
          $table->foreign('idFactura')->references('idFactura')->on('facturas')
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
        Schema::dropIfExists('solicitudes');
    }
}
