<?php

namespace App;

use App\Models\instituicao;
use Illuminate\Database\Eloquent\Model;

class atividade_tomador extends Model
{
    protected $table='atividade_tomadores';
    protected $filltable=['idatividade','idtomador','idinstituicao'];
    public $timestamp = false;

    protected function tomador(){
        return $this->belongsToMany(tomador::class,'id','idtomador');
    }
    protected function instituicao(){
         return $this->belongsTo(instituicao::class,'id','idinstituicao');
    }

    protected function atividade(){
         return $this->belongsTo(atividade::class, 'id','idatividade');
    }

}
