<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroPontoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registros_pontos')->insert([
            'colaborador_id' => 1,
            'feriado_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
