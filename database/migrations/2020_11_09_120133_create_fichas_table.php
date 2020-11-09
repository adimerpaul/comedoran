<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
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
            $table->string('materno');
            $table->string('telefono');
            $table->string('celular');
            $table->string('ingreso');
            $table->string('facultad');
            $table->string('carrera');
            $table->string('semestre');
            $table->string('descapacidad');
            $table->string('hermanos');
            $table->string('otros');
            $table->string('observacion');
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
