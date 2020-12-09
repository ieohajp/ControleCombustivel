<?php

namespace App\Models;

use App\tomador;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instituicao extends Model
{
  protected $table = 'instituicoes';
  protected $fillable = [ 'id',
                         'instituicao',
                         'cnpj',
                         'endereco',
                         'numero',
                         'bairro',
                         'cep',
                         'fone',
                         'responsavel',
                         'liberada'];
  protected $timestamp = false;

   public function usuario(){
        return $this->hasMany(usuario::class,'idinstituicao','id');
        
   }

   public function tomador(){
        return $this->hasMany(tomador::class, 'idinstituicao','id');
   }

   public function contabancaria(){
         return $this->hasMany(contabancaria::class,'idinstituicao','id');
   }
 
   
}
