<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->string('codigoDelAnalisis')->primary();
            $table->string('nombreDelAnalisis');
            $table->text('descripcionDelAnalisis');
            $table->integer('categoriaDelAnalisis');
            $table->decimal('costoDelAnalisis', 16, 1);
            $table->decimal('descuentoDelAnalisis', 16, 1);
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
        Schema::dropIfExists('pruebas');
    }
}
