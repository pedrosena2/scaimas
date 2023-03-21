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
        Schema::create('Programas', function (Blueprint $table) {
            $table->bigIncrements('id_programa');
            $table->unsignedBigInteger('id_area');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('id_area')->references('id_area')->on('Areas');
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
