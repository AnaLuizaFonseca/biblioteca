<?php
use App\Models\Aluno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/aluno', function () {
    $alunos = Aluno::all();
    return view('alunos.index', compact('alunos'));
})->name('alunos.index');

Route::post('/aluno', [AlunoController::class, 'store'])->name('alunos.store');

Route::view('/cadastro', [AlunoController::class, 'cadastro'])->name('cadastro');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [AlunoController::class, 'auth'])->name('login.auth');
Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio');
Route::get('/livros', function(){
    return view('livros');
})->name('livros');