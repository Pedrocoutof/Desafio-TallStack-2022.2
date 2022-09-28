<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadorsTable extends Migration
{
    public function up()
    {
        Schema::create('jogadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->integer('idade');
            $table->string('nacionalidade');
            $table->integer('vitorias');
            $table->integer('derrotas');
            $table->foreignId('times')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jogadors');
    }
}
