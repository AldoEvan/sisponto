<?php

namespace App\Models\Rules;

use App\Models\Entity\Colaborador;

class ColaboradorRule
{
    public static function salvar($request)
    {
        $colaborador = New Colaborador();
        $colaborador->nome = $request->nome;
        $colaborador->cpf = $request->cpf; 
        $colaborador->matricula = $request->matricula; 
        $colaborador->ativo = $request->ativo; 
        $colaborador->data_nascimento = $request->data_nascimento; 
        $colaborador->data_admissao = $request->data_admissao; 
        $colaborador->cargo_id = $request->cargo_id; 
        $colaborador->funcao_id = $request->funcao_id; 
        $colaborador->data_recissao = $request->data_recissao; 
        $colaborador->email = $request->email; 
        $colaborador->telefone = $request->telefone; 
        $colaborador->segunda_entrada1 = $request->segunda_entrada1; 
        $colaborador->segunda_saida1 = $request->segunda_saida1; 
        $colaborador->segunda_entrada2 = $request->segunda_entrada2; 
        $colaborador->segunda_saida2 = $request->segunda_saida2;
        $colaborador->terca_entrada1 = $request->terca_entrada1; 
        $colaborador->terca_saida1 = $request->terca_saida1; 
        $colaborador->terca_entrada2 = $request->terca_entrada2; 
        $colaborador->terca_saida2 = $request->terca_saida2;
        $colaborador->quarta_entrada1 = $request->quarta_entrada1; 
        $colaborador->quarta_saida1 = $request->quarta_saida1; 
        $colaborador->quarta_entrada2 = $request->quarta_entrada2; 
        $colaborador->quarta_saida2 = $request->quarta_saida2 ;  
        $colaborador->quinta_entrada1 = $request->quinta_entrada1; 
        $colaborador->quinta_saida1 = $request->quinta_saida1; 
        $colaborador->quinta_entrada2 = $request->quinta_entrada2; 
        $colaborador->quinta_saida2 = $request->quinta_saida2; 
        $colaborador->sexta_entrada1 = $request->sexta_entrada1; 
        $colaborador->sexta_saida1 = $request->sexta_saida1; 
        $colaborador->sexta_entrada2 = $request->sexta_entrada2; 
        $colaborador->sexta_saida2 = $request->sexta_saida2; 
        $colaborador->sabado_entrada1 = $request->sabado_entrada1; 
        $colaborador->sabado_saida1 = $request->sabado_saida1; 
        $colaborador->sabado_entrada2 = $request->sabado_entrada2; 
        $colaborador->sabado_saida2 = $request->sabado_saida2; 
        $colaborador->domingo_entrada1 = $request->domingo_entrada1; 
        $colaborador->domingo_saida1 = $request->domingo_saida1; 
        $colaborador->domingo_entrada2 = $request->domingo_entrada2; 
        $colaborador->domingo_saida2 = $request->domingo_saida2;
        $colaborador->save();    
    }

    public static function alterar($id, $request)
    {
        $colaborador = Colaborador::find($id);
        $colaborador->nome = $request->nome;
        $colaborador->cpf = $request->cpf; 
        $colaborador->matricula = $request->matricula; 
        $colaborador->ativo = $request->ativo; 
        $colaborador->data_nascimento = $request->data_nascimento; 
        $colaborador->data_admissao = $request->data_admissao; 
        $colaborador->cargo_id = $request->cargo_id; 
        $colaborador->funcao_id = $request->funcao_id; 
        $colaborador->data_recissao = $request->data_recissao; 
        $colaborador->email = $request->email; 
        $colaborador->telefone = $request->telefone; 
        $colaborador->segunda_entrada1 = $request->segunda_entrada1; 
        $colaborador->segunda_saida1 = $request->segunda_saida1; 
        $colaborador->segunda_entrada2 = $request->segunda_entrada2; 
        $colaborador->segunda_saida2 = $request->segunda_saida2;
        $colaborador->terca_entrada1 = $request->terca_entrada1; 
        $colaborador->terca_saida1 = $request->terca_saida1; 
        $colaborador->terca_entrada2 = $request->terca_entrada2; 
        $colaborador->terca_saida2 = $request->terca_saida2;
        $colaborador->quarta_entrada1 = $request->quarta_entrada1; 
        $colaborador->quarta_saida1 = $request->quarta_saida1; 
        $colaborador->quarta_entrada2 = $request->quarta_entrada2; 
        $colaborador->quarta_saida2 = $request->quarta_saida2 ;  
        $colaborador->quinta_entrada1 = $request->quinta_entrada1; 
        $colaborador->quinta_saida1 = $request->quinta_saida1; 
        $colaborador->quinta_entrada2 = $request->quinta_entrada2; 
        $colaborador->quinta_saida2 = $request->quinta_saida2; 
        $colaborador->sexta_entrada1 = $request->sexta_entrada1; 
        $colaborador->sexta_saida1 = $request->sexta_saida1; 
        $colaborador->sexta_entrada2 = $request->sexta_entrada2; 
        $colaborador->sexta_saida2 = $request->sexta_saida2; 
        $colaborador->sabado_entrada1 = $request->sabado_entrada1; 
        $colaborador->sabado_saida1 = $request->sabado_saida1; 
        $colaborador->sabado_entrada2 = $request->sabado_entrada2; 
        $colaborador->sabado_saida2 = $request->sabado_saida2; 
        $colaborador->domingo_entrada1 = $request->domingo_entrada1; 
        $colaborador->domingo_saida1 = $request->domingo_saida1; 
        $colaborador->domingo_entrada2 = $request->domingo_entrada2; 
        $colaborador->domingo_saida2 = $request->domingo_saida2;
        $colaborador->save();    
    }

    public static function deletar($id)
    {
        $colaborador = Colaborador::find($id);
        $colaborador->delete();
    }

}
