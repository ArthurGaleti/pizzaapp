<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use SoftDeletes;

    protected $table = 'tipo_produtos';
    protected $primaryKey = 'id_tipos_produto';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
            'tipos_produto'
    ];
}
