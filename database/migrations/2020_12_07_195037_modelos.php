<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modelos extends Migration
{
    
  public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->Bigincrements('id')->unique();
            $table->string('modelo');
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
