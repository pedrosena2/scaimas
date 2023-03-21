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
        Schema::create('Entrega_Ambientes', function (Blueprint $table) {
            $table->bigIncrements('id_entrega_ambiente');
            $table->unsignedBigInteger('id_novedad_ambiente');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_activos');
            $table->dateTime('fecha_hora_entrega');
            $table->dateTime('fecha_hora_recibido');
            $table->string('estado');
            
            $table->timestamps();

            $table->foreign('id_novedad_ambiente')->references('id_novedad_ambiente')->on('Novedad_Ambientes');
            $table->foreign('id_usuario')->references('id_usuario')->on('Usuarios');
            $table->foreign('id_activos')->references('id_activos')->on('Activos');
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
