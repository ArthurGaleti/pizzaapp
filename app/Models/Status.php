<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use SoftDeletes;

    protected $table="tipos_status";
    protected $primaryKey = "id_status";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //campos visualizavei/manipulaveis fora da classe
    protected $fillable = [
        'status'
    ];
}
