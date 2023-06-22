<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="enderecos";
    protected $primaryKey = "id_endereco";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'observacoes'

    ];

    /**
     *--------------------------------------
     *           Relacionamento
     * -------------------------------------
     */
/*
     public function produto(): object
     {
        return $this->hasOne( Produto::class, 'id_produto', 'id_produto');
     }

     public function tamanho(): object
     {
        return $this->hasOne( Tamanho::class, 'id_tamanho', 'id_tamanho');
     }
*/
}
