<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Instituicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('instituicoes', function (Blueprint $table) {
                $table->Bigincrements('id');
                $table->string('cnpj',14);
                $table->string('instituicao',60);
                $table->string('endereco',100);
                $table->string('numero',5);
                $table->string('bairro',30);
                $table->string('cep',8);
                $table->string('fone',20);
                $table->string('responsavel',40);
                $table->integer('liberada');
                $table->timestamps();
                
               
               
          
            }); 

    }

 
    public function down()
    {
        Schema::dropIfExists('instituicoes');
    }
}
