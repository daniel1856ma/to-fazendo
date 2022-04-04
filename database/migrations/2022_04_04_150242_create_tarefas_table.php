<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('colaborador_id');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->foreign('colaborador_id')->references('id')->on('colaboradores');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
};
