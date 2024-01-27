<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntradaSaidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas_saidas')->insert([
            'registro_ponto_id' => 1,
            'entrada' => '2024-01-20 08:00:00',
            'saida' => '2024-01-20 12:00:00',
            'latitude' => '123.456',
            'longitude' => '789.012',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
