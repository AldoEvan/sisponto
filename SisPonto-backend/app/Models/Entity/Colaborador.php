<?php

namespace App\Models\Entity;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colaborador extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'colaboradores';
    
    protected $fillable = [
            'nome',
            'cpf', 
            'matricula', 
            'ativo', 
            'data_nascimento', 
            'data_admissao', 
            'cargo_id', 
            'funcao_id', 
            'usuario_id', 
            'data_recissao', 
            'email', 
            'telefone', 
            'segunda_entrada1', 
            'segunda_saida1', 
            'segunda_entrada2', 
            'segunda_saida2',
            'terca_entrada1', 
            'terca_saida1', 
            'terca_entrada2', 
            'terca_saida2',
            'quarta_entrada1', 
            'quarta_saida1', 
            'quarta_entrada2', 
            'quarta_saida2',  
            'quinta_entrada1', 
            'quinta_saida1', 
            'quinta_entrada2', 
            'quinta_saida2', 
            'sexta_entrada1', 
            'sexta_saida1', 
            'sexta_entrada2', 
            'sexta_saida2', 
            'sabado_entrada1', 
            'sabado_saida1', 
            'sabado_entrada2', 
            'sabado_saida2', 
            'domingo_entrada1', 
            'domingo_saida1', 
            'domingo_entrada2', 
            'domingo_saida2'
    ];

    public function cargo(){
        return $this->belongsTo(Cargo::class);
        
    }

    public function funcao(){
        return $this->belongsTo(Funcao::class);
        
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
