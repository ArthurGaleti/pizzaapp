<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TipoPagamento extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_pagamentos';
    protected $primaryKey = 'id_tipos_pagamento';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
            'tipo_pagamento'
    ];
}
