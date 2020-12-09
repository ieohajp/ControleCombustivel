<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reajustecombustivel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejustecombustivel', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->date('datareajuste');
            $table->float('valor');
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
