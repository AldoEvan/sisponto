<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(FeriadoSeeder::class); 
        $this->call(FuncaoSeeder::class);
        $this->call(CargoSeeder::class); 
        $this->call(TipoUsuarioSeeder::class); 
        $this->call(UserSeeder::class); 
        $this->call(ColaboradorSeeder::class); 
        $this->call(RegistroPontoSeeder::class); 
        $this->call(EntradaSaidaSeeder::class);

    }
}
