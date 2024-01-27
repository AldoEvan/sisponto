<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colaboradores')->insert([
            'nome' => 'ALDO TESTE',
            'cpf' => '123.456.789-00',
            'matricula' => 123456,
            'ativo' => true,
            'data_nascimento' => '1992-04-20',
            'data_admissao' => '2024-01-02',
            'cargo_id' => 1,
            'funcao_id' => 1,
            'user_id' => 1,
            'data_recissao' => null,
            'email' => 'aldo_evan@teste.com',
            'telefone' => '(91)98888-0000',
            'segunda_entrada1' => '08:00:00',
            'segunda_saida1' => '12:00:00',
            'segunda_entrada2' => '13:30:00',
            'segunda_saida2' => '17:30:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
