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
        Schema::create('Ambientes', function (Blueprint $table) {
            $table->bigIncrements('id_ambiente');
            $table->unsignedBigInteger('id_bloque');
            $table->unsignedBigInteger('id_usuario');
            $table->string('nombre_ambiente');
            $table->string('item');

            $table->timestamps();

            $table->foreign('id_bloque')->references('id_bloque')->on('Bloques');
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
