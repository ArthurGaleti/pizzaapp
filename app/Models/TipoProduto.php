<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use SoftDeletes;

    protected $table="tipos_produtos";
    protected $primaryKey = "id_tipo_produto";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //campos visualizavei/manipulaveis fora da classe
    protected $fillable = [
        'tipo_pedido'
    ];
}
