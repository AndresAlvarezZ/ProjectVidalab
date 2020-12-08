<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspectos', function (Blueprint $table) {
            $table->id();
            $table->string('telefono');
            $table->string('correoElectronico');
            $table->string('facebook');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->text('ubicacion');
            $table->text('horarioRegular');
            $table->text('horarioEspecial')->nullable();
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->text('lema');
            $table->text('valores')->nullable();
            $table->text('historia');
            $table->text('compromiso')->nullable();
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
        Schema::dropIfExists('aspectos');
    }
}
