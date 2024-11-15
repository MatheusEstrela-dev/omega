<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Log;

class AlunoController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Criar o aluno no banco de dados com dados de mock
            Aluno::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => bcrypt($request->senha), //criptografar a senha
                'cpf' => $request->cpf,
            ]);

            // Redirecionar para a home com mensagem de sucesso
            return redirect('/home')->with('success', 'Cadastro realizado com sucesso!');
        } catch (\Exception $e) {
            // Registrar a exceção no log e redirecionar com mensagem de erro
            Log::error('Erro ao cadastrar aluno: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Erro ao realizar o cadastro!');
        }
    }
}
