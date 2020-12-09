<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContaBancarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contaBancarias', function (Blueprint $table) {
            $table->Bigincrements('id')->unique;
            $table->string('codigoBanco',5);
            $table->string('agencia',10);
            $table->string('digitoAgencia',2);
            $table->string('conta',30);
            $table->string('digitoConta',2);
            $table->string('descricaoConta',100);
            $table->string('convenio',20);
            $table->string('codigofebraban',20);
            $table->integer('ativa');
            $table->unsignedBigInteger('idinstituicao')->unsigned();
            $table->timestamps();
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
        Schema::dropIfExists('contaBancarias');
    }
}
