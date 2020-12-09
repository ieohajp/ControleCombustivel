<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tomador extends Model
{
    protected $table='tomadores';
    protected $filltable = ['documento',
                            'nomeTomador',
                            'tipoTomador',
                            'dataCadastro',
                            'inscricao_municipal',
                            'inscricao_estadual',
                            'Contato',
                            'idAtividade',
                            'Regime',
                            'endereco',
                            'Numero',
                            'cep',
                            'cidade',
                            'bairro',
                            'uf',
                            'observacao',
                            'idinstituicao',
                            'ativo'];
      public $timestamp = false;    
      
      public function instituicao(){
        return $this->belongsTo(instituicao::class,  'id', 'idinstituicao');
      }
      public function atividades_tomadores(){
        return $this->belongsToMany(atividade_tomadores::class,  'idtomador', 'idAtividade');
      }

}
