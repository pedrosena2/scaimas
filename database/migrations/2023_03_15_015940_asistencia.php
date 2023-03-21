<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Asistencias', function (Blueprint $table) {
            $table->bigIncrements('id_asistencia');
            $table->unsignedBigInteger('id_ficha');
            $table->unsignedBigInteger('id_usuario');
            $table->dateTime('fecha_hora');
            $table->string('asistio');
            
            $table->timestamps();

            $table->foreign('id_ficha')->references('id_ficha')->on('Fichas');
            $table->foreign('id_usuario')->references('id_usuario')->on('Usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
