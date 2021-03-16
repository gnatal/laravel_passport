<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CabeloCaracteristicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabelo_caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_cabelo');
            $table->string('cor_cabelo');
            $table->string('oleosidade_cabelo');
            $table->string('espessura_cabelo');
            $table->string('funcoes');
            $table->string('protecoes');

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
        Schema::dropIfExists('cabelo_caracteristicas');
    }
}
