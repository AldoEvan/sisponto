<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoUsuario extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tipos_usuarios";

    protected $fillable = [
        'name'
    ];


}
