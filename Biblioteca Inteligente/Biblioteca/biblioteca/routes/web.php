<?php

use App\Models\Aluno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController; // Certifique-se de importar o controller correto

Route::get('/aluno', function () {
    $alunos = Aluno::all();
    return view('alunos.index', compact('alunos'));
})->name('alunos.index');

Route::post('/aluno', [AlunoController::class, 'store'])->name('alunos.store');

Route::get('/cadastro', function(){
    return view('cadastro');
});