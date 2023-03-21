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
        Schema::create('Instructor_Areas', function (Blueprint $table) {
            $table->bigIncrements('id_i_area');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_area');
            $table->string('estado');
            
            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('Usuarios');
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
