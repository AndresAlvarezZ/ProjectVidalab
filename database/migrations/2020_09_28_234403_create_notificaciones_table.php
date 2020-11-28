<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
          //Atributos del modelo
            $table->id();
            $table->integer('idUsuarioAdministrador')->unsigned();
            $table->text('receptorDeNotificacion');
            $table->text('asuntoDeNotificacion');
            $table->text('mensajeDeNotificacion');
            $table->integer('tipoDeNotificacion');
            $table->string('archivo');
            $table->timestamps();
          //relaciones del modelo
            $table->foreign('idUsuarioAdministrador')->references('id')->on('administradors')
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
        Schema::dropIfExists('notificaciones');
    }
}
