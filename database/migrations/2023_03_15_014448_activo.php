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
        Schema::create('Activos', function (Blueprint $table) {
            $table->bigIncrements('id_activos');
            $table->unsignedBigInteger('id_ambiente');
            $table->string('elemento');
            $table->integer('cantidad');
            $table->string('serial');
            
            $table->timestamps();

            $table->foreign('id_ambiente')->references('id_ambiente')->on('Ambientes');
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
