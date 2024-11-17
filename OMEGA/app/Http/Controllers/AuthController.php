<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar os dados do formulário
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Verificar o usuário no banco de dados
        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && $request->password === $user->password) {
            // Configurar os dados do usuário na sessão
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            Session::put('user_role', $user->role);

            // Redirecionar com base no papel do usuário
            if ($user->role === 'admin') {
                return redirect('/admin/adminpage');
            } elseif ($user->role === 'aluno') {
                return redirect('/aluno/alunopage');
            }
        }

        // Redirecionar de volta em caso de erro
        return back()->withErrors(['email' => 'Usuário ou senha inválidos.']);
    }
}
