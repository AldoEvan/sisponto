<?php

namespace App\Models\Facade;

use App\Models\Entity\Colaborador;

class ColaboradorDB
{
    public static function getColaborador($id) {
        $colaborador = Colaborador::with('cargo', 'funcao', 'usuario')->find($id);
        return $colaborador;
    }

    public static function getColaboradores() {
        $colaborador = Colaborador::paginate(15);
        return $colaborador;
    }

    public static function getCpf($cpf) {
        $buscaCpf = Colaborador::where('cpf', $cpf)->first();
        return $buscaCpf;
    }
}
