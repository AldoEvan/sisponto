<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_usuarios')->insert([
            'nome' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_usuarios')->insert([
            'nome' => 'Usuário',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
