<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'Documento' => '1053858972',
            'name' => 'Alejandra',
            'email' => 'aleja10@gmail.com',
            'Apellido' => 'Apellido',
            'Cargo' => 'Administrador',
            'password' => Hash::make('1053858972'),
        ]);
    }
}
