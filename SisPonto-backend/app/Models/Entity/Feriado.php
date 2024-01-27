<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feriado extends Model
{
    use HasFactory;
    protected $table = 'feriados';
    use SoftDeletes;
}
