<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AlunoController extends Controller
{
    public function
 store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:alunos',
            'senha' => 'required|confirmed',
        ]);

        // Cria um novo aluno no banco de dados
        $aluno = Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        // Redireciona para a página de lista de alunos com uma mensagem de sucesso
        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function auth(Request $request)
{
    // Validação das credenciais de login
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ]);

    $aluno = Aluno::where('email', $credentials['email'])->first();
    if($aluno){
        // Tenta autenticar o usuário
        if (Hash::check($credentials['senha'], $aluno->senha)) {
            // Regenera a sessão e redireciona para a página inicial
            $request->session()->regenerate();
            Auth::login($aluno);
            return redirect()->intended('inicio'); // ou use o nome da rota: redirect()->route('home')
        } else {
            return back()->withErrors(['email' => 'As credenciais não são válidas.']);
        }
    }else{
        return back()->withErrors(['email' => 'As ecredenciais não são válidas.']);
    }

    
}
}