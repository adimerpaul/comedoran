<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class   CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('ingreso')->nullable();
            $table->string('facultad')->nullable();
            $table->string('carrera')->nullable();
            $table->string('semestre')->nullable();
            $table->string('discapacidad')->nullable();
            $table->string('hermanos')->nullable();
            $table->string('otros')->nullable();
            $table->string('observacion')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('fichas');
    }
}
