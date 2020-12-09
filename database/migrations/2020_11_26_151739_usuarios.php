<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->string('login',10);
            $table->string('cpf',14);
            $table->string('nome',50);
            $table->string('email',60);
            $table->string('senha',10);
            $table->unsignedBigInteger('idinstituicao')->unsigned();
            $table->integer('nivel');
            $table->integer('bloqueado');
            $table->timestamps();
            $table->foreign('idinstituicao')->references('id')->on('instituicoes');});
            //trabalhando relacionamento
            

            

}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
