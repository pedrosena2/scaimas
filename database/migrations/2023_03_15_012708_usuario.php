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
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('id_tipo');
            $table->string('tipo_documento');
            $table->integer('numero_docuemento')->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('barrio');
            $table->integer('numero_celular');
            $table->string('correo_institucional');
            $table->string('pass');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_tipo')->references('id_tipo')->on('tipo_usuarios');
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
