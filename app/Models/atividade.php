<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atividade extends Model
{
    protected $table='atividades';
    protected $filltable=['codigo','nomeatividade'];
    public $timestamp = false;

    protected function atividade_tomadores(){
          return $this->belongsToMany(atividade_tomadores::class,'id','idatividade');

     

    }

}
