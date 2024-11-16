<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Tela de login
    public function loginPage()
    {
        return view('auth.login');
    }

    // Processo de login
    public function login(Request $request)
    {
        // Validar os dados recebidos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar o usuário pelo e-mail
        $user = User::where('email', $request->email)->first();

        // Verificar se o usuário existe e se a senha está correta
        if ($user && Hash::check($request->password, $user->password)) {
            // Armazenar o ID do usuário na sessão
            session(['user_id' => $user->id]);

            return redirect('/dashboard'); // Redirecionar após login bem-sucedido
        }

        // Retornar erro se as credenciais forem inválidas
        return back()->withErrors(['login_error' => 'E-mail ou senha inválidos.']);
    }

    // Logout do usuário
    public function logout()
    {
        // Remover os dados da sessão
        session()->forget('user_id');
        session()->flush();

        return redirect('/login');
    }
}
