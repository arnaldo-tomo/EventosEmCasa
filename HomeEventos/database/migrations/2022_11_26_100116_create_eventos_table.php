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
            $table->string('descricao');
            $table->string('cidade');
            $table->boolean('privado');
            $table->string('tipo_categoria');
            $table->string('hora');
            $table->string('participante')->nullable();
            $table->string('dataInicio');
            $table->string('dataFim');
            $table->string('duracao');
            $table->string('localizacao');
            $table->string('anexo')->nullable();
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
