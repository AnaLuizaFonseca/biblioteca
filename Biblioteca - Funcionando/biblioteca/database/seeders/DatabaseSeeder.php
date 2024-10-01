<?php

namespace Database\Seeders;

use AlunosTableSeeder;
use App\Models\Aluno;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Aluno::create([
            'email' => '12345',
            'nome' => 'João da Silva',
            // ... outros campos
        ]);
    }
}
