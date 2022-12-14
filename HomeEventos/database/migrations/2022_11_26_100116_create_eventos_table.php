<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('categoria_id')->constrained();
            $table->string('descricao', 1000);
            $table->string('cidade');
            $table->boolean('privado');
            $table->string('hora');
            $table->string('participante')->nullable();
            $table->date('dataInicio');
            $table->date('dataFim');
            $table->integer('duracao');
            $table->string('localizacao');
            $table->string('anexo')->nullable();
            $table->string('link')->nullable();
            $table->string('imagen');
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
        Schema::dropIfExists('eventos');
    }
}
