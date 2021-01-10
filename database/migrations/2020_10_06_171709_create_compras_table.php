<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('idCompras');
            $table->string('dniDelCliente');
            $table->string('codigoDelAnalisis')->nullable();
            $table->string('codigoDelPaquete')->nullable();
            $table->string('nombre');
            $table->decimal('costoDelServicio');
            $table->decimal('descuento');
            $table->DateTime('fecha');
            $table->timestamps();
            //relaciones
            $table->foreign('dniDelCliente')->references('dniDelCliente')->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('codigoDelAnalisis')->references('codigoDelAnalisis')->on('pruebas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('codigoDelPaquete')->references('codigoDelPaquete')->on('paquetes')
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
        Schema::dropIfExists('compras');
    }
}
