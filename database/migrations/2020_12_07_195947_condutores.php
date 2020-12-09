<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Condutores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condutores', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->string('cpf',14);
            $table->string('nome');
            $table->string('identidade',20);
            $table->string('orgaoEmissor',20);
            $table->date('dtnasc');
            $table->string('habilitacao',20);
            $table->string('categoria',2);
            $table->date('validade');
            $table->integer('ativo');
            $table->unsignedBigInteger('idinstituicao')->unsigned();
            $table->foreign('idinstituicao')->references('id')->on('instituicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
