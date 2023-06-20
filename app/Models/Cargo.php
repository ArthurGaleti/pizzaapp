<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use app\Models\{User};

class Cargo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="cargos";
    protected $primaryKey = "id_cargo";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    protected $fillable = [
        'cargo'
    ];


    /**
     *--------------------------------------
     *           Relacionamento
     * -------------------------------------
     */

     public function usuarios(): object
     {
        return $this->belongsTo(User::class, 'id_cargo', 'id_cargo');
     }
}
