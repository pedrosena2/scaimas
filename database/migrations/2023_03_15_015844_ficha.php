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
        Schema::create('Fichas', function (Blueprint $table) {
            $table->bigIncrements('id_ficha');
            $table->unsignedBigInteger('id_programa');
            $table->unsignedBigInteger('id_usuario');
            $table->integer('numero');
            $table->string('estado');
            $table->integer('trimestre');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->string('jornada');
            $table->string('ficha_matricula');

            $table->timestamps();

            $table->foreign('id_programa')->references('id_programa')->on('Programas');
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
