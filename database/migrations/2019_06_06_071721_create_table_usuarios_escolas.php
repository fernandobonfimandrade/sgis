<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuariosEscolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_escolas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('principal');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->integer('escola_id')->unsigned();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
            $table->unique(['usuario_id', 'escola_id']);
            $table->unique(['usuario_id', 'principal']);
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
        Schema::dropIfExists('usuarios_escolas');
    }
}
