<?php

use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Alunos;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'email' => '12345',
            'nome' => 'João da Silva',
            // ... outros campos
        ]);
    }
}