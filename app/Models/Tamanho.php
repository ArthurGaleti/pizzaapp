<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    use SoftDeletes;

    protected $table="tamanhos";
    protected $primaryKey = "id_tamanho";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //campos visualizavei/manipulaveis fora da classe
    protected $fillable = [
        'tamanho'
    ];
}
