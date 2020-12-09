<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conbustiveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustiveis', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->string('combustivel');
            $table->integer('idvalores');
            $table->unsignedBigInteger('idinstituicao')->unsigned();
            $table->foreign('idinstituicao')->references('id')->on('instituicoes');
            $table->foreign('idvalores')->references('id')->on('rejustecombustivel');
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
