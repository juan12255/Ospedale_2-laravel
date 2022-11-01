<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alianzas', function (Blueprint $table) {
            $table->string('Razon_Social');
            $table->string('Nit')->primary();
            $table->string('Representante');
            $table->string('Objeto');
            $table->string('FinicioA');
            $table->string('FfinA');
            $table->string('Prorroga');
            $table->string('Camara');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Supervisor');
            $table->string('EstadoA');
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
        Schema::dropIfExists('alianzas');
    }
};
