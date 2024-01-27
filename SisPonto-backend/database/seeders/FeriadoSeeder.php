<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeriadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feriados')->insert([
            'nome' => 'Ano Novo',
            'data_feriado' => '2024-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feriados')->insert([
            'nome' => 'Natal',
            'data_feriado' => '2024-12-25',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feriados')->insert([
            'nome' => 'Dia do trabalhador',
            'data_feriado' => '2024-05-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
