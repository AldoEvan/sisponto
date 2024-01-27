<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistroPonto extends Model
{
    use HasFactory;
    protected $table = "registros_pontos";
    use SoftDeletes;
}
