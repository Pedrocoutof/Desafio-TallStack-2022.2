<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampeonatosTable extends Migration
{

    public function up()
    {
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_inicio');
            $table->date('data_encerramento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('campeonatos');
    }
}
