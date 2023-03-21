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
        Schema::create('Novedad_Ambientes', function (Blueprint $table) {
            $table->bigIncrements('id_novedad_ambiente');
            $table->unsignedBigInteger('id_usuario');
            $table->dateTime('fecha');
            $table->string('descripcion');
            $table->binary('documento');

            $table->timestamps();

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
