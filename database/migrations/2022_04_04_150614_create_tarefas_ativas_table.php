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
        Schema::create('tarefas_ativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prazo');
            $table->unsignedBigInteger('tarefa_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('tarefa_id')->references('id')->on('tarefas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas_ativas');
    }
};
