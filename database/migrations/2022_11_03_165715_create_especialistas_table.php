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
        Schema::create('especialistas', function (Blueprint $table) {
            $table->id();
            $table->string('Especialidad');
            $table->string('Nombres');
            $table->string('Documento')->unique();
            $table->date('Finicio');
            $table->date('Ffin');
            $table->date('Fpoliza');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Estado');
            $table->string('Documentos');
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
};
