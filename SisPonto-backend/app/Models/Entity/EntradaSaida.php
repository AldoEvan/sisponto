<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntradaSaida extends Model
{
    use HasFactory;
    protected $table = "entradas_saidas";
    use SoftDeletes;

}
