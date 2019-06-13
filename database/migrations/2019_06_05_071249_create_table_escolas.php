<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEscolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo',255);
            $table->string('website',255);
            $table->string('none',55);
            $table->string('cnpj',15)->unique();
            $table->string('logradouro',200);
            $table->string('cidade',55);
            $table->string('uf',2);
            $table->string('bairro',55);
            $table->string('numero');
            $table->string('telefone',15);
            $table->string('email',55)->unique();
            $table->string('responsavel',55);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
