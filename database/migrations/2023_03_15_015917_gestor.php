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
        Schema::create('Gestores', function (Blueprint $table) {
            $table->bigIncrements('id_gestor');
            $table->unsignedBigInteger('id_ficha');

            $table->timestamps();

            $table->foreign('id_ficha')->references('id_ficha')->on('Fichas');
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
