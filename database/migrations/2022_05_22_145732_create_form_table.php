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
    //Criação da tabela Formulário
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('perfil');
            $table->string('endereco');
            $table->bigInteger('perfil_id')->unsigned()->nullable();
            $table->timestamps();
            //Foreign Key
            $table->foreign('perfil_id')
                    ->references('id')
                    ->on('perfil')
                    ->onDelete('cascade');
        });        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form');
    }
};