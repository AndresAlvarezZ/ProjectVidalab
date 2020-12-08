<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreDelEspecialista');
            $table->string('segundoNombreDelEspecialista')->nullable();
            $table->string('primerApellidoDelEspecialista');
            $table->string('segundoApellidoDelEspecialista');
            $table->string('correoDelEspecialista');
            $table->text('sedeDelEspecialista');
            $table->text('especialidadesDelEspecialista');
            $table->string('imagenDelEspecialista')->nullable();
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
        Schema::dropIfExists('especialistas');
    }
}
