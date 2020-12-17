<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuevosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevos', function (Blueprint $table) {
            $table->id();
            $table->string('valor')->nullable();
            $table->string('matricula')->nullable();
            $table->string('vivienda')->nullable();
            $table->string('ci')->nullable();
            $table->string('libreta')->nullable();
            $table->string('pago')->nullable();
            $table->string('actividad')->nullable();
            $table->string('ciapoderados')->nullable();
            $table->string('familiar')->nullable();
            $table->string('defuncion')->nullable();
            $table->string('divocio')->nullable();
            $table->string('denuncia')->nullable();
            $table->string('viviendafamiliar')->nullable();
            $table->string('semestre')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('gestion_id');
            $table->foreign('gestion_id')->references('id')->on('gestions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nuevos');
    }
}
