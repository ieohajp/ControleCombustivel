<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class veiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->string('placa',10);
            $table->string('chassis',20);
            $table->integer('modelo')->unsigned();
            $table->integer('Tipoveiculo')->unsigned();
            $table->string('cor',20);
            $table->string('ano',10);
            $table->integer('capacidade_kg');
            $table->float('capacidade_lt',8,2);
            $table->integer('tara');
            $table->integer('kilometragem');
            $table->date('datacadastro');
            $table->string('tipocarroceria',6);
            $table->string('peso',8);
            $table->string('numeroeixo',50);
            $table->string('observacao');
            $table->unsignedBigInteger('idinstituicao')->unsigned();
            $table->integer('idcombustivel')->unsigned();
            $table->unsignedBigInteger('idsecretaria')->unsigned();
            $table->integer('ativo')->default(1);
            $table->timestamps();
            $table->foreign('idinstituicao')->references('id')->on('instituicoes');
            $table->foreign('idsecretaria')->references('id')->on('secretarias');
            $table->foreign('tipoveiculo')->references('id')->on('tipoveiculos');
            $table->foreign('idcombustivel')->references('id')->on('combustiveis');
            $table->foreign('modelo')->references('id')->on('modelos');
            
        }     );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
