<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Models\TipoProduto;

class Produto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produtos';
    protected $primarykey = 'id_produto';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
            'id_produto',
            'id_tipo_produto',
            'nome',
            'descricao',
            'foto',
            'observacoes',
    ];

    /**
     * --------------------------------------
     * RELACIONAMENTOS
     * --------------------------------------
     */

    public function usuarios():object{
        return $this->belongsTo(User::class,
                                'id_tipo_produto',
                                'id_tipo_produto');
     }
}
