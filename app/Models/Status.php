<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use SoftDeletes;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
            'status'
    ];
}
