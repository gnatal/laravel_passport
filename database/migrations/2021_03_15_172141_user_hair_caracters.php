<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserHairCaracters extends Migration
{
    public function up()
    {
        Schema::create('user_hair_caracters', function (Blueprint $table) {
            $table->id();
            $table->string('espessura_cabelo');
            $table->string('comprimento_cabelo');
            $table->string('oleosidade_cabelo');
            $table->string('cor_cabelo');
            $table->string('tipo_cabelo');
            $table->string('pele_sensivel');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_hair_caracters');
    }
}
